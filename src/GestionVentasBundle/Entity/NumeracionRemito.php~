<?php

namespace GestionVentasBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * NumeracionRemito
 *
 * @ORM\Table(name="sp_opc_num_comp")
 * @ORM\Entity(repositoryClass="GestionVentasBundle\Repository\NumeracionRemitoRepository")
 */

class NumeracionRemito
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
     * @ORM\Column(name="cai", type="string", length=255)
     */
    private $cai;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="vencimiento", type="datetime")
     */
    private $vencimiento;

    /**
     * @var int
     *
     * @ORM\Column(name="ultimoUtilizado", type="integer")
     */
    private $ultimoUtilizado = 0;

    /**
     * @ORM\Column(name="puntoVenta", type="integer")
     */
    private $puntoVenta = 19;

    /**
     *
     * @ORM\Column(name="activo", type="boolean")
     */

    private $activo = true;


    public function incNumero()
    {
        $this->ultimoUtilizado++;
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
     * @return NumeracionRemito
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
     * Set cai
     *
     * @param string $cai
     *
     * @return NumeracionRemito
     */
    public function setCai($cai)
    {
        $this->cai = $cai;

        return $this;
    }

    /**
     * Get cai
     *
     * @return string
     */
    public function getCai()
    {
        return $this->cai;
    }

    /**
     * Set vencimiento
     *
     * @param \DateTime $vencimiento
     *
     * @return NumeracionRemito
     */
    public function setVencimiento($vencimiento)
    {
        $this->vencimiento = $vencimiento;

        return $this;
    }

    /**
     * Get vencimiento
     *
     * @return \DateTime
     */
    public function getVencimiento()
    {
        return $this->vencimiento;
    }

    /**
     * Set ultimoUtilizado
     *
     * @param integer $ultimoUtilizado
     *
     * @return NumeracionRemito
     */
    public function setUltimoUtilizado($ultimoUtilizado)
    {
        $this->ultimoUtilizado = $ultimoUtilizado;

        return $this;
    }

    /**
     * Get ultimoUtilizado
     *
     * @return int
     */
    public function getUltimoUtilizado()
    {
        return $this->ultimoUtilizado;
    }

    /**
     * Set activo
     *
     * @param boolean $activo
     *
     * @return NumeracionRemito
     */
    public function setActivo($activo)
    {
        $this->activo = $activo;

        return $this;
    }

    /**
     * Get activo
     *
     * @return boolean
     */
    public function getActivo()
    {
        return $this->activo;
    }

    /**
     * Set puntoVenta
     *
     * @param integer $puntoVenta
     *
     * @return NumeracionRemito
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
}
