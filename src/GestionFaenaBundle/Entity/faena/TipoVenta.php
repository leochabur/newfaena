<?php

namespace GestionFaenaBundle\Entity\faena;

use Doctrine\ORM\Mapping as ORM;

/**
 * TipoVenta
 *
 * @ORM\Table(name="sp_st_tpo_vta")
 * @ORM\Entity(repositoryClass="GestionFaenaBundle\Repository\faena\TipoVentaRepository")
 */

//Representa el tipo del item del comprobantge (Rayado o No)

class TipoVenta
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
     * @ORM\Column(name="tipo", type="string", length=255, unique=true)
     */
    private $tipo;

    /**
     * @var string
     *
     * @ORM\Column(name="codigo", type="string", length=255, unique=true)
     */
    private $codigo;

    /**
     *
     * @ORM\Column(name="oficial", type="boolean")
     */
    private $oficial;


    /**
     * @var string
     *
     * @ORM\Column(name="entidadAsociada", type="string", length=255, nullable=true)
     */
    private $entidadAsociada; //para el caso de las ventas en rayado almacena cual es la entidad que se debe asociar al concepto

    public function __toString()
    {
        return strtoupper($this->codigo);
    }

    public function getShow()
    {
        if (!$this->oficial)
        {
            return " (".strtoupper($this->codigo).")";
        }
        elseif ($this->oficial)
        {
            return " (Factura)";
        }
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
     * Set tipo
     *
     * @param string $tipo
     *
     * @return TipoVenta
     */
    public function setTipo($tipo)
    {
        $this->tipo = $tipo;

        return $this;
    }

    /**
     * Get tipo
     *
     * @return string
     */
    public function getTipo()
    {
        return $this->tipo;
    }

    /**
     * Set codigo
     *
     * @param string $codigo
     *
     * @return TipoVenta
     */
    public function setCodigo($codigo)
    {
        $this->codigo = $codigo;

        return $this;
    }

    /**
     * Get codigo
     *
     * @return string
     */
    public function getCodigo()
    {
        return $this->codigo;
    }

    /**
     * Set oficial
     *
     * @param boolean $oficial
     *
     * @return TipoVenta
     */
    public function setOficial($oficial)
    {
        $this->oficial = $oficial;

        return $this;
    }

    /**
     * Get oficial
     *
     * @return boolean
     */
    public function getOficial()
    {
        return $this->oficial;
    }

    /**
     * Set entidadAsociada
     *
     * @param string $entidadAsociada
     *
     * @return TipoVenta
     */
    public function setEntidadAsociada($entidadAsociada)
    {
        $this->entidadAsociada = $entidadAsociada;

        return $this;
    }

    /**
     * Get entidadAsociada
     *
     * @return string
     */
    public function getEntidadAsociada()
    {
        return $this->entidadAsociada;
    }
}
