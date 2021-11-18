<?php

namespace GestionVentasBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ListaPrecio
 *
 * @ORM\Table(name="sp_vnta_list_pre")
 * @ORM\Entity(repositoryClass="GestionVentasBundle\Repository\ListaPrecioRepository")
 */
class ListaPrecio
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
     * @ORM\Column(name="codigo", type="string", length=255)
     */
    private $codigo;

    /**
     * @var string
     *
     * @ORM\Column(name="descripcion", type="string", length=255)
     */
    private $descripcion;

    /**
     * @var bool
     *
     * @ORM\Column(name="activa", type="boolean")
     */
    private $activa = true;


    /**
    * @ORM\OneToMany(targetEntity="ItemLista", mappedBy="listaPrecio", cascade={"persist", "remove"})
    */
    private $items;

    public function __toString()
    {
        return "Lista ".$this->codigo;
    }

    public function existePrecioArticulo($articulo)
    {
        foreach ($this->items as $it) 
        {
            if ($it->getArticulo()->getId() == $articulo->getId())
            {
                return $it;
            }
        }
        return null;
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
     * Set codigo
     *
     * @param string $codigo
     *
     * @return ListaPrecio
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
     * Set descripcion
     *
     * @param string $descripcion
     *
     * @return ListaPrecio
     */
    public function setDescripcion($descripcion)
    {
        $this->descripcion = $descripcion;

        return $this;
    }

    /**
     * Get descripcion
     *
     * @return string
     */
    public function getDescripcion()
    {
        return $this->descripcion;
    }

    /**
     * Set activa
     *
     * @param boolean $activa
     *
     * @return ListaPrecio
     */
    public function setActiva($activa)
    {
        $this->activa = $activa;

        return $this;
    }

    /**
     * Get activa
     *
     * @return bool
     */
    public function getActiva()
    {
        return $this->activa;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->items = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add item
     *
     * @param \GestionVentasBundle\Entity\ItemLista $item
     *
     * @return ListaPrecio
     */
    public function addItem(\GestionVentasBundle\Entity\ItemLista $item)
    {
        $this->items[] = $item;

        return $this;
    }

    /**
     * Remove item
     *
     * @param \GestionVentasBundle\Entity\ItemLista $item
     */
    public function removeItem(\GestionVentasBundle\Entity\ItemLista $item)
    {
        $this->items->removeElement($item);
    }

    /**
     * Get items
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getItems()
    {
        return $this->items;
    }

    public function getItemWithArticle(\GestionFaenaBundle\Entity\gestionBD\Articulo $articulo)
    {
        foreach ($this->items as $item) 
        {
            if ($item->getArticulo() == $articulo)
            {
                return $item;
            }
        }
        return null;
    }
}
