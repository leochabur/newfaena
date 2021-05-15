<?php

namespace Proxies\__CG__\GestionFaenaBundle\Entity\gestionBD;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class AtributoProceso extends \GestionFaenaBundle\Entity\gestionBD\AtributoProceso implements \Doctrine\ORM\Proxy\Proxy
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
            return ['__isInitialized__', '' . "\0" . 'GestionFaenaBundle\\Entity\\gestionBD\\AtributoProceso' . "\0" . 'id', '' . "\0" . 'GestionFaenaBundle\\Entity\\gestionBD\\AtributoProceso' . "\0" . 'orden', '' . "\0" . 'GestionFaenaBundle\\Entity\\gestionBD\\AtributoProceso' . "\0" . 'decimales', '' . "\0" . 'GestionFaenaBundle\\Entity\\gestionBD\\AtributoProceso' . "\0" . 'mostrar', '' . "\0" . 'GestionFaenaBundle\\Entity\\gestionBD\\AtributoProceso' . "\0" . 'acumula', '' . "\0" . 'GestionFaenaBundle\\Entity\\gestionBD\\AtributoProceso' . "\0" . 'promedia', '' . "\0" . 'GestionFaenaBundle\\Entity\\gestionBD\\AtributoProceso' . "\0" . 'controlaStock', '' . "\0" . 'GestionFaenaBundle\\Entity\\gestionBD\\AtributoProceso' . "\0" . 'atributo'];
        }

        return ['__isInitialized__', '' . "\0" . 'GestionFaenaBundle\\Entity\\gestionBD\\AtributoProceso' . "\0" . 'id', '' . "\0" . 'GestionFaenaBundle\\Entity\\gestionBD\\AtributoProceso' . "\0" . 'orden', '' . "\0" . 'GestionFaenaBundle\\Entity\\gestionBD\\AtributoProceso' . "\0" . 'decimales', '' . "\0" . 'GestionFaenaBundle\\Entity\\gestionBD\\AtributoProceso' . "\0" . 'mostrar', '' . "\0" . 'GestionFaenaBundle\\Entity\\gestionBD\\AtributoProceso' . "\0" . 'acumula', '' . "\0" . 'GestionFaenaBundle\\Entity\\gestionBD\\AtributoProceso' . "\0" . 'promedia', '' . "\0" . 'GestionFaenaBundle\\Entity\\gestionBD\\AtributoProceso' . "\0" . 'controlaStock', '' . "\0" . 'GestionFaenaBundle\\Entity\\gestionBD\\AtributoProceso' . "\0" . 'atributo'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (AtributoProceso $proxy) {
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
    public function setOrden($orden)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setOrden', [$orden]);

        return parent::setOrden($orden);
    }

    /**
     * {@inheritDoc}
     */
    public function getOrden()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getOrden', []);

        return parent::getOrden();
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
    public function setAtributo(\GestionFaenaBundle\Entity\gestionBD\Atributo $atributo = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAtributo', [$atributo]);

        return parent::setAtributo($atributo);
    }

    /**
     * {@inheritDoc}
     */
    public function getAtributo()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAtributo', []);

        return parent::getAtributo();
    }

    /**
     * {@inheritDoc}
     */
    public function setControlaStock($controlaStock)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setControlaStock', [$controlaStock]);

        return parent::setControlaStock($controlaStock);
    }

    /**
     * {@inheritDoc}
     */
    public function getControlaStock()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getControlaStock', []);

        return parent::getControlaStock();
    }

    /**
     * {@inheritDoc}
     */
    public function setAcumula($acumula)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAcumula', [$acumula]);

        return parent::setAcumula($acumula);
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
    public function setPromedia($promedia)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPromedia', [$promedia]);

        return parent::setPromedia($promedia);
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
    public function setDecimales($decimales)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDecimales', [$decimales]);

        return parent::setDecimales($decimales);
    }

    /**
     * {@inheritDoc}
     */
    public function getDecimales()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDecimales', []);

        return parent::getDecimales();
    }

}
