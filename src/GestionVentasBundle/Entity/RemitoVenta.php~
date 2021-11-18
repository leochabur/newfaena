<?php

namespace GestionVentasBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RemitoVenta
 *
 * @ORM\Table(name="sp_vnta_rto_ofal")
 * @ORM\Entity(repositoryClass="GestionVentasBundle\Repository\RemitoVentaRepository")
 */
class RemitoVenta
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var int
     *
     * @ORM\Column(name="rsocial", type="string", nullable=true)
     */
    private $razonSocial;

    /**
     * @ORM\Column(name="cuit", type="string", nullable=true)
     */
    private $cuit;

    /**
     * @ORM\Column(name="direccio", type="string", nullable=true)
     */
    private $direccion;

    /**
     * @ORM\Column(name="numero", type="integer")
     */
    private $numero;

    /**
     * @var int
     *
     * @ORM\Column(name="pventa", type="integer", nullable=true)
     */
    private $puntoVenta;

    /**
     * @var int
     *
     * @ORM\Column(name="cae", type="integer")
     */
    private $cae;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="vencimientoCAE", type="date")
     */
    private $vencimientoCAE;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha", type="date")
     */
    private $fecha;

    /**
    * @ORM\ManyToOne(targetEntity="GestionFaenaBundle\Entity\gestionBD\EntidadComercial") 
    * @ORM\JoinColumn(name="id_ent_ext", referencedColumnName="id")
    */   
    private $entidad;

    /**
    * @ORM\OneToOne(targetEntity="GestionFaenaBundle\Entity\faena\ComprobanteVenta", inversedBy="remito") 
    * @ORM\JoinColumn(name="id_cbte_vta", referencedColumnName="id")
    */   
    private $comprobante;

    /**
    * @ORM\OneToMany(targetEntity="GestionFaenaBundle\Entity\faena\ItemCarga", mappedBy="remito") 
    */   
    private $items;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set numero
     *
     * @param integer $numero
     *
     * @return RemitoVenta
     */
    public function setNumero($numero)
    {
        $this->numero = $numero;

        return $this;
    }

    /**
     * Get numero
     *
     * @return int
     */
    public function getNumero()
    {
        return $this->numero;
    }

    /**
     * Set cae
     *
     * @param integer $cae
     *
     * @return RemitoVenta
     */
    public function setCae($cae)
    {
        $this->cae = $cae;

        return $this;
    }

    /**
     * Get cae
     *
     * @return int
     */
    public function getCae()
    {
        return $this->cae;
    }

    /**
     * Set vencimientoCAE
     *
     * @param \DateTime $vencimientoCAE
     *
     * @return RemitoVenta
     */
    public function setVencimientoCAE($vencimientoCAE)
    {
        $this->vencimientoCAE = $vencimientoCAE;

        return $this;
    }

    /**
     * Get vencimientoCAE
     *
     * @return \DateTime
     */
    public function getVencimientoCAE()
    {
        return $this->vencimientoCAE;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->items = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Set entidad
     *
     * @param \GestionFaenaBundle\Entity\gestionBD\EntidadComercial $entidad
     *
     * @return RemitoVenta
     */
    public function setEntidad(\GestionFaenaBundle\Entity\gestionBD\EntidadComercial $entidad = null)
    {
        $this->entidad = $entidad;

        return $this;
    }

    /**
     * Get entidad
     *
     * @return \GestionFaenaBundle\Entity\gestionBD\EntidadComercial
     */
    public function getEntidad()
    {
        return $this->entidad;
    }

    /**
     * Set comprobante
     *
     * @param \GestionFaenaBundle\Entity\faena\ComprobanteVenta $comprobante
     *
     * @return RemitoVenta
     */
    public function setComprobante(\GestionFaenaBundle\Entity\faena\ComprobanteVenta $comprobante = null)
    {
        $this->comprobante = $comprobante;

        return $this;
    }

    /**
     * Get comprobante
     *
     * @return \GestionFaenaBundle\Entity\faena\ComprobanteVenta
     */
    public function getComprobante()
    {
        return $this->comprobante;
    }

    /**
     * Add item
     *
     * @param \GestionFaenaBundle\Entity\faena\ItemCarga $item
     *
     * @return RemitoVenta
     */
    public function addItem(\GestionFaenaBundle\Entity\faena\ItemCarga $item)
    {
        $this->items[] = $item;

        return $this;
    }

    /**
     * Remove item
     *
     * @param \GestionFaenaBundle\Entity\faena\ItemCarga $item
     */
    public function removeItem(\GestionFaenaBundle\Entity\faena\ItemCarga $item)
    {
        $this->items->removeElement($item);
    }

    /**
     * Get items
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getItems()
    {
        return $this->items;
    }

    /**
     * Set fecha
     *
     * @param \DateTime $fecha
     *
     * @return RemitoVenta
     */
    public function setFecha($fecha)
    {
        $this->fecha = $fecha;

        return $this;
    }

    /**
     * Get fecha
     *
     * @return \DateTime
     */
    public function getFecha()
    {
        return $this->fecha;
    }

    /**
     * Set puntoVenta
     *
     * @param integer $puntoVenta
     *
     * @return RemitoVenta
     */
    public function setPuntoVenta($puntoVenta)
    {
        $this->puntoVenta = $puntoVenta;

        return $this;
    }

    /**
     * Get puntoVenta
     *
     * @return integer
     */
    public function getPuntoVenta()
    {
        return $this->puntoVenta;
    }

    /**
     * Set razonSocial
     *
     * @param string $razonSocial
     *
     * @return RemitoVenta
     */
    public function setRazonSocial($razonSocial)
    {
        $this->razonSocial = $razonSocial;

        return $this;
    }

    /**
     * Get razonSocial
     *
     * @return string
     */
    public function getRazonSocial()
    {
        return $this->razonSocial;
    }

    /**
     * Set cuit
     *
     * @param string $cuit
     *
     * @return RemitoVenta
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
     * @return RemitoVenta
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
}
