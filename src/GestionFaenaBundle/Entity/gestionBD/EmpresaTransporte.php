<?php

namespace GestionFaenaBundle\Entity\gestionBD;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * EmpresaTransporte
 *
 * @ORM\Table(name="sp_gst_ent_emp_transporte")
 * @ORM\Entity(repositoryClass="GestionFaenaBundle\Repository\gestionBD\EmpresaTransporteRepository")
 */
class EmpresaTransporte extends EntidadExterna
{

    /**
     * @var string
     *
     * @ORM\Column(name="cuit", type="string", length=255)
     * @Assert\NotNull(message="El campo no puede permanecer en blanco!")
     */
    private $cuit;

    /**
     * @var string
     *
     * @ORM\Column(name="direccion", type="string", length=255)
     * @Assert\NotNull(message="El campo no puede permanecer en blanco!")
     */
    private $direccion;

    /**
     *@ORM\OneToMany(targetEntity="CamionVenta", mappedBy="empresa")
     */
    private $camiones;


    public function getInstance()
    {
        return 13;
    }

    protected function getIsCliente()
    {
        return false;
    }

    /**
     * Set cuit.
     *
     * @param string $cuit
     *
     * @return EmpresaTransporte
     */
    public function setCuit($cuit)
    {
        $this->cuit = $cuit;

        return $this;
    }

    /**
     * Get cuit.
     *
     * @return string
     */
    public function getCuit()
    {
        return $this->cuit;
    }

    /**
     * Set direccion.
     *
     * @param string $direccion
     *
     * @return EmpresaTransporte
     */
    public function setDireccion($direccion)
    {
        $this->direccion = $direccion;

        return $this;
    }

    /**
     * Get direccion.
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
        $this->camiones = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add camione.
     *
     * @param \GestionFaenaBundle\Entity\gestionBD\CamionVenta $camione
     *
     * @return EmpresaTransporte
     */
    public function addCamione(\GestionFaenaBundle\Entity\gestionBD\CamionVenta $camione)
    {
        $this->camiones[] = $camione;

        return $this;
    }

    /**
     * Remove camione.
     *
     * @param \GestionFaenaBundle\Entity\gestionBD\CamionVenta $camione
     *
     * @return boolean TRUE if this collection contained the specified element, FALSE otherwise.
     */
    public function removeCamione(\GestionFaenaBundle\Entity\gestionBD\CamionVenta $camione)
    {
        return $this->camiones->removeElement($camione);
    }

    /**
     * Get camiones.
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getCamiones()
    {
        return $this->camiones;
    }
}
