<?php

namespace GestionVentasBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ItemLista
 *
 * @ORM\Table(name="sp_vnta_it_list_pre")
 * @ORM\Entity(repositoryClass="GestionVentasBundle\Repository\ItemListaRepository")
 */
class ItemLista
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
     * @ORM\Column(name="valorKg", type="float", nullable=true)
     */
    private $valorKg;

    /**
     * @var float
     *
     * @ORM\Column(name="valorBulto", type="float", nullable=true)
     */
    private $valorBulto;

    /**
    * @ORM\ManyToOne(targetEntity="GestionFaenaBundle\Entity\gestionBD\Articulo") 
    * @ORM\JoinColumn(name="id_articulo", referencedColumnName="id")
    */      
    private $articulo;

    /**
    * @ORM\ManyToOne(targetEntity="ListaPrecio", inversedBy="items") 
    * @ORM\JoinColumn(name="id_lista_precio", referencedColumnName="id")
    */      
    private $listaPrecio;


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
     * Set valorKg
     *
     * @param float $valorKg
     *
     * @return ItemLista
     */
    public function setValorKg($valorKg)
    {
        $this->valorKg = $valorKg;

        return $this;
    }

    /**
     * Get valorKg
     *
     * @return float
     */
    public function getValorKg()
    {
        return $this->valorKg;
    }

    /**
     * Set valorBulto
     *
     * @param float $valorBulto
     *
     * @return ItemLista
     */
    public function setValorBulto($valorBulto)
    {
        $this->valorBulto = $valorBulto;

        return $this;
    }

    /**
     * Get valorBulto
     *
     * @return float
     */
    public function getValorBulto()
    {
        return $this->valorBulto;
    }

    /**
     * Set listaPrecio
     *
     * @param \GestionVentasBundle\Entity\ListaPrecio $listaPrecio
     *
     * @return ItemLista
     */
    public function setListaPrecio(\GestionVentasBundle\Entity\ListaPrecio $listaPrecio = null)
    {
        $this->listaPrecio = $listaPrecio;

        return $this;
    }

    /**
     * Get listaPrecio
     *
     * @return \GestionVentasBundle\Entity\ListaPrecio
     */
    public function getListaPrecio()
    {
        return $this->listaPrecio;
    }

    /**
     * Set articulo
     *
     * @param \GestionFaenaBundle\Entity\gestionBD\Articulo $articulo
     *
     * @return ItemLista
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
}
