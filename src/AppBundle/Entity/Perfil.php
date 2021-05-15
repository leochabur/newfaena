<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Perfil
 *
 * @ORM\Table(name="usuarios_perfiles_usuario")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\PerfilRepository")
 */
class Perfil
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
     * @ORM\Column(name="perfil", type="string", length=255, unique=true)
     */
    private $perfil;

    /**
     * @var bool
     *
     * @ORM\Column(name="isVenta", type="boolean")
     */
    private $isVenta;

    /**
     * @var bool
     *
     * @ORM\Column(name="isFaena", type="boolean")
     */
    private $isFaena;


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
     * Set perfil
     *
     * @param string $perfil
     *
     * @return Perfil
     */
    public function setPerfil($perfil)
    {
        $this->perfil = $perfil;

        return $this;
    }

    /**
     * Get perfil
     *
     * @return string
     */
    public function getPerfil()
    {
        return $this->perfil;
    }

    /**
     * Set isVenta
     *
     * @param boolean $isVenta
     *
     * @return Perfil
     */
    public function setIsVenta($isVenta)
    {
        $this->isVenta = $isVenta;

        return $this;
    }

    /**
     * Get isVenta
     *
     * @return bool
     */
    public function getIsVenta()
    {
        return $this->isVenta;
    }

    /**
     * Set isFaena
     *
     * @param boolean $isFaena
     *
     * @return Perfil
     */
    public function setIsFaena($isFaena)
    {
        $this->isFaena = $isFaena;

        return $this;
    }

    /**
     * Get isFaena
     *
     * @return bool
     */
    public function getIsFaena()
    {
        return $this->isFaena;
    }
}
