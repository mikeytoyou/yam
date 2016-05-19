<?php

namespace Proxies\__CG__\alex\yamBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class TrSupplyOrderReceiptHistory extends \alex\yamBundle\Entity\TrSupplyOrderReceiptHistory implements \Doctrine\ORM\Proxy\Proxy
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
            return array('__isInitialized__', '' . "\0" . 'alex\\yamBundle\\Entity\\TrSupplyOrderReceiptHistory' . "\0" . 'idSupplyOrderReceiptHistory', '' . "\0" . 'alex\\yamBundle\\Entity\\TrSupplyOrderReceiptHistory' . "\0" . 'idSupplyOrderDetail', '' . "\0" . 'alex\\yamBundle\\Entity\\TrSupplyOrderReceiptHistory' . "\0" . 'idEmployee', '' . "\0" . 'alex\\yamBundle\\Entity\\TrSupplyOrderReceiptHistory' . "\0" . 'employeeLastname', '' . "\0" . 'alex\\yamBundle\\Entity\\TrSupplyOrderReceiptHistory' . "\0" . 'employeeFirstname', '' . "\0" . 'alex\\yamBundle\\Entity\\TrSupplyOrderReceiptHistory' . "\0" . 'idSupplyOrderState', '' . "\0" . 'alex\\yamBundle\\Entity\\TrSupplyOrderReceiptHistory' . "\0" . 'quantity', '' . "\0" . 'alex\\yamBundle\\Entity\\TrSupplyOrderReceiptHistory' . "\0" . 'dateAdd');
        }

        return array('__isInitialized__', '' . "\0" . 'alex\\yamBundle\\Entity\\TrSupplyOrderReceiptHistory' . "\0" . 'idSupplyOrderReceiptHistory', '' . "\0" . 'alex\\yamBundle\\Entity\\TrSupplyOrderReceiptHistory' . "\0" . 'idSupplyOrderDetail', '' . "\0" . 'alex\\yamBundle\\Entity\\TrSupplyOrderReceiptHistory' . "\0" . 'idEmployee', '' . "\0" . 'alex\\yamBundle\\Entity\\TrSupplyOrderReceiptHistory' . "\0" . 'employeeLastname', '' . "\0" . 'alex\\yamBundle\\Entity\\TrSupplyOrderReceiptHistory' . "\0" . 'employeeFirstname', '' . "\0" . 'alex\\yamBundle\\Entity\\TrSupplyOrderReceiptHistory' . "\0" . 'idSupplyOrderState', '' . "\0" . 'alex\\yamBundle\\Entity\\TrSupplyOrderReceiptHistory' . "\0" . 'quantity', '' . "\0" . 'alex\\yamBundle\\Entity\\TrSupplyOrderReceiptHistory' . "\0" . 'dateAdd');
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (TrSupplyOrderReceiptHistory $proxy) {
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
    public function getIdSupplyOrderReceiptHistory()
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getIdSupplyOrderReceiptHistory();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIdSupplyOrderReceiptHistory', array());

        return parent::getIdSupplyOrderReceiptHistory();
    }

    /**
     * {@inheritDoc}
     */
    public function setIdSupplyOrderDetail($idSupplyOrderDetail)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIdSupplyOrderDetail', array($idSupplyOrderDetail));

        return parent::setIdSupplyOrderDetail($idSupplyOrderDetail);
    }

    /**
     * {@inheritDoc}
     */
    public function getIdSupplyOrderDetail()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIdSupplyOrderDetail', array());

        return parent::getIdSupplyOrderDetail();
    }

    /**
     * {@inheritDoc}
     */
    public function setIdEmployee($idEmployee)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIdEmployee', array($idEmployee));

        return parent::setIdEmployee($idEmployee);
    }

    /**
     * {@inheritDoc}
     */
    public function getIdEmployee()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIdEmployee', array());

        return parent::getIdEmployee();
    }

    /**
     * {@inheritDoc}
     */
    public function setEmployeeLastname($employeeLastname)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEmployeeLastname', array($employeeLastname));

        return parent::setEmployeeLastname($employeeLastname);
    }

    /**
     * {@inheritDoc}
     */
    public function getEmployeeLastname()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEmployeeLastname', array());

        return parent::getEmployeeLastname();
    }

    /**
     * {@inheritDoc}
     */
    public function setEmployeeFirstname($employeeFirstname)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEmployeeFirstname', array($employeeFirstname));

        return parent::setEmployeeFirstname($employeeFirstname);
    }

    /**
     * {@inheritDoc}
     */
    public function getEmployeeFirstname()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEmployeeFirstname', array());

        return parent::getEmployeeFirstname();
    }

    /**
     * {@inheritDoc}
     */
    public function setIdSupplyOrderState($idSupplyOrderState)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIdSupplyOrderState', array($idSupplyOrderState));

        return parent::setIdSupplyOrderState($idSupplyOrderState);
    }

    /**
     * {@inheritDoc}
     */
    public function getIdSupplyOrderState()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIdSupplyOrderState', array());

        return parent::getIdSupplyOrderState();
    }

    /**
     * {@inheritDoc}
     */
    public function setQuantity($quantity)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setQuantity', array($quantity));

        return parent::setQuantity($quantity);
    }

    /**
     * {@inheritDoc}
     */
    public function getQuantity()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getQuantity', array());

        return parent::getQuantity();
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

}