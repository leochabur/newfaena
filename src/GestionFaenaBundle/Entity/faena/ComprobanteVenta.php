<?php

namespace GestionFaenaBundle\Entity\faena;

use Doctrine\ORM\Mapping as ORM;
use Psr\Log\LoggerInterface;

/**
 * ComprobanteVenta
 *
 * @ORM\Table(name="sp_st_cbte_vta_st")
 * @ORM\Entity(repositoryClass="GestionFaenaBundle\Repository\faena\ComprobanteVentaRepository")
 */
class ComprobanteVenta extends MovimientoStock
{
    /**
     * @var date
     *
     * @ORM\Column(name="fecha", type="date")
     */
    private $fecha;

    /**
     *
     * @ORM\Column(type="integer", name="numero", nullable=true)
     */
    private $numero;

    /**
     * @var bool
     *
     * @ORM\Column(name="confirmado", type="boolean")
     */
    private $confirmado = false;

    /**
     * @var bool
     *
     * @ORM\Column(name="finalizado", type="boolean")
     */
    private $finalizado = false;

    /**
    * @ORM\ManyToOne(targetEntity="GestionFaenaBundle\Entity\gestionBD\EntidadExterna") 
    * @ORM\JoinColumn(name="id_ent_ext", referencedColumnName="id")
    */   
    private $entidad;

    /**
     * @ORM\OneToMany(targetEntity="ItemCarga", mappedBy="comprobante", cascade={"persist", "remove"})
     */
    private $items;

    /**
     *
     * @ORM\Column(name="comentario", type="string", nullable=true)
     */
    private $comentario;
    
    /**
    * @ORM\ManyToOne(targetEntity="AppBundle\Entity\User") 
    * @ORM\JoinColumn(name="id_usr_confirm", referencedColumnName="id", nullable=true)
    */      
    private $userConfirm;

    /**
     * @ORM\Column(name="fechaConfirm", type="datetime", nullable=true)
    */      
    private $fechaConfirmacion;


    /**
    * @ORM\ManyToOne(targetEntity="AppBundle\Entity\User") 
    * @ORM\JoinColumn(name="id_usr_fin", referencedColumnName="id", nullable=true)
    */      
    private $userFinalizacion;

    /**
     * @ORM\Column(name="fechaFin", type="datetime", nullable=true)
    */      
    private $fechaFinalizacion;

    /**
    * @ORM\ManyToOne(targetEntity="OrdenCarga", inversedBy="comprobantes") 
    * @ORM\JoinColumn(name="id_ord_cga", referencedColumnName="id", nullable=true)
    */      
    private $ordenCarga;

    /**
    * @ORM\ManyToOne(targetEntity="HorarioCarga") 
    * @ORM\JoinColumn(name="id_hr_cga", referencedColumnName="id", nullable=true)
    */      
    private $horarioCarga;

    /**
     * @var bool
     *
     * @ORM\Column(name="asociado", type="boolean", options={"default": false})
     */
    private $asociado = false;

    /**
     * @ORM\ManyToOne(targetEntity="ComprobanteVenta", inversedBy="asociados")
     * @ORM\JoinColumn(name="id_comp_asoc", referencedColumnName="id", nullable=true)
     */
    private $original;

    /**
     * @ORM\OneToMany(targetEntity="ComprobanteVenta", mappedBy="original")
     */
    private $asociados;

    /**
     * @ORM\Column(name="generaSanitario", type="boolean", nullable=true)
     */
    private $generaSanitario;

    /**
     * @ORM\OneToMany(targetEntity="PrecioVentaArticulo", mappedBy="comprobante")
     */
    private $precios;

    /**
     * @ORM\OneToOne(targetEntity="GestionVentasBundle\Entity\RemitoVenta", mappedBy="comprobante")
     */
    private $remito;

    /**
     * @ORM\ManyToOne(targetEntity="GestionFaenaBundle\Entity\gestionBD\CamionVenta")
     * @ORM\JoinColumn(name="id_cm_vta", referencedColumnName="id", nullable=true)
     */
    private $camion;


    /**
     * @ORM\PrePersist
     */
    public function setVisiblePrePersist()
    {
        $this->generaSanitario = $this->entidad->getGeneraSanitario();
    }

    public function getTotalCantidadComprobante() //devuelve la cantidad de items registrados en un comprobante, usad para saber si el comprobante se debe procesar o no
    {
        $count = 0;
        foreach ($this->items as $it)
        {
            $count+= $it->getCantidad();
        }
        return $count;
    }

    public function getTotalItems()
    {
        $count = $this->items->count();
        foreach ($this->asociados as $asoc)
        {
            $count+= $asoc->getItems()->count();
        }
        return $count;
    }

    public function getCostoTotalComprobante() // Determina segun si los comprobantes tienen todos el precio cargado.
    {
        $totalCosto = 

        $count = $this->items->count();
        foreach ($this->asociados as $asoc)
        {
            $count+= $asoc->getItems()->count();
        }
        return $count;
    }

    public function getArrayOfTypeVentaUnitario()
    {
        $tipos = [];

        foreach ($this->items as $it)
        {
            if ($it->getCantidad())
            {
                $tipos[$it->getTipoVenta()->getId()] = 1;
            }
        }

        return $tipos;
    }

    public function getArrayOfTypeVenta()
    {
        $tipos = [];

        foreach ($this->items as $it)
        {
            if ($it->getCantidad())
            {
                $tipos[$it->getTipoVenta()->getId()] = 1;
            }
        }

        foreach ($this->asociados as $asoc)
        {
            foreach ($asoc->getItems() as $it)
            {
                if ($it->getCantidad())
                {
                    $tipos[$it->getTipoVenta()->getId()] = 1;
                }
            }
        }

        return $tipos;
    }


    /**
     * Constructor
     */
    public function __construct()
    {
        $this->items = new \Doctrine\Common\Collections\ArrayCollection();
        $this->asociados = new \Doctrine\Common\Collections\ArrayCollection();
        $this->precios = new \Doctrine\Common\Collections\ArrayCollection();
    }


    public function getItemOficial()
    {
        return $this->getDetalleItems(true);
    }

    public function getItemNoOficial()
    {
        return $this->getDetalleItems(false);
    }


    public function getDetailVenta(\GestionFaenaBundle\Entity\faena\TipoVenta $tipo)
    {
        $detalle = [];
        foreach ($this->items as $it)
        {
            $tv = $it->getTipoVenta();
            if ($tv == $tipo)
            {
                $detalle[] = $it; 
            }
        }
        return $detalle;
    }

    //devuelve los items segun el parametro oficiales/no oficiales
    public function getDetalleItemsOficial($oficial)
    {
        $detalle = [];
        foreach ($this->items as $it)
        {
            $tv = $it->getTipoVenta();

            if ($tv->getOficial() == $oficial)
            {
                $detalle[] = $it;

            }
        }
        return $detalle;
    }

    private function getDetalleItems($tipo)
    {
        $detalle = 0;
        foreach ($this->items as $it)
        {
            $tv = $it->getTipoVenta();
            if ($tipo)
            {
                if ($tv->getOficial())
                {
                    $detalle++;

                }
            }
            else
            {
                if (!$it->getTipoVenta()->getOficial())
                {
                    $detalle++;
                }
            }
        }
        return $detalle;
    }

    private function getDetalleVentas() //devuelve una coleccion con los articulos vendidos agrupados por cada tipo venta. x Ej....rayado y oficial
    {
        $detalle = [];
        foreach ($this->items as $it)
        {
            $tv = $it->getTipoVenta();

            if (!array_key_exists($tv->getId(), $detalle))
            {
                $detalle[$tv->getId()] = ['tipo' => $tv, 'items' => []];
            }

            $detalle[$tv->getId()]['items'][] = $it;

        }

        return $detalle;
    }

    public function getItemConTipoYArticulo(TipoVenta $tipo, \GestionFaenaBundle\Entity\gestionBD\Articulo $articulo, $zero = true)
    {
        foreach ($this->items as $it)
        {
            if (($it->getArticulo() == $articulo) && ($it->getTipoVenta() == $tipo))
            {
                if (($it->getCantidad()) ||  $zero)
                {
                    return $it;
                }
                return null;
            }
        }
        return null;
    }

    public function getItemTotalConArticuloYAsociados(\GestionFaenaBundle\Entity\gestionBD\Articulo $articulo)
    {
        $totales = [];

        foreach ($this->getItems() as $it)
        {            
            if ($it->getArticulo() == $articulo)
            {
                $totales[$it->getTipoVenta()->getId()] = $it->getCantidad();
            }
        }

        foreach ($this->getAsociados() as $asoc)
        {
            foreach ($asoc->getItems() as $it)
            {            
                if ($it->getArticulo() == $articulo)
                {
                    if (!array_key_exists($it->getTipoVenta()->getId(), $totales))
                    {
                        $totales[$it->getTipoVenta()->getId()] = 0;
                    }

                    $totales[$it->getTipoVenta()->getId()]+= $it->getCantidad();
                }
            }
        }
        return $totales;
    }


    private function updatePrecioVentaItem(\GestionFaenaBundle\Entity\faena\PrecioVentaArticulo $precio)
    {
        foreach ($this->getItems() as $it)
        {            
            if ($it->getArticulo() == $precio->getArticulo())
            {
                $it->setPrecioUnitario($precio->getPrecio());
                return;
            }
        }
    }


    public function updateAllItemsFromPrices()
    {

        foreach ($this->precios as $p)
        {
            $this->updatePrecioVentaItem($p);

            foreach ($this->getAsociados() as $asoc)
            {
                $asoc->updatePrecioVentaItem($p);
            }
        }
    }

    public function getArticulosPreciosSort()
    {

        $articulos = [];

        foreach ($this->getPrecios() as $it)
        {            
            $art = $it->getArticulo();

            $id_cv = ($art->getCategoriaVenta()?$art->getCategoriaVenta()->getId():10000);

            $id_c = ($art->getCategoria()?$art->getCategoria()->getOrden():10000);

            $key = $id_cv."-".$id_c."-".($art->getOrden()?$art->getOrden()."-".$art->getId():$art->getId());

            $articulos[$key] = $it;
        }

        return $articulos;
    }


    //devuelve una colleccion con los articulos individuales vendidos en todos los comprobantes asociados y propios
    public function getAllArticulos()
    {

        $articulos = [];

        foreach ($this->getItems() as $it)
        {            
            $art = $it->getArticulo();

            $id_cv = ($art->getCategoriaVenta()?$art->getCategoriaVenta()->getId():10000);

            $id_c = ($art->getCategoria()?$art->getCategoria()->getOrden():10000);

            $key = $id_cv."-".$id_c."-".($art->getOrden()?$art->getOrden()."-".$art->getId():$art->getId());

            $articulos[$art->getId()] = [0 => $key, 1 => $art];
        }

        foreach ($this->getAsociados() as $asoc)
        {
            foreach ($asoc->getItems() as $it)
            {            
                $art = $it->getArticulo();

                $id_cv = ($art->getCategoriaVenta()?$art->getCategoriaVenta()->getId():10000);

                $id_c = ($art->getCategoria()?$art->getCategoria()->getOrden():10000);

                $key = $id_cv."-".$id_c."-".($art->getOrden()?$art->getOrden()."-".$art->getId():$art->getId());

                if (!array_key_exists($key, $articulos))
                {
                    $articulos[$art->getId()] = [0 => $key, 1 => $art];
                }                
            }
        }

        return $articulos;
    }

    protected function updateVisible()
    {
        $this->setVisible(false);
    }

    public function updateValues($promedio, $entityManager, $automatico = false)
    {

    }

    public function getType()
    {
        
    }

    /**
     * Set confirmado
     *
     * @param boolean $confirmado
     *
     * @return ComprobanteVenta
     */
    public function setConfirmado($confirmado)
    {
        $this->confirmado = $confirmado;

        return $this;
    }

    /**
     * Get confirmado
     *
     * @return bool
     */
    public function getConfirmado()
    {
        return $this->confirmado;
    }

    /**
     * Set fecha
     *
     * @param \DateTime $fecha
     *
     * @return ComprobanteVenta
     */
    public function setFecha($fecha)
    {
        $this->fecha = $fecha;

        return $this;
    }

    /**
     * Get fecha
     *
     * @return \DateTime
     */
    public function getFecha()
    {
        return $this->fecha;
    }

    /**
     * Set entidad
     *
     * @param \GestionFaenaBundle\Entity\gestionBD\EntidadExterna $entidad
     *
     * @return ComprobanteVenta
     */
    public function setEntidad(\GestionFaenaBundle\Entity\gestionBD\EntidadExterna $entidad = null)
    {
        $this->entidad = $entidad;

        return $this;
    }

    /**
     * Get entidad
     *
     * @return \GestionFaenaBundle\Entity\gestionBD\EntidadExterna
     */
    public function getEntidad()
    {
        return $this->entidad;
    }

    /**
     * Add item
     *
     * @param \GestionFaenaBundle\Entity\faena\ItemCarga $item
     *
     * @return ComprobanteVenta
     */
    public function addItem(\GestionFaenaBundle\Entity\faena\ItemCarga $item)
    {
        $this->items[] = $item;

        return $this;
    }

    /**
     * Remove item
     *
     * @param \GestionFaenaBundle\Entity\faena\ItemCarga $item
     */
    public function removeItem(\GestionFaenaBundle\Entity\faena\ItemCarga $item)
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

    /**
     * Set comentario
     *
     * @param string $comentario
     *
     * @return ComprobanteVenta
     */
    public function setComentario($comentario)
    {
        $this->comentario = $comentario;

        return $this;
    }

    /**
     * Get comentario
     *
     * @return string
     */
    public function getComentario()
    {
        return $this->comentario;
    }

    /**
     * Set finalizado
     *
     * @param boolean $finalizado
     *
     * @return ComprobanteVenta
     */
    public function setFinalizado($finalizado)
    {
        $this->finalizado = $finalizado;

        return $this;
    }

    /**
     * Get finalizado
     *
     * @return boolean
     */
    public function getFinalizado()
    {
        return $this->finalizado;
    }

    /**
     * Set userConfirm
     *
     * @param \AppBundle\Entity\User $userConfirm
     *
     * @return ComprobanteVenta
     */
    public function setUserConfirm(\AppBundle\Entity\User $userConfirm = null)
    {
        $this->userConfirm = $userConfirm;

        return $this;
    }

    /**
     * Get userConfirm
     *
     * @return \AppBundle\Entity\User
     */
    public function getUserConfirm()
    {
        return $this->userConfirm;
    }

    /**
     * Set numero
     *
     * @param integer $numero
     *
     * @return ComprobanteVenta
     */
    public function setNumero($numero)
    {
        $this->numero = $numero;

        return $this;
    }

    /**
     * Get numero
     *
     * @return integer
     */
    public function getNumero()
    {
        return $this->numero;
    }

    /**
     * Set ordenCarga
     *
     * @param \GestionFaenaBundle\Entity\faena\OrdenCarga $ordenCarga
     *
     * @return ComprobanteVenta
     */
    public function setOrdenCarga(\GestionFaenaBundle\Entity\faena\OrdenCarga $ordenCarga = null)
    {
        $this->ordenCarga = $ordenCarga;

        return $this;
    }

    /**
     * Get ordenCarga
     *
     * @return \GestionFaenaBundle\Entity\faena\OrdenCarga
     */
    public function getOrdenCarga()
    {
        return $this->ordenCarga;
    }

    /**
     * Set fechaConfirmacion
     *
     * @param \DateTime $fechaConfirmacion
     *
     * @return ComprobanteVenta
     */
    public function setFechaConfirmacion($fechaConfirmacion)
    {
        $this->fechaConfirmacion = $fechaConfirmacion;

        return $this;
    }

    /**
     * Get fechaConfirmacion
     *
     * @return \DateTime
     */
    public function getFechaConfirmacion()
    {
        return $this->fechaConfirmacion;
    }

    /**
     * Set fechaFinalizacion
     *
     * @param \DateTime $fechaFinalizacion
     *
     * @return ComprobanteVenta
     */
    public function setFechaFinalizacion($fechaFinalizacion)
    {
        $this->fechaFinalizacion = $fechaFinalizacion;

        return $this;
    }

    /**
     * Get fechaFinalizacion
     *
     * @return \DateTime
     */
    public function getFechaFinalizacion()
    {
        return $this->fechaFinalizacion;
    }

    /**
     * Set userFinalizacion
     *
     * @param \AppBundle\Entity\User $userFinalizacion
     *
     * @return ComprobanteVenta
     */
    public function setUserFinalizacion(\AppBundle\Entity\User $userFinalizacion = null)
    {
        $this->userFinalizacion = $userFinalizacion;

        return $this;
    }

    /**
     * Get userFinalizacion
     *
     * @return \AppBundle\Entity\User
     */
    public function getUserFinalizacion()
    {
        return $this->userFinalizacion;
    }

    /**
     * Set horarioCarga
     *
     * @param \GestionFaenaBundle\Entity\faena\HorarioCarga $horarioCarga
     *
     * @return ComprobanteVenta
     */
    public function setHorarioCarga(\GestionFaenaBundle\Entity\faena\HorarioCarga $horarioCarga = null)
    {
        $this->horarioCarga = $horarioCarga;

        return $this;
    }

    /**
     * Get horarioCarga
     *
     * @return \GestionFaenaBundle\Entity\faena\HorarioCarga
     */
    public function getHorarioCarga()
    {
        return $this->horarioCarga;
    }

    /**
     * Set asociado
     *
     * @param boolean $asociado
     *
     * @return ComprobanteVenta
     */
    public function setAsociado($asociado)
    {
        $this->asociado = $asociado;

        return $this;
    }

    /**
     * Get asociado
     *
     * @return boolean
     */
    public function getAsociado()
    {
        return $this->asociado;
    }

    /**
     * Set original
     *
     * @param \GestionFaenaBundle\Entity\faena\ComprobanteVenta $original
     *
     * @return ComprobanteVenta
     */
    public function setOriginal(\GestionFaenaBundle\Entity\faena\ComprobanteVenta $original = null)
    {
        $this->original = $original;

        return $this;
    }

    /**
     * Get original
     *
     * @return \GestionFaenaBundle\Entity\faena\ComprobanteVenta
     */
    public function getOriginal()
    {
        return $this->original;
    }

    /**
     * Add asociado
     *
     * @param \GestionFaenaBundle\Entity\faena\ComprobanteVenta $asociado
     *
     * @return ComprobanteVenta
     */
    public function addAsociado(\GestionFaenaBundle\Entity\faena\ComprobanteVenta $asociado)
    {
        $this->asociados[] = $asociado;

        return $this;
    }

    /**
     * Remove asociado
     *
     * @param \GestionFaenaBundle\Entity\faena\ComprobanteVenta $asociado
     */
    public function removeAsociado(\GestionFaenaBundle\Entity\faena\ComprobanteVenta $asociado)
    {
        $this->asociados->removeElement($asociado);
    }

    /**
     * Get asociados
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getAsociados()
    {
        return $this->asociados;
    }

    /**
     * Set generaSanitario
     *
     * @param boolean $generaSanitario
     *
     * @return ComprobanteVenta
     */
    public function setGeneraSanitario($generaSanitario)
    {
        $this->generaSanitario = $generaSanitario;

        return $this;
    }

    /**
     * Get generaSanitario
     *
     * @return boolean
     */
    public function getGeneraSanitario()
    {
        return $this->generaSanitario;
    }

    /**
     * Add precio
     *
     * @param \GestionFaenaBundle\Entity\faena\PrecioVentaArticulo $precio
     *
     * @return ComprobanteVenta
     */
    public function addPrecio(\GestionFaenaBundle\Entity\faena\PrecioVentaArticulo $precio)
    {
        $this->precios[] = $precio;

        return $this;
    }

    /**
     * Remove precio
     *
     * @param \GestionFaenaBundle\Entity\faena\PrecioVentaArticulo $precio
     */
    public function removePrecio(\GestionFaenaBundle\Entity\faena\PrecioVentaArticulo $precio)
    {
        $this->precios->removeElement($precio);
    }

    /**
     * Get precios
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getPrecios()
    {
        return $this->precios;
    }

    /**
     * Set remito
     *
     * @param \GestionVentasBundle\Entity\RemitoVenta $remito
     *
     * @return ComprobanteVenta
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


    /**
     * Set camion.
     *
     * @param \GestionFaenaBundle\Entity\gestionBD\CamionVenta|null $camion
     *
     * @return ComprobanteVenta
     */
    public function setCamion(\GestionFaenaBundle\Entity\gestionBD\CamionVenta $camion = null)
    {
        $this->camion = $camion;

        return $this;
    }

    /**
     * Get camion.
     *
     * @return \GestionFaenaBundle\Entity\gestionBD\CamionVenta|null
     */
    public function getCamion()
    {
        return $this->camion;
    }
}
