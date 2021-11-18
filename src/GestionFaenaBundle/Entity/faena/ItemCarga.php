<?php

namespace GestionFaenaBundle\Entity\faena;

use Doctrine\ORM\Mapping as ORM;

/**
 * ItemCarga
 *
 * @ORM\Table(name="sp_st_itm_cga")
 * @ORM\Entity(repositoryClass="GestionFaenaBundle\Repository\faena\ItemCargaRepository")
 */
class ItemCarga
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
     * @ORM\Column(name="cantidad", type="integer")
     */
    private $cantidad;

    /**
     *
     * @ORM\Column(name="preciounitario", type="float", nullable=true)
     */
    private $precioUnitario;

    /**
     *
     * @ORM\Column(name="preciototal", type="float", nullable=true)
     */
    private $precioTotal;

    /**
     * @ORM\ManyToOne(targetEntity="GestionFaenaBundle\Entity\gestionBD\Articulo")
     * @ORM\JoinColumn(name="id_art", referencedColumnName="id")
     */
    private $articulo;

    /**
     * @ORM\ManyToOne(targetEntity="GestionFaenaBundle\Entity\gestionBD\AtributoAbstracto")
     * @ORM\JoinColumn(name="id_atr_abs", referencedColumnName="id", nullable=true)
     */
    private $atributoAbstracto;

    /**
     * @ORM\ManyToOne(targetEntity="ComprobanteVenta", inversedBy="items")
     * @ORM\JoinColumn(name="id_it_cte", referencedColumnName="id", nullable=true)
     */
    private $comprobante;

    /**
     * @ORM\ManyToOne(targetEntity="TipoVenta")
     * @ORM\JoinColumn(name="id_tpo_vta", referencedColumnName="id", nullable=true)
     */
    private $tipoVenta;

    /**
    * @ORM\ManyToOne(targetEntity="ValorNumerico") 
    * @ORM\JoinColumn(name="id_it_mv_st", referencedColumnName="id", nullable=true)
    */      
    private $itemMovimientoStock;

    /**
     * @ORM\ManyToOne(targetEntity="GestionVentasBundle\Entity\RemitoVenta", inversedBy="items")
     * @ORM\JoinColumn(name="id_rmto_vta", referencedColumnName="id", nullable=true)
     */
    private $remito;

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
     * Set cantidad
     *
     * @param integer $cantidad
     *
     * @return ItemCarga
     */
    public function setCantidad($cantidad)
    {
        $this->cantidad = $cantidad;

        return $this;
    }

    /**
     * Get cantidad
     *
     * @return int
     */
    public function getCantidad()
    {
        return $this->cantidad;
    }

    /**
     * Set comprobante
     *
     * @param \GestionFaenaBundle\Entity\faena\ComprobanteVenta $comprobante
     *
     * @return ItemCarga
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
     * Set articulo
     *
     * @param \GestionFaenaBundle\Entity\gestionBD\Articulo $articulo
     *
     * @return ItemCarga
     */
    public function setArticulo(\GestionFaenaBundle\Entity\gestionBD\Articulo $articulo = null)
    {
        $this->articulo = $articulo;

        return $this;
    }

    /**
     * Get articulo
     *
     * @return \GestionFaenaBundle\Entity\gestionBD\Articulo
     */
    public function getArticulo()
    {
        return $this->articulo;
    }

    /**
     * Set atributoAbstracto
     *
     * @param \GestionFaenaBundle\Entity\gestionBD\AtributoAbstracto $atributoAbstracto
     *
     * @return ItemCarga
     */
    public function setAtributoAbstracto(\GestionFaenaBundle\Entity\gestionBD\AtributoAbstracto $atributoAbstracto = null)
    {
        $this->atributoAbstracto = $atributoAbstracto;

        return $this;
    }

    /**
     * Get atributoAbstracto
     *
     * @return \GestionFaenaBundle\Entity\gestionBD\AtributoAbstracto
     */
    public function getAtributoAbstracto()
    {
        return $this->atributoAbstracto;
    }

    /**
     * Set tipoVenta
     *
     * @param \GestionFaenaBundle\Entity\faena\TipoVenta $tipoVenta
     *
     * @return ItemCarga
     */
    public function setTipoVenta(\GestionFaenaBundle\Entity\faena\TipoVenta $tipoVenta = null)
    {
        $this->tipoVenta = $tipoVenta;

        return $this;
    }

    /**
     * Get tipoVenta
     *
     * @return \GestionFaenaBundle\Entity\faena\TipoVenta
     */
    public function getTipoVenta()
    {
        return $this->tipoVenta;
    }

    /**
     * Set itemMovimientoStock
     *
     * @param \GestionFaenaBundle\Entity\faena\ValorNumerico $itemMovimientoStock
     *
     * @return ItemCarga
     */
    public function setItemMovimientoStock(\GestionFaenaBundle\Entity\faena\ValorNumerico $itemMovimientoStock = null)
    {
        $this->itemMovimientoStock = $itemMovimientoStock;

        return $this;
    }

    /**
     * Get itemMovimientoStock
     *
     * @return \GestionFaenaBundle\Entity\faena\ValorNumerico
     */
    public function getItemMovimientoStock()
    {
        return $this->itemMovimientoStock;
    }

    /**
     * Set precioUnitario
     *
     * @param float $precioUnitario
     *
     * @return ItemCarga
     */
    public function setPrecioUnitario($precioUnitario)
    {
        $this->precioUnitario = $precioUnitario;

        return $this;
    }

    /**
     * Get precioUnitario
     *
     * @return float
     */
    public function getPrecioUnitario()
    {
        return $this->precioUnitario;
    }

    /**
     * Set precioTotal
     *
     * @param float $precioTotal
     *
     * @return ItemCarga
     */
    public function setPrecioTotal($precioTotal)
    {
        $this->precioTotal = $precioTotal;

        return $this;
    }

    /**
     * Get precioTotal
     *
     * @return float
     */
    public function getPrecioTotal()
    {
        return $this->precioTotal;
    }

    /**
     * Set remito
     *
     * @param \GestionVentasBundle\Entity\RemitoVenta $remito
     *
     * @return ItemCarga
     */
    public function setRemito(\GestionVentasBundle\Entity\RemitoVenta $remito = null)
    {
        $this->remito = $remito;

        return $this;
    }

    /**
     * Get remito
     *
     * @return \GestionVentasBundle\Entity\RemitoVenta
     */
    public function getRemito()
    {
        return $this->remito;
    }
}
