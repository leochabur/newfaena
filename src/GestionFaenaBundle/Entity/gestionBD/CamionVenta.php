<?php

namespace GestionFaenaBundle\Entity\gestionBD;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * CamionVenta
 *
 * @ORM\Table(name="sp_gst_ent_cam_vta")
 * @ORM\Entity(repositoryClass="GestionFaenaBundle\Repository\gestionBD\CamionVentaRepository")
 */
class CamionVenta extends EntidadExterna
{

    ///La Patente se guarda en el campo valor de la EntidadExterna

    /**
     * @var string
     *
     * @ORM\Column(name="acoplado", type="string", length=255, nullable=true)
     */
    private $acoplado;

    /**
     * @var string
     *
     * @ORM\Column(name="senasa", type="string", length=255, nullable=true)
     * @Assert\NotNull(message="El campo no puede permanecer en blanco!")
     */
    private $senasa;

    /**
     * @var int
     *
     * @ORM\Column(name="cantPrecintos", type="integer")
     * @Assert\NotNull(message="El campo no puede permanecer en blanco!")
     */
    private $cantPrecintos;

    /**
     * @var bool
     *
     * @ORM\Column(name="activo", type="boolean")
     */
    private $activo = true;
    
    /**
    * @ORM\ManyToOne(targetEntity="EmpresaTransporte", inversedBy="camiones") 
    * @ORM\JoinColumn(name="id_emp_trans", referencedColumnName="id", nullable=true)
     * @Assert\NotNull(message="El campo no puede permanecer en blanco!")
    */   
    private $empresa;

    public function getInstance()
    {
        return 14;
    }

    protected function getIsCliente()
    {
        return false;
    }

    /**
     * Set acoplado.
     *
     * @param string $acoplado
     *
     * @return CamionVenta
     */
    public function setAcoplado($acoplado)
    {
        $this->acoplado = $acoplado;

        return $this;
    }

    /**
     * Get acoplado.
     *
     * @return string
     */
    public function getAcoplado()
    {
        return $this->acoplado;
    }

    /**
     * Set cantPrecintos.
     *
     * @param int $cantPrecintos
     *
     * @return CamionVenta
     */
    public function setCantPrecintos($cantPrecintos)
    {
        $this->cantPrecintos = $cantPrecintos;

        return $this;
    }

    /**
     * Get cantPrecintos.
     *
     * @return int
     */
    public function getCantPrecintos()
    {
        return $this->cantPrecintos;
    }

    /**
     * Set activo.
     *
     * @param bool $activo
     *
     * @return CamionVenta
     */
    public function setActivo($activo)
    {
        $this->activo = $activo;

        return $this;
    }

    /**
     * Get activo.
     *
     * @return bool
     */
    public function getActivo()
    {
        return $this->activo;
    }

    /**
     * Set empresa.
     *
     * @param \GestionFaenaBundle\Entity\gestionBD\EmpresaTransporte|null $empresa
     *
     * @return CamionVenta
     */
    public function setEmpresa(\GestionFaenaBundle\Entity\gestionBD\EmpresaTransporte $empresa = null)
    {
        $this->empresa = $empresa;

        return $this;
    }

    /**
     * Get empresa.
     *
     * @return \GestionFaenaBundle\Entity\gestionBD\EmpresaTransporte|null
     */
    public function getEmpresa()
    {
        return $this->empresa;
    }

    /**
     * Set senasa.
     *
     * @param string|null $senasa
     *
     * @return CamionVenta
     */
    public function setSenasa($senasa = null)
    {
        $this->senasa = $senasa;

        return $this;
    }

    /**
     * Get senasa.
     *
     * @return string|null
     */
    public function getSenasa()
    {
        return $this->senasa;
    }
}
