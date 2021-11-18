<?php

namespace GestionFaenaBundle\Entity\faena;

use Doctrine\ORM\Mapping as ORM;

/**
 * PrecioVentaArticulo
 *
 * @ORM\Table(name="sp_st_cbte_vta_pcio_vta_art")
 * @ORM\Entity(repositoryClass="GestionFaenaBundle\Repository\faena\PrecioVentaArticuloRepository")
 */
class PrecioVentaArticulo
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
     * @var float
     *
     * @ORM\Column(name="precio", type="float", nullable=true)
     */
    private $precio;

    /**
    * @ORM\ManyToOne(targetEntity="GestionFaenaBundle\Entity\gestionBD\Articulo") 
    * @ORM\JoinColumn(name="id_art", referencedColumnName="id")
    */   
    private $articulo;

    /**
    * @ORM\ManyToOne(targetEntity="ComprobanteVenta", inversedBy="precios") 
    * @ORM\JoinColumn(name="id_cbte_vta", referencedColumnName="id")
    */   
    private $comprobante;

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
     * Set precio
     *
     * @param float $precio
     *
     * @return PrecioVentaArticulo
     */
    public function setPrecio($precio)
    {
        $this->precio = $precio;

        return $this;
    }

    /**
     * Get precio
     *
     * @return float
     */
    public function getPrecio()
    {
        return $this->precio;
    }

    /**
     * Set articulo
     *
     * @param \GestionFaenaBundle\Entity\gestionBD\Articulo $articulo
     *
     * @return PrecioVentaArticulo
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
     * Set comprobante
     *
     * @param \GestionFaenaBundle\Entity\faena\ComprobanteVenta $comprobante
     *
     * @return PrecioVentaArticulo
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
}
