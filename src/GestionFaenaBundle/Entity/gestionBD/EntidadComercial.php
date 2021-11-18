<?php

namespace GestionFaenaBundle\Entity\gestionBD;

use Doctrine\ORM\Mapping as ORM;

/**
 * EntidadComercial
 *
 * @ORM\Table(name="sp_gst_ent_com")
 * @ORM\Entity(repositoryClass="GestionFaenaBundle\Repository\gestionBD\EntidadComercialRepository")
 */
abstract class EntidadComercial extends EntidadExterna
{

    /**
     * @var string
     *
     * @ORM\Column(name="cuit", type="string", length=13, nullable=true)
     */
    private $cuit;

    /**
     * @var string
     *
     * @ORM\Column(name="direccion", type="string", length=255, nullable=true)
     */
    private $direccion;

    /**
     * @ORM\ManyToOne(targetEntity="EntidadComercial", inversedBy="asociados")
     * @ORM\JoinColumn(name="id_ent", referencedColumnName="id", nullable=true)
     */
    private $original;

    /**
     * @ORM\OneToMany(targetEntity="EntidadComercial", mappedBy="original")
     */
    private $asociados;


    /**
     * @ORM\ManyToMany(targetEntity="GestionFaenaBundle\Entity\faena\TipoVenta")
     * @ORM\JoinTable(name="sp_gst_tpo_vtas_for_ent_com",
     *      joinColumns={@ORM\JoinColumn(name="id_ent_com", referencedColumnName="id")},
     *      inverseJoinColumns={@ORM\JoinColumn(name="id_tpo_vta", referencedColumnName="id")}
     *      )
     */
    private $tiposVenta;

    /**
     * @ORM\Column(name="generasanitario", type="boolean", options={"default":true})
     */
    private $generaSanitario = true;
    
    /**
     * @ORM\Column(name="facturaIndividual", type="boolean", options={"default":true})
     */
    private $facturaIndividual = true; //utilizado para indicar si se debe facturar a el mismo al titular de la cuenta, si genera sanitario s tru y no se factura idnividual, se debe generar el sanitario al titular (Caso Torrejon)

    /**
     * @ORM\Column(name="consignatario", type="boolean", options={"default":false}, nullable=true)
     */
    private $esConsignatario = false;

    /**
     * @ORM\ManyToOne(targetEntity="EntidadComercial")
     * @ORM\JoinColumn(name="id_tit_sanit", referencedColumnName="id", nullable=true)
     */
    private $titularSanitario;

    /**
     * @ORM\ManyToOne(targetEntity="GestionVentasBundle\Entity\ListaPrecio")
     * @ORM\JoinColumn(name="id_lista_precio", referencedColumnName="id", nullable=true)
     */
    private $listaPrecio;


    //Devuelve a que tipo tieneque afectar la venta en lo que seria el parte diario (Remito, Anexo, Consignatario)
    public abstract function getTypeOfVenta();

    public function aceptaTipoVenta($tipoVenta)
    {
        if ($this->tiposVenta->isEmpty()) 
        {
            return true;
        }

        foreach ($this->tiposVenta as $t)
        {
            if ($t === $tipoVenta)
            {
                return true;
            }
        }

        return false;

    }


    public function getTypesVenta()
    {
        $types = "";
        foreach ($this->tiposVenta as $t)
        {
            if ($types)
            {
                $types.=' - ';
            }
            $types.=$t;
        }
        return $types;
    }

    public function getAdmiteRayado()
    {
        return true;
    }
    
    /**
     * Set cuit
     *
     * @param string $cuit
     *
     * @return EntidadComercial
     */
    public function setCuit($cuit)
    {
        $this->cuit = $cuit;

        return $this;
    }

    /**
     * Get cuit
     *
     * @return string
     */
    public function getCuit()
    {
        return $this->cuit;
    }

    /**
     * Set direccion
     *
     * @param string $direccion
     *
     * @return EntidadComercial
     */
    public function setDireccion($direccion)
    {
        $this->direccion = $direccion;

        return $this;
    }

    /**
     * Get direccion
     *
     * @return string
     */
    public function getDireccion()
    {
        return $this->direccion;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->asociados = new \Doctrine\Common\Collections\ArrayCollection();
        $this->tiposVenta = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Set original
     *
     * @param \GestionFaenaBundle\Entity\gestionBD\EntidadComercial $original
     *
     * @return EntidadComercial
     */
    public function setOriginal(\GestionFaenaBundle\Entity\gestionBD\EntidadComercial $original = null)
    {
        $this->original = $original;

        return $this;
    }

    /**
     * Get original
     *
     * @return \GestionFaenaBundle\Entity\gestionBD\EntidadComercial
     */
    public function getOriginal()
    {
        return $this->original;
    }

    /**
     * Add asociado
     *
     * @param \GestionFaenaBundle\Entity\gestionBD\EntidadComercial $asociado
     *
     * @return EntidadComercial
     */
    public function addAsociado(\GestionFaenaBundle\Entity\gestionBD\EntidadComercial $asociado)
    {
        $this->asociados[] = $asociado;

        return $this;
    }

    /**
     * Remove asociado
     *
     * @param \GestionFaenaBundle\Entity\gestionBD\EntidadComercial $asociado
     */
    public function removeAsociado(\GestionFaenaBundle\Entity\gestionBD\EntidadComercial $asociado)
    {
        $this->asociados->removeElement($asociado);
    }

    /**
     * Get asociados
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getAsociados()
    {
        return $this->asociados;
    }

    /**
     * Add tiposVentum
     *
     * @param \GestionFaenaBundle\Entity\faena\TipoVenta $tiposVentum
     *
     * @return EntidadComercial
     */
    public function addTiposVentum(\GestionFaenaBundle\Entity\faena\TipoVenta $tiposVentum)
    {
        $this->tiposVenta[] = $tiposVentum;

        return $this;
    }

    /**
     * Remove tiposVentum
     *
     * @param \GestionFaenaBundle\Entity\faena\TipoVenta $tiposVentum
     */
    public function removeTiposVentum(\GestionFaenaBundle\Entity\faena\TipoVenta $tiposVentum)
    {
        $this->tiposVenta->removeElement($tiposVentum);
    }

    /**
     * Get tiposVenta
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getTiposVenta()
    {
        return $this->tiposVenta;
    }

    /**
     * Set generaSanitario
     *
     * @param boolean $generaSanitario
     *
     * @return EntidadComercial
     */
    public function setGeneraSanitario($generaSanitario)
    {
        $this->generaSanitario = $generaSanitario;

        return $this;
    }

    /**
     * Get generaSanitario
     *
     * @return boolean
     */
    public function getGeneraSanitario()
    {
        return $this->generaSanitario;
    }

    /**
     * Set esConsignatario
     *
     * @param boolean $esConsignatario
     *
     * @return EntidadComercial
     */
    public function setEsConsignatario($esConsignatario)
    {
        $this->esConsignatario = $esConsignatario;

        return $this;
    }

    /**
     * Get esConsignatario
     *
     * @return boolean
     */
    public function getEsConsignatario()
    {
        return $this->esConsignatario;
    }

    /**
     * Set facturaIndividual
     *
     * @param boolean $facturaIndividual
     *
     * @return EntidadComercial
     */
    public function setFacturaIndividual($facturaIndividual)
    {
        $this->facturaIndividual = $facturaIndividual;

        return $this;
    }

    /**
     * Get facturaIndividual
     *
     * @return boolean
     */
    public function getFacturaIndividual()
    {
        return $this->facturaIndividual;
    }

    /**
     * Set titularSanitario
     *
     * @param \GestionFaenaBundle\Entity\gestionBD\EntidadComercial $titularSanitario
     *
     * @return EntidadComercial
     */
    public function setTitularSanitario(\GestionFaenaBundle\Entity\gestionBD\EntidadComercial $titularSanitario = null)
    {
        $this->titularSanitario = $titularSanitario;

        return $this;
    }

    /**
     * Get titularSanitario
     *
     * @return \GestionFaenaBundle\Entity\gestionBD\EntidadComercial
     */
    public function getTitularSanitario()
    {
        return $this->titularSanitario;
    }

    /**
     * Set listaPrecio
     *
     * @param \GestionVentasBundle\Entity\ListaPrecio $listaPrecio
     *
     * @return EntidadComercial
     */
    public function setListaPrecio(\GestionVentasBundle\Entity\ListaPrecio $listaPrecio = null)
    {
        $this->listaPrecio = $listaPrecio;

        return $this;
    }

    /**
     * Get listaPrecio
     *
     * @return \GestionVentasBundle\Entity\ListaPrecio
     */
    public function getListaPrecio()
    {
        return $this->listaPrecio;
    }
}
