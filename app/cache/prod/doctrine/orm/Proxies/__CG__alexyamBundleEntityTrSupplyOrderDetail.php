<?php

namespace Proxies\__CG__\alex\yamBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class TrSupplyOrderDetail extends \alex\yamBundle\Entity\TrSupplyOrderDetail implements \Doctrine\ORM\Proxy\Proxy
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
            return array('__isInitialized__', '' . "\0" . 'alex\\yamBundle\\Entity\\TrSupplyOrderDetail' . "\0" . 'idSupplyOrderDetail', '' . "\0" . 'alex\\yamBundle\\Entity\\TrSupplyOrderDetail' . "\0" . 'idSupplyOrder', '' . "\0" . 'alex\\yamBundle\\Entity\\TrSupplyOrderDetail' . "\0" . 'idCurrency', '' . "\0" . 'alex\\yamBundle\\Entity\\TrSupplyOrderDetail' . "\0" . 'idProduct', '' . "\0" . 'alex\\yamBundle\\Entity\\TrSupplyOrderDetail' . "\0" . 'idProductAttribute', '' . "\0" . 'alex\\yamBundle\\Entity\\TrSupplyOrderDetail' . "\0" . 'reference', '' . "\0" . 'alex\\yamBundle\\Entity\\TrSupplyOrderDetail' . "\0" . 'supplierReference', '' . "\0" . 'alex\\yamBundle\\Entity\\TrSupplyOrderDetail' . "\0" . 'name', '' . "\0" . 'alex\\yamBundle\\Entity\\TrSupplyOrderDetail' . "\0" . 'ean13', '' . "\0" . 'alex\\yamBundle\\Entity\\TrSupplyOrderDetail' . "\0" . 'upc', '' . "\0" . 'alex\\yamBundle\\Entity\\TrSupplyOrderDetail' . "\0" . 'exchangeRate', '' . "\0" . 'alex\\yamBundle\\Entity\\TrSupplyOrderDetail' . "\0" . 'unitPriceTe', '' . "\0" . 'alex\\yamBundle\\Entity\\TrSupplyOrderDetail' . "\0" . 'quantityExpected', '' . "\0" . 'alex\\yamBundle\\Entity\\TrSupplyOrderDetail' . "\0" . 'quantityReceived', '' . "\0" . 'alex\\yamBundle\\Entity\\TrSupplyOrderDetail' . "\0" . 'priceTe', '' . "\0" . 'alex\\yamBundle\\Entity\\TrSupplyOrderDetail' . "\0" . 'discountRate', '' . "\0" . 'alex\\yamBundle\\Entity\\TrSupplyOrderDetail' . "\0" . 'discountValueTe', '' . "\0" . 'alex\\yamBundle\\Entity\\TrSupplyOrderDetail' . "\0" . 'priceWithDiscountTe', '' . "\0" . 'alex\\yamBundle\\Entity\\TrSupplyOrderDetail' . "\0" . 'taxRate', '' . "\0" . 'alex\\yamBundle\\Entity\\TrSupplyOrderDetail' . "\0" . 'taxValue', '' . "\0" . 'alex\\yamBundle\\Entity\\TrSupplyOrderDetail' . "\0" . 'priceTi', '' . "\0" . 'alex\\yamBundle\\Entity\\TrSupplyOrderDetail' . "\0" . 'taxValueWithOrderDiscount', '' . "\0" . 'alex\\yamBundle\\Entity\\TrSupplyOrderDetail' . "\0" . 'priceWithOrderDiscountTe');
        }

        return array('__isInitialized__', '' . "\0" . 'alex\\yamBundle\\Entity\\TrSupplyOrderDetail' . "\0" . 'idSupplyOrderDetail', '' . "\0" . 'alex\\yamBundle\\Entity\\TrSupplyOrderDetail' . "\0" . 'idSupplyOrder', '' . "\0" . 'alex\\yamBundle\\Entity\\TrSupplyOrderDetail' . "\0" . 'idCurrency', '' . "\0" . 'alex\\yamBundle\\Entity\\TrSupplyOrderDetail' . "\0" . 'idProduct', '' . "\0" . 'alex\\yamBundle\\Entity\\TrSupplyOrderDetail' . "\0" . 'idProductAttribute', '' . "\0" . 'alex\\yamBundle\\Entity\\TrSupplyOrderDetail' . "\0" . 'reference', '' . "\0" . 'alex\\yamBundle\\Entity\\TrSupplyOrderDetail' . "\0" . 'supplierReference', '' . "\0" . 'alex\\yamBundle\\Entity\\TrSupplyOrderDetail' . "\0" . 'name', '' . "\0" . 'alex\\yamBundle\\Entity\\TrSupplyOrderDetail' . "\0" . 'ean13', '' . "\0" . 'alex\\yamBundle\\Entity\\TrSupplyOrderDetail' . "\0" . 'upc', '' . "\0" . 'alex\\yamBundle\\Entity\\TrSupplyOrderDetail' . "\0" . 'exchangeRate', '' . "\0" . 'alex\\yamBundle\\Entity\\TrSupplyOrderDetail' . "\0" . 'unitPriceTe', '' . "\0" . 'alex\\yamBundle\\Entity\\TrSupplyOrderDetail' . "\0" . 'quantityExpected', '' . "\0" . 'alex\\yamBundle\\Entity\\TrSupplyOrderDetail' . "\0" . 'quantityReceived', '' . "\0" . 'alex\\yamBundle\\Entity\\TrSupplyOrderDetail' . "\0" . 'priceTe', '' . "\0" . 'alex\\yamBundle\\Entity\\TrSupplyOrderDetail' . "\0" . 'discountRate', '' . "\0" . 'alex\\yamBundle\\Entity\\TrSupplyOrderDetail' . "\0" . 'discountValueTe', '' . "\0" . 'alex\\yamBundle\\Entity\\TrSupplyOrderDetail' . "\0" . 'priceWithDiscountTe', '' . "\0" . 'alex\\yamBundle\\Entity\\TrSupplyOrderDetail' . "\0" . 'taxRate', '' . "\0" . 'alex\\yamBundle\\Entity\\TrSupplyOrderDetail' . "\0" . 'taxValue', '' . "\0" . 'alex\\yamBundle\\Entity\\TrSupplyOrderDetail' . "\0" . 'priceTi', '' . "\0" . 'alex\\yamBundle\\Entity\\TrSupplyOrderDetail' . "\0" . 'taxValueWithOrderDiscount', '' . "\0" . 'alex\\yamBundle\\Entity\\TrSupplyOrderDetail' . "\0" . 'priceWithOrderDiscountTe');
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (TrSupplyOrderDetail $proxy) {
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
    public function getIdSupplyOrderDetail()
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getIdSupplyOrderDetail();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIdSupplyOrderDetail', array());

        return parent::getIdSupplyOrderDetail();
    }

    /**
     * {@inheritDoc}
     */
    public function setIdSupplyOrder($idSupplyOrder)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIdSupplyOrder', array($idSupplyOrder));

        return parent::setIdSupplyOrder($idSupplyOrder);
    }

    /**
     * {@inheritDoc}
     */
    public function getIdSupplyOrder()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIdSupplyOrder', array());

        return parent::getIdSupplyOrder();
    }

    /**
     * {@inheritDoc}
     */
    public function setIdCurrency($idCurrency)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIdCurrency', array($idCurrency));

        return parent::setIdCurrency($idCurrency);
    }

    /**
     * {@inheritDoc}
     */
    public function getIdCurrency()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIdCurrency', array());

        return parent::getIdCurrency();
    }

    /**
     * {@inheritDoc}
     */
    public function setIdProduct($idProduct)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIdProduct', array($idProduct));

        return parent::setIdProduct($idProduct);
    }

    /**
     * {@inheritDoc}
     */
    public function getIdProduct()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIdProduct', array());

        return parent::getIdProduct();
    }

    /**
     * {@inheritDoc}
     */
    public function setIdProductAttribute($idProductAttribute)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIdProductAttribute', array($idProductAttribute));

        return parent::setIdProductAttribute($idProductAttribute);
    }

    /**
     * {@inheritDoc}
     */
    public function getIdProductAttribute()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIdProductAttribute', array());

        return parent::getIdProductAttribute();
    }

    /**
     * {@inheritDoc}
     */
    public function setReference($reference)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setReference', array($reference));

        return parent::setReference($reference);
    }

    /**
     * {@inheritDoc}
     */
    public function getReference()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getReference', array());

        return parent::getReference();
    }

    /**
     * {@inheritDoc}
     */
    public function setSupplierReference($supplierReference)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSupplierReference', array($supplierReference));

        return parent::setSupplierReference($supplierReference);
    }

    /**
     * {@inheritDoc}
     */
    public function getSupplierReference()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSupplierReference', array());

        return parent::getSupplierReference();
    }

    /**
     * {@inheritDoc}
     */
    public function setName($name)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setName', array($name));

        return parent::setName($name);
    }

    /**
     * {@inheritDoc}
     */
    public function getName()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getName', array());

        return parent::getName();
    }

    /**
     * {@inheritDoc}
     */
    public function setEan13($ean13)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEan13', array($ean13));

        return parent::setEan13($ean13);
    }

    /**
     * {@inheritDoc}
     */
    public function getEan13()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEan13', array());

        return parent::getEan13();
    }

    /**
     * {@inheritDoc}
     */
    public function setUpc($upc)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUpc', array($upc));

        return parent::setUpc($upc);
    }

    /**
     * {@inheritDoc}
     */
    public function getUpc()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUpc', array());

        return parent::getUpc();
    }

    /**
     * {@inheritDoc}
     */
    public function setExchangeRate($exchangeRate)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setExchangeRate', array($exchangeRate));

        return parent::setExchangeRate($exchangeRate);
    }

    /**
     * {@inheritDoc}
     */
    public function getExchangeRate()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getExchangeRate', array());

        return parent::getExchangeRate();
    }

    /**
     * {@inheritDoc}
     */
    public function setUnitPriceTe($unitPriceTe)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUnitPriceTe', array($unitPriceTe));

        return parent::setUnitPriceTe($unitPriceTe);
    }

    /**
     * {@inheritDoc}
     */
    public function getUnitPriceTe()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUnitPriceTe', array());

        return parent::getUnitPriceTe();
    }

    /**
     * {@inheritDoc}
     */
    public function setQuantityExpected($quantityExpected)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setQuantityExpected', array($quantityExpected));

        return parent::setQuantityExpected($quantityExpected);
    }

    /**
     * {@inheritDoc}
     */
    public function getQuantityExpected()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getQuantityExpected', array());

        return parent::getQuantityExpected();
    }

    /**
     * {@inheritDoc}
     */
    public function setQuantityReceived($quantityReceived)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setQuantityReceived', array($quantityReceived));

        return parent::setQuantityReceived($quantityReceived);
    }

    /**
     * {@inheritDoc}
     */
    public function getQuantityReceived()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getQuantityReceived', array());

        return parent::getQuantityReceived();
    }

    /**
     * {@inheritDoc}
     */
    public function setPriceTe($priceTe)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPriceTe', array($priceTe));

        return parent::setPriceTe($priceTe);
    }

    /**
     * {@inheritDoc}
     */
    public function getPriceTe()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPriceTe', array());

        return parent::getPriceTe();
    }

    /**
     * {@inheritDoc}
     */
    public function setDiscountRate($discountRate)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDiscountRate', array($discountRate));

        return parent::setDiscountRate($discountRate);
    }

    /**
     * {@inheritDoc}
     */
    public function getDiscountRate()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDiscountRate', array());

        return parent::getDiscountRate();
    }

    /**
     * {@inheritDoc}
     */
    public function setDiscountValueTe($discountValueTe)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDiscountValueTe', array($discountValueTe));

        return parent::setDiscountValueTe($discountValueTe);
    }

    /**
     * {@inheritDoc}
     */
    public function getDiscountValueTe()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDiscountValueTe', array());

        return parent::getDiscountValueTe();
    }

    /**
     * {@inheritDoc}
     */
    public function setPriceWithDiscountTe($priceWithDiscountTe)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPriceWithDiscountTe', array($priceWithDiscountTe));

        return parent::setPriceWithDiscountTe($priceWithDiscountTe);
    }

    /**
     * {@inheritDoc}
     */
    public function getPriceWithDiscountTe()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPriceWithDiscountTe', array());

        return parent::getPriceWithDiscountTe();
    }

    /**
     * {@inheritDoc}
     */
    public function setTaxRate($taxRate)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTaxRate', array($taxRate));

        return parent::setTaxRate($taxRate);
    }

    /**
     * {@inheritDoc}
     */
    public function getTaxRate()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTaxRate', array());

        return parent::getTaxRate();
    }

    /**
     * {@inheritDoc}
     */
    public function setTaxValue($taxValue)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTaxValue', array($taxValue));

        return parent::setTaxValue($taxValue);
    }

    /**
     * {@inheritDoc}
     */
    public function getTaxValue()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTaxValue', array());

        return parent::getTaxValue();
    }

    /**
     * {@inheritDoc}
     */
    public function setPriceTi($priceTi)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPriceTi', array($priceTi));

        return parent::setPriceTi($priceTi);
    }

    /**
     * {@inheritDoc}
     */
    public function getPriceTi()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPriceTi', array());

        return parent::getPriceTi();
    }

    /**
     * {@inheritDoc}
     */
    public function setTaxValueWithOrderDiscount($taxValueWithOrderDiscount)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTaxValueWithOrderDiscount', array($taxValueWithOrderDiscount));

        return parent::setTaxValueWithOrderDiscount($taxValueWithOrderDiscount);
    }

    /**
     * {@inheritDoc}
     */
    public function getTaxValueWithOrderDiscount()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTaxValueWithOrderDiscount', array());

        return parent::getTaxValueWithOrderDiscount();
    }

    /**
     * {@inheritDoc}
     */
    public function setPriceWithOrderDiscountTe($priceWithOrderDiscountTe)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPriceWithOrderDiscountTe', array($priceWithOrderDiscountTe));

        return parent::setPriceWithOrderDiscountTe($priceWithOrderDiscountTe);
    }

    /**
     * {@inheritDoc}
     */
    public function getPriceWithOrderDiscountTe()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPriceWithOrderDiscountTe', array());

        return parent::getPriceWithOrderDiscountTe();
    }

}
