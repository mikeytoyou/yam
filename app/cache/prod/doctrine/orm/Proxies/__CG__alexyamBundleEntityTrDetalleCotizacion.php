<?php

namespace Proxies\__CG__\alex\yamBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class TrDetalleCotizacion extends \alex\yamBundle\Entity\TrDetalleCotizacion implements \Doctrine\ORM\Proxy\Proxy
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
    public static $lazyPropertiesDefaults = array();



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
            return array('__isInitialized__', '' . "\0" . 'alex\\yamBundle\\Entity\\TrDetalleCotizacion' . "\0" . 'idDetalCotizacion', '' . "\0" . 'alex\\yamBundle\\Entity\\TrDetalleCotizacion' . "\0" . 'titulo', '' . "\0" . 'alex\\yamBundle\\Entity\\TrDetalleCotizacion' . "\0" . 'precioAdulto', '' . "\0" . 'alex\\yamBundle\\Entity\\TrDetalleCotizacion' . "\0" . 'precioNinio', '' . "\0" . 'alex\\yamBundle\\Entity\\TrDetalleCotizacion' . "\0" . 'idMoneda', '' . "\0" . 'alex\\yamBundle\\Entity\\TrDetalleCotizacion' . "\0" . 'totalConImpuesto', '' . "\0" . 'alex\\yamBundle\\Entity\\TrDetalleCotizacion' . "\0" . 'totalSinImpuesto', '' . "\0" . 'alex\\yamBundle\\Entity\\TrDetalleCotizacion' . "\0" . 'totalTasaCambio', '' . "\0" . 'alex\\yamBundle\\Entity\\TrDetalleCotizacion' . "\0" . 'tasaCambio', '' . "\0" . 'alex\\yamBundle\\Entity\\TrDetalleCotizacion' . "\0" . 'dateAdd', '' . "\0" . 'alex\\yamBundle\\Entity\\TrDetalleCotizacion' . "\0" . 'dateUpd', '' . "\0" . 'alex\\yamBundle\\Entity\\TrDetalleCotizacion' . "\0" . 'idCotizacion');
        }

        return array('__isInitialized__', '' . "\0" . 'alex\\yamBundle\\Entity\\TrDetalleCotizacion' . "\0" . 'idDetalCotizacion', '' . "\0" . 'alex\\yamBundle\\Entity\\TrDetalleCotizacion' . "\0" . 'titulo', '' . "\0" . 'alex\\yamBundle\\Entity\\TrDetalleCotizacion' . "\0" . 'precioAdulto', '' . "\0" . 'alex\\yamBundle\\Entity\\TrDetalleCotizacion' . "\0" . 'precioNinio', '' . "\0" . 'alex\\yamBundle\\Entity\\TrDetalleCotizacion' . "\0" . 'idMoneda', '' . "\0" . 'alex\\yamBundle\\Entity\\TrDetalleCotizacion' . "\0" . 'totalConImpuesto', '' . "\0" . 'alex\\yamBundle\\Entity\\TrDetalleCotizacion' . "\0" . 'totalSinImpuesto', '' . "\0" . 'alex\\yamBundle\\Entity\\TrDetalleCotizacion' . "\0" . 'totalTasaCambio', '' . "\0" . 'alex\\yamBundle\\Entity\\TrDetalleCotizacion' . "\0" . 'tasaCambio', '' . "\0" . 'alex\\yamBundle\\Entity\\TrDetalleCotizacion' . "\0" . 'dateAdd', '' . "\0" . 'alex\\yamBundle\\Entity\\TrDetalleCotizacion' . "\0" . 'dateUpd', '' . "\0" . 'alex\\yamBundle\\Entity\\TrDetalleCotizacion' . "\0" . 'idCotizacion');
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (TrDetalleCotizacion $proxy) {
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
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', array());
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load()
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', array());
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
    public function getIdDetalCotizacion()
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getIdDetalCotizacion();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIdDetalCotizacion', array());

        return parent::getIdDetalCotizacion();
    }

    /**
     * {@inheritDoc}
     */
    public function setTitulo($titulo)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTitulo', array($titulo));

        return parent::setTitulo($titulo);
    }

    /**
     * {@inheritDoc}
     */
    public function getTitulo()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTitulo', array());

        return parent::getTitulo();
    }

    /**
     * {@inheritDoc}
     */
    public function setPrecioAdulto($precioAdulto)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPrecioAdulto', array($precioAdulto));

        return parent::setPrecioAdulto($precioAdulto);
    }

    /**
     * {@inheritDoc}
     */
    public function getPrecioAdulto()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPrecioAdulto', array());

        return parent::getPrecioAdulto();
    }

    /**
     * {@inheritDoc}
     */
    public function setPrecioNinio($precioNinio)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPrecioNinio', array($precioNinio));

        return parent::setPrecioNinio($precioNinio);
    }

    /**
     * {@inheritDoc}
     */
    public function getPrecioNinio()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPrecioNinio', array());

        return parent::getPrecioNinio();
    }

    /**
     * {@inheritDoc}
     */
    public function setIdMoneda($idMoneda)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIdMoneda', array($idMoneda));

        return parent::setIdMoneda($idMoneda);
    }

    /**
     * {@inheritDoc}
     */
    public function getIdMoneda()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIdMoneda', array());

        return parent::getIdMoneda();
    }

    /**
     * {@inheritDoc}
     */
    public function setTotalConImpuesto($totalConImpuesto)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTotalConImpuesto', array($totalConImpuesto));

        return parent::setTotalConImpuesto($totalConImpuesto);
    }

    /**
     * {@inheritDoc}
     */
    public function getTotalConImpuesto()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTotalConImpuesto', array());

        return parent::getTotalConImpuesto();
    }

    /**
     * {@inheritDoc}
     */
    public function setTotalSinImpuesto($totalSinImpuesto)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTotalSinImpuesto', array($totalSinImpuesto));

        return parent::setTotalSinImpuesto($totalSinImpuesto);
    }

    /**
     * {@inheritDoc}
     */
    public function getTotalSinImpuesto()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTotalSinImpuesto', array());

        return parent::getTotalSinImpuesto();
    }

    /**
     * {@inheritDoc}
     */
    public function setTotalTasaCambio($totalTasaCambio)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTotalTasaCambio', array($totalTasaCambio));

        return parent::setTotalTasaCambio($totalTasaCambio);
    }

    /**
     * {@inheritDoc}
     */
    public function getTotalTasaCambio()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTotalTasaCambio', array());

        return parent::getTotalTasaCambio();
    }

    /**
     * {@inheritDoc}
     */
    public function setTasaCambio($tasaCambio)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTasaCambio', array($tasaCambio));

        return parent::setTasaCambio($tasaCambio);
    }

    /**
     * {@inheritDoc}
     */
    public function getTasaCambio()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTasaCambio', array());

        return parent::getTasaCambio();
    }

    /**
     * {@inheritDoc}
     */
    public function setDateAdd($dateAdd)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDateAdd', array($dateAdd));

        return parent::setDateAdd($dateAdd);
    }

    /**
     * {@inheritDoc}
     */
    public function getDateAdd()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDateAdd', array());

        return parent::getDateAdd();
    }

    /**
     * {@inheritDoc}
     */
    public function setDateUpd($dateUpd)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDateUpd', array($dateUpd));

        return parent::setDateUpd($dateUpd);
    }

    /**
     * {@inheritDoc}
     */
    public function getDateUpd()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDateUpd', array());

        return parent::getDateUpd();
    }

    /**
     * {@inheritDoc}
     */
    public function setIdCotizacion($idCotizacion)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIdCotizacion', array($idCotizacion));

        return parent::setIdCotizacion($idCotizacion);
    }

    /**
     * {@inheritDoc}
     */
    public function getIdCotizacion()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIdCotizacion', array());

        return parent::getIdCotizacion();
    }

}