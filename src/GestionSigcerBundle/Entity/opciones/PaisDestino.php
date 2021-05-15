<?php

namespace GestionSigcerBundle\Entity\opciones;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
/**
 * PaisDestino
 *
 * @ORM\Table(name="sig_pis_dest")
 * @ORM\Entity(repositoryClass="GestionSigcerBundle\Repository\opciones\PaisDestinoRepository")
 */
class PaisDestino
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
     * @ORM\Column(name="pais", type="string", length=255, unique=true)
    * @Assert\NotNull(message="El campo no puede permanecer en blanco!")
     */
    private $pais;

    /**
     * @var int
     *
     * @ORM\Column(name="codigo", type="integer", unique=true)
    * @Assert\NotNull(message="El campo no puede permanecer en blanco!")
     */
    private $codigo;


    public function __toString()
    {
        return $this->pais;
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
     * Set pais
     *
     * @param string $pais
     *
     * @return PaisDestino
     */
    public function setPais($pais)
    {
        $this->pais = $pais;

        return $this;
    }

    /**
     * Get pais
     *
     * @return string
     */
    public function getPais()
    {
        return $this->pais;
    }

    /**
     * Set codigo
     *
     * @param integer $codigo
     *
     * @return PaisDestino
     */
    public function setCodigo($codigo)
    {
        $this->codigo = $codigo;

        return $this;
    }

    /**
     * Get codigo
     *
     * @return int
     */
    public function getCodigo()
    {
        return $this->codigo;
    }
}
