<?php

namespace Proxies\__CG__\GestionFaenaBundle\Entity\gestionBD;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class AtributoInformableExterno extends \GestionFaenaBundle\Entity\gestionBD\AtributoInformableExterno implements \Doctrine\ORM\Proxy\Proxy
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
            return ['__isInitialized__', '' . "\0" . 'GestionFaenaBundle\\Entity\\gestionBD\\AtributoInformableExterno' . "\0" . 'claseExterna'];
        }

        return ['__isInitialized__', '' . "\0" . 'GestionFaenaBundle\\Entity\\gestionBD\\AtributoInformableExterno' . "\0" . 'claseExterna'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (AtributoInformableExterno $proxy) {
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
    public function setClaseExterna($claseExterna)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setClaseExterna', [$claseExterna]);

        return parent::setClaseExterna($claseExterna);
    }

    /**
     * {@inheritDoc}
     */
    public function getClaseExterna()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getClaseExterna', []);

        return parent::getClaseExterna();
    }

    /**
     * {@inheritDoc}
     */
    public function getEntityValorAtributo(\GestionFaenaBundle\Entity\gestionBD\Atributo $atributo)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEntityValorAtributo', [$atributo]);

        return parent::getEntityValorAtributo($atributo);
    }

    /**
     * {@inheritDoc}
     */
    public function getClass()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getClass', []);

        return parent::getClass();
    }

    /**
     * {@inheritDoc}
     */
    public function getTipo()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTipo', []);

        return parent::getTipo();
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
    public function getNumeroOrden()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNumeroOrden', []);

        return parent::getNumeroOrden();
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
    public function __toString()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, '__toString', []);

        return parent::__toString();
    }

    /**
     * {@inheritDoc}
     */
    public function getCarga()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCarga', []);

        return parent::getCarga();
    }

    /**
     * {@inheritDoc}
     */
    public function getUnidadMedida()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUnidadMedida', []);

        return parent::getUnidadMedida();
    }

    /**
     * {@inheritDoc}
     */
    public function getCalculo()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCalculo', []);

        return parent::getCalculo();
    }

    /**
     * {@inheritDoc}
     */
    public function getAjuste()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAjuste', []);

        return parent::getAjuste();
    }

    /**
     * {@inheritDoc}
     */
    public function getManual()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getManual', []);

        return parent::getManual();
    }

    /**
     * {@inheritDoc}
     */
    public function getFactoresCalculo()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFactoresCalculo', []);

        return parent::getFactoresCalculo();
    }

    /**
     * {@inheritDoc}
     */
    public function getPosition()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPosition', []);

        return parent::getPosition();
    }

    /**
     * {@inheritDoc}
     */
    public function getAcumula()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAcumula', []);

        return parent::getAcumula();
    }

    /**
     * {@inheritDoc}
     */
    public function getDecimales()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDecimales', []);

        return parent::getDecimales();
    }

    /**
     * {@inheritDoc}
     */
    public function getPromedia()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPromedia', []);

        return parent::getPromedia();
    }

    /**
     * {@inheritDoc}
     */
    public function setActivo($activo)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setActivo', [$activo]);

        return parent::setActivo($activo);
    }

    /**
     * {@inheritDoc}
     */
    public function getActivo()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getActivo', []);

        return parent::getActivo();
    }

    /**
     * {@inheritDoc}
     */
    public function setNombre($nombre)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNombre', [$nombre]);

        return parent::setNombre($nombre);
    }

    /**
     * {@inheritDoc}
     */
    public function getNombre()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNombre', []);

        return parent::getNombre();
    }

    /**
     * {@inheritDoc}
     */
    public function setAsignado($asignado)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAsignado', [$asignado]);

        return parent::setAsignado($asignado);
    }

    /**
     * {@inheritDoc}
     */
    public function getAsignado()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAsignado', []);

        return parent::getAsignado();
    }

    /**
     * {@inheritDoc}
     */
    public function setPosicion($posicion)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPosicion', [$posicion]);

        return parent::setPosicion($posicion);
    }

    /**
     * {@inheritDoc}
     */
    public function getPosicion()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPosicion', []);

        return parent::getPosicion();
    }

    /**
     * {@inheritDoc}
     */
    public function setMostrar($mostrar)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setMostrar', [$mostrar]);

        return parent::setMostrar($mostrar);
    }

    /**
     * {@inheritDoc}
     */
    public function getMostrar()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getMostrar', []);

        return parent::getMostrar();
    }

    /**
     * {@inheritDoc}
     */
    public function setArticuloAtrConc(\GestionFaenaBundle\Entity\gestionBD\ArticuloAtributoConcepto $articuloAtrConc = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setArticuloAtrConc', [$articuloAtrConc]);

        return parent::setArticuloAtrConc($articuloAtrConc);
    }

    /**
     * {@inheritDoc}
     */
    public function getArticuloAtrConc()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getArticuloAtrConc', []);

        return parent::getArticuloAtrConc();
    }

    /**
     * {@inheritDoc}
     */
    public function manejaDecimales()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'manejaDecimales', []);

        return parent::manejaDecimales();
    }

    /**
     * {@inheritDoc}
     */
    public function setAsign()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAsign', []);

        return parent::setAsign();
    }

    /**
     * {@inheritDoc}
     */
    public function setAtributoAbstracto(\GestionFaenaBundle\Entity\gestionBD\AtributoAbstracto $atributoAbstracto = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAtributoAbstracto', [$atributoAbstracto]);

        return parent::setAtributoAbstracto($atributoAbstracto);
    }

    /**
     * {@inheritDoc}
     */
    public function getAtributoAbstracto()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAtributoAbstracto', []);

        return parent::getAtributoAbstracto();
    }

    /**
     * {@inheritDoc}
     */
    public function addValoresAtributo(\GestionFaenaBundle\Entity\faena\ValorAtributo $valoresAtributo)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addValoresAtributo', [$valoresAtributo]);

        return parent::addValoresAtributo($valoresAtributo);
    }

    /**
     * {@inheritDoc}
     */
    public function removeValoresAtributo(\GestionFaenaBundle\Entity\faena\ValorAtributo $valoresAtributo)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeValoresAtributo', [$valoresAtributo]);

        return parent::removeValoresAtributo($valoresAtributo);
    }

    /**
     * {@inheritDoc}
     */
    public function getValoresAtributos()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getValoresAtributos', []);

        return parent::getValoresAtributos();
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
    public function setEspejo($espejo)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEspejo', [$espejo]);

        return parent::setEspejo($espejo);
    }

    /**
     * {@inheritDoc}
     */
    public function getEspejo()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEspejo', []);

        return parent::getEspejo();
    }

    /**
     * {@inheritDoc}
     */
    public function setAtributoBase(\GestionFaenaBundle\Entity\gestionBD\AtributoAbstracto $atributoBase = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAtributoBase', [$atributoBase]);

        return parent::setAtributoBase($atributoBase);
    }

    /**
     * {@inheritDoc}
     */
    public function getAtributoBase()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAtributoBase', []);

        return parent::getAtributoBase();
    }

    /**
     * {@inheritDoc}
     */
    public function setMostrarAlCargar($mostrarAlCargar)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setMostrarAlCargar', [$mostrarAlCargar]);

        return parent::setMostrarAlCargar($mostrarAlCargar);
    }

    /**
     * {@inheritDoc}
     */
    public function getMostrarAlCargar()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getMostrarAlCargar', []);

        return parent::getMostrarAlCargar();
    }

    /**
     * {@inheritDoc}
     */
    public function setDefecto($defecto)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDefecto', [$defecto]);

        return parent::setDefecto($defecto);
    }

    /**
     * {@inheritDoc}
     */
    public function getDefecto()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDefecto', []);

        return parent::getDefecto();
    }

    /**
     * {@inheritDoc}
     */
    public function setRedondea($redondea)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setRedondea', [$redondea]);

        return parent::setRedondea($redondea);
    }

    /**
     * {@inheritDoc}
     */
    public function getRedondea()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getRedondea', []);

        return parent::getRedondea();
    }

    /**
     * {@inheritDoc}
     */
    public function setAdmiteCero($admiteCero)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAdmiteCero', [$admiteCero]);

        return parent::setAdmiteCero($admiteCero);
    }

    /**
     * {@inheritDoc}
     */
    public function getAdmiteCero()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAdmiteCero', []);

        return parent::getAdmiteCero();
    }

}
