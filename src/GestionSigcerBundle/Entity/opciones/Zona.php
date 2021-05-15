<?php

namespace GestionSigcerBundle\Entity\opciones;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Zona
 *
 * @ORM\Table(name="sig_zna_repto")
 * @ORM\Entity(repositoryClass="GestionSigcerBundle\Repository\opciones\ZonaRepository")
 * @UniqueEntity(
 *     fields={"codigo", "zona", "region"},
 *     errorPath="codigo",
 *     message="Ya existe una zona con el codigo ingresado en la region!!"
 * )
 */
class Zona
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
     *
     * @ORM\Column(name="codigo", type="integer")
    * @Assert\NotNull(message="El campo no puede permanecer en blanco!")
     */
    private $codigo;

    /**
     * @var string
     *
     * @ORM\Column(name="zona", type="string", length=255)
    * @Assert\NotNull(message="El campo no puede permanecer en blanco!")
     */
    private $zona;

    /**
    * @ORM\ManyToOne(targetEntity="Region", inversedBy="zonas") 
    * @ORM\JoinColumn(name="id_region", referencedColumnName="id")
    * @Assert\NotNull(message="El campo no puede permanecer en blanco!")
    */      
    private $region;

    /**
     * @ORM\ManyToOne(targetEntity="Camion")
     * @ORM\JoinColumn(name="id_camion", referencedColumnName="id")
     * @Assert\NotNull(message="El campo no puede permanecer en blanco!")
     */
    private $camion;

    public function __toString()
    {
        return $this->codigo." - ".strtoupper($this->zona);
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
     * Set zona
     *
     * @param string $zona
     *
     * @return Zona
     */
    public function setZona($zona)
    {
        $this->zona = $zona;

        return $this;
    }

    /**
     * Get zona
     *
     * @return string
     */
    public function getZona()
    {
        return $this->zona;
    }

    /**
     * Set codigo
     *
     * @param integer $codigo
     *
     * @return Zona
     */
    public function setCodigo($codigo)
    {
        $this->codigo = $codigo;

        return $this;
    }

    /**
     * Get codigo
     *
     * @return integer
     */
    public function getCodigo()
    {
        return $this->codigo;
    }

    /**
     * Set cantPrecintos
     *
     * @param integer $cantPrecintos
     *
     * @return Zona
     */
    public function setCantPrecintos($cantPrecintos)
    {
        $this->cantPrecintos = $cantPrecintos;

        return $this;
    }

    /**
     * Get cantPrecintos
     *
     * @return integer
     */
    public function getCantPrecintos()
    {
        return $this->cantPrecintos;
    }

    /**
     * Set region
     *
     * @param \GestionSigcerBundle\Entity\opciones\Region $region
     *
     * @return Zona
     */
    public function setRegion(\GestionSigcerBundle\Entity\opciones\Region $region = null)
    {
        $this->region = $region;

        return $this;
    }

    /**
     * Get region
     *
     * @return \GestionSigcerBundle\Entity\opciones\Region
     */
    public function getRegion()
    {
        return $this->region;
    }

    /**
     * Set camion
     *
     * @param \GestionSigcerBundle\Entity\opciones\Camion $camion
     *
     * @return Zona
     */
    public function setCamion(\GestionSigcerBundle\Entity\opciones\Camion $camion = null)
    {
        $this->camion = $camion;

        return $this;
    }

    /**
     * Get camion
     *
     * @return \GestionSigcerBundle\Entity\opciones\Camion
     */
    public function getCamion()
    {
        return $this->camion;
    }
}
