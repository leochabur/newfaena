<?php

namespace GestionFaenaBundle\Entity\gestionBD;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
/**
 * EntidadExterna
 *
 * @ORM\Table(name="sp_gst_ent_ext")
 * @ORM\Entity(repositoryClass="GestionFaenaBundle\Repository\gestionBD\EntidadExternaRepository")
 * @ORM\InheritanceType("JOINED")
 * @ORM\DiscriminatorColumn(name="type", type="integer")
 * @ORM\DiscriminatorMap({1:"EntidadExterna",2: "Granja", 3: "Transportista", 4: "Cargador", 5: "Sucursal", 6: "Consignatario", 7: "Remito", 8: "Anexo", 9: "Reparto", 10: "Exportacion", 11:"EntidadComercial", 12: "Destinatario", 13: "EmpresaTransporte", 14: "CamionVenta"})
 * @ORM\HasLifecycleCallbacks()
 */

abstract class EntidadExterna
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
     * @var string
     *
     * @ORM\Column(name="valor", type="string", length=255)
     * @Assert\NotNull(message="El campo no puede permanecer en blanco!")
     */
    private $valor;

    /**
    * @ORM\ManyToOne(targetEntity="RubroEntidad", inversedBy="entidades") 
    * @ORM\JoinColumn(name="id_rub_ent", referencedColumnName="id", nullable=true)
    */   
    private $rubro;

    /**
     * @var boolean
     *
     * @ORM\Column(name="activa", type="boolean", options={"default":true})
     */
    private $activa = true;

    /**
     * @var cliente
     *
     * @ORM\Column(name="cliente", type="boolean", options={"default":true})
     */
    private $cliente;


    public abstract function getInstance();

    public function aceptaTipoVenta($tipoVenta)
    {
        return true;
    }


    /**
     * @ORM\PrePersist
     */
    public function setIsCliente()
    {
        $this->setCliente($this->getIsCliente());
    }

    protected abstract function getIsCliente();

    public function getRenspa()
    {
        return "";
    }

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
     * Set valor
     *
     * @param string $valor
     *
     * @return EntidadExterna
     */
    public function setValor($valor)
    {
        $this->valor = $valor;

        return $this;
    }

    /**
     * Get valor
     *
     * @return string
     */
    public function getValor()
    {
        return $this->valor;
    }

    public function __toString()
    {
        return strtoupper($this->valor);
    }

    public function getNombreVenta()
    {
        return strtoupper($this->valor);
    }

    /**
     * Set activa
     *
     * @param boolean $activa
     *
     * @return EntidadExterna
     */
    public function setActiva($activa)
    {
        $this->activa = $activa;

        return $this;
    }

    /**
     * Get activa
     *
     * @return boolean
     */
    public function getActiva()
    {
        return $this->activa;
    }

    /**
     * Set rubro
     *
     * @param \GestionFaenaBundle\Entity\gestionBD\RubroEntidad $rubro
     *
     * @return EntidadExterna
     */
    public function setRubro(\GestionFaenaBundle\Entity\gestionBD\RubroEntidad $rubro = null)
    {
        $this->rubro = $rubro;

        return $this;
    }

    /**
     * Get rubro
     *
     * @return \GestionFaenaBundle\Entity\gestionBD\RubroEntidad
     */
    public function getRubro()
    {
        return $this->rubro;
    }

    /**
     * Set cliente
     *
     * @param boolean $cliente
     *
     * @return EntidadExterna
     */
    public function setCliente($cliente)
    {
        $this->cliente = $cliente;

        return $this;
    }

    /**
     * Get cliente
     *
     * @return boolean
     */
    public function getCliente()
    {
        return $this->cliente;
    }
}
