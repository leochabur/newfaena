<?php

namespace Proxies\__CG__\GestionFaenaBundle\Entity\faena;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class TransferirStock extends \GestionFaenaBundle\Entity\faena\TransferirStock implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setCloner
     */
    public $__cloner__;

    /**
     * @var boolean flag indicating if this object was already initialized
     *
     * @see \Doctrine\Common\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array properties to be lazy loaded, with keys being the property
     *            names and values being their default values
     *
     * @see \Doctrine\Common\Persistence\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = [];



    /**
     * @param \Closure $initializer
     * @param \Closure $cloner
     */
    public function __construct($initializer = null, $cloner = null)
    {

        $this->__initializer__ = $initializer;
        $this->__cloner__      = $cloner;
    }







    /**
     * 
     * @return array
     */
    public function __sleep()
    {
        if ($this->__isInitialized__) {
            return ['__isInitialized__'];
        }

        return ['__isInitialized__'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (TransferirStock $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy->__getLazyProperties() as $property => $defaultValue) {
                    if ( ! array_key_exists($property, $existingProperties)) {
                        $proxy->$property = $defaultValue;
                    }
                }
            };

        }
    }

    /**
     * 
     */
    public function __clone()
    {
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', []);
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load()
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', []);
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __isInitialized()
    {
        return $this->__isInitialized__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitialized($initialized)
    {
        $this->__isInitialized__ = $initialized;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitializer(\Closure $initializer = null)
    {
        $this->__initializer__ = $initializer;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __getInitializer()
    {
        return $this->__initializer__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setCloner(\Closure $cloner = null)
    {
        $this->__cloner__ = $cloner;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific cloning logic
     */
    public function __getCloner()
    {
        return $this->__cloner__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     * @static
     */
    public function __getLazyProperties()
    {
        return self::$lazyPropertiesDefaults;
    }

    
    /**
     * {@inheritDoc}
     */
    public function __toString()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, '__toString', []);

        return parent::__toString();
    }

    /**
     * {@inheritDoc}
     */
    public function getType()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getType', []);

        return parent::getType();
    }

    /**
     * {@inheritDoc}
     */
    public function updateValues($promedio, $entityManager, $automatico = false)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'updateValues', [$promedio, $entityManager, $automatico]);

        return parent::updateValues($promedio, $entityManager, $automatico);
    }

    /**
     * {@inheritDoc}
     */
    public function setProcesoFnDayDestino(\GestionFaenaBundle\Entity\faena\ProcesoFaenaDiaria $procesoFnDayDestino = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setProcesoFnDayDestino', [$procesoFnDayDestino]);

        return parent::setProcesoFnDayDestino($procesoFnDayDestino);
    }

    /**
     * {@inheritDoc}
     */
    public function getProcesoFnDayDestino()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getProcesoFnDayDestino', []);

        return parent::getProcesoFnDayDestino();
    }

    /**
     * {@inheritDoc}
     */
    public function setMovimientoDestino(\GestionFaenaBundle\Entity\faena\MovimientoStock $movimientoDestino = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setMovimientoDestino', [$movimientoDestino]);

        return parent::setMovimientoDestino($movimientoDestino);
    }

    /**
     * {@inheritDoc}
     */
    public function getMovimientoDestino()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getMovimientoDestino', []);

        return parent::getMovimientoDestino();
    }

    /**
     * {@inheritDoc}
     */
    public function setMovimientoOrigen(\GestionFaenaBundle\Entity\faena\MovimientoStock $movimientoOrigen = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setMovimientoOrigen', [$movimientoOrigen]);

        return parent::setMovimientoOrigen($movimientoOrigen);
    }

    /**
     * {@inheritDoc}
     */
    public function getMovimientoOrigen()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getMovimientoOrigen', []);

        return parent::getMovimientoOrigen();
    }

    /**
     * {@inheritDoc}
     */
    public function isTransformaProductos()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'isTransformaProductos', []);

        return parent::isTransformaProductos();
    }

    /**
     * {@inheritDoc}
     */
    public function contieneValorDelAtributoExterno($arrayOfEntidades, $classGroup)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'contieneValorDelAtributoExterno', [$arrayOfEntidades, $classGroup]);

        return parent::contieneValorDelAtributoExterno($arrayOfEntidades, $classGroup);
    }

    /**
     * {@inheritDoc}
     */
    public function getValorWhitAtribute(\GestionFaenaBundle\Entity\gestionBD\AtributoAbstracto $atributo, $espejo = false)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getValorWhitAtribute', [$atributo, $espejo]);

        return parent::getValorWhitAtribute($atributo, $espejo);
    }

    /**
     * {@inheritDoc}
     */
    public function generateAtributes()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'generateAtributes', []);

        return parent::generateAtributes();
    }

    /**
     * {@inheritDoc}
     */
    public function verificarValores()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'verificarValores', []);

        return parent::verificarValores();
    }

    /**
     * {@inheritDoc}
     */
    public function getId()
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getId();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getId', []);

        return parent::getId();
    }

    /**
     * {@inheritDoc}
     */
    public function setProcesoFnDay(\GestionFaenaBundle\Entity\faena\ProcesoFaenaDiaria $procesoFnDay = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setProcesoFnDay', [$procesoFnDay]);

        return parent::setProcesoFnDay($procesoFnDay);
    }

    /**
     * {@inheritDoc}
     */
    public function getProcesoFnDay()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getProcesoFnDay', []);

        return parent::getProcesoFnDay();
    }

    /**
     * {@inheritDoc}
     */
    public function addValore(\GestionFaenaBundle\Entity\faena\ValorAtributo $valore)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addValore', [$valore]);

        return parent::addValore($valore);
    }

    /**
     * {@inheritDoc}
     */
    public function removeValore(\GestionFaenaBundle\Entity\faena\ValorAtributo $valore)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeValore', [$valore]);

        return parent::removeValore($valore);
    }

    /**
     * {@inheritDoc}
     */
    public function getValores()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getValores', []);

        return parent::getValores();
    }

    /**
     * {@inheritDoc}
     */
    public function setValores(\Doctrine\Common\Collections\ArrayCollection $valores)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setValores', [$valores]);

        return parent::setValores($valores);
    }

    /**
     * {@inheritDoc}
     */
    public function getValorConAtributo(\GestionFaenaBundle\Entity\gestionBD\AtributoAbstracto $atributo)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getValorConAtributo', [$atributo]);

        return parent::getValorConAtributo($atributo);
    }

    /**
     * {@inheritDoc}
     */
    public function setValorConAtributo(\GestionFaenaBundle\Entity\gestionBD\AtributoAbstracto $atributo, $valor)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setValorConAtributo', [$atributo, $valor]);

        return parent::setValorConAtributo($atributo, $valor);
    }

    /**
     * {@inheritDoc}
     */
    public function getValorAtributoConNombre($nombre)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getValorAtributoConNombre', [$nombre]);

        return parent::getValorAtributoConNombre($nombre);
    }

    /**
     * {@inheritDoc}
     */
    public function updateValueAtribute($valor)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'updateValueAtribute', [$valor]);

        return parent::updateValueAtribute($valor);
    }

    /**
     * {@inheritDoc}
     */
    public function getConceptos($conceptos, $proceso = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getConceptos', [$conceptos, $proceso]);

        return parent::getConceptos($conceptos, $proceso);
    }

    /**
     * {@inheritDoc}
     */
    public function getFactor()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFactor', []);

        return parent::getFactor();
    }

    /**
     * {@inheritDoc}
     */
    public function setArtProcFaena(\GestionFaenaBundle\Entity\gestionBD\ArticuloAtributoConcepto $artProcFaena = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setArtProcFaena', [$artProcFaena]);

        return parent::setArtProcFaena($artProcFaena);
    }

    /**
     * {@inheritDoc}
     */
    public function getArtProcFaena()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getArtProcFaena', []);

        return parent::getArtProcFaena();
    }

    /**
     * {@inheritDoc}
     */
    public function setVisible($visible)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setVisible', [$visible]);

        return parent::setVisible($visible);
    }

    /**
     * {@inheritDoc}
     */
    public function getVisible()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getVisible', []);

        return parent::getVisible();
    }

    /**
     * {@inheritDoc}
     */
    public function setVisiblePrePersist()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setVisiblePrePersist', []);

        return parent::setVisiblePrePersist();
    }

    /**
     * {@inheritDoc}
     */
    public function setEliminado($eliminado)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEliminado', [$eliminado]);

        return parent::setEliminado($eliminado);
    }

    /**
     * {@inheritDoc}
     */
    public function getEliminado()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEliminado', []);

        return parent::getEliminado();
    }

    /**
     * {@inheritDoc}
     */
    public function setFaenaDiaria(\GestionFaenaBundle\Entity\FaenaDiaria $faenaDiaria = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setFaenaDiaria', [$faenaDiaria]);

        return parent::setFaenaDiaria($faenaDiaria);
    }

    /**
     * {@inheritDoc}
     */
    public function getFaenaDiaria()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFaenaDiaria', []);

        return parent::getFaenaDiaria();
    }

    /**
     * {@inheritDoc}
     */
    public function setDestino(\GestionFaenaBundle\Entity\faena\MovimientoCompuesto $destino = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDestino', [$destino]);

        return parent::setDestino($destino);
    }

    /**
     * {@inheritDoc}
     */
    public function getDestino()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDestino', []);

        return parent::getDestino();
    }

    /**
     * {@inheritDoc}
     */
    public function setOrigen(\GestionFaenaBundle\Entity\faena\MovimientoCompuesto $origen = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setOrigen', [$origen]);

        return parent::setOrigen($origen);
    }

    /**
     * {@inheritDoc}
     */
    public function getOrigen()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getOrigen', []);

        return parent::getOrigen();
    }

    /**
     * {@inheritDoc}
     */
    public function setMovimientoAsociado(\GestionFaenaBundle\Entity\faena\MovimientoStock $movimientoAsociado = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setMovimientoAsociado', [$movimientoAsociado]);

        return parent::setMovimientoAsociado($movimientoAsociado);
    }

    /**
     * {@inheritDoc}
     */
    public function getMovimientoAsociado()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getMovimientoAsociado', []);

        return parent::getMovimientoAsociado();
    }

    /**
     * {@inheritDoc}
     */
    public function setUserAlta(\AppBundle\Entity\User $userAlta = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUserAlta', [$userAlta]);

        return parent::setUserAlta($userAlta);
    }

    /**
     * {@inheritDoc}
     */
    public function getUserAlta()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUserAlta', []);

        return parent::getUserAlta();
    }

    /**
     * {@inheritDoc}
     */
    public function setUserBaja(\AppBundle\Entity\User $userBaja = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUserBaja', [$userBaja]);

        return parent::setUserBaja($userBaja);
    }

    /**
     * {@inheritDoc}
     */
    public function getUserBaja()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUserBaja', []);

        return parent::getUserBaja();
    }

    /**
     * {@inheritDoc}
     */
    public function setFechaAlta($fechaAlta)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setFechaAlta', [$fechaAlta]);

        return parent::setFechaAlta($fechaAlta);
    }

    /**
     * {@inheritDoc}
     */
    public function getFechaAlta()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFechaAlta', []);

        return parent::getFechaAlta();
    }

    /**
     * {@inheritDoc}
     */
    public function setFechaBaja($fechaBaja)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setFechaBaja', [$fechaBaja]);

        return parent::setFechaBaja($fechaBaja);
    }

    /**
     * {@inheritDoc}
     */
    public function getFechaBaja()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFechaBaja', []);

        return parent::getFechaBaja();
    }

    /**
     * {@inheritDoc}
     */
    public function setProcesado($procesado)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setProcesado', [$procesado]);

        return parent::setProcesado($procesado);
    }

    /**
     * {@inheritDoc}
     */
    public function getProcesado()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getProcesado', []);

        return parent::getProcesado();
    }

    /**
     * {@inheritDoc}
     */
    public function setMovimientoHijo(\GestionFaenaBundle\Entity\faena\MovimientoStock $movimientoHijo = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setMovimientoHijo', [$movimientoHijo]);

        return parent::setMovimientoHijo($movimientoHijo);
    }

    /**
     * {@inheritDoc}
     */
    public function getMovimientoHijo()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getMovimientoHijo', []);

        return parent::getMovimientoHijo();
    }

}
