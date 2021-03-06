<?php

namespace Proxies\__CG__\alex\yamBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class TrCustomer extends \alex\yamBundle\Entity\TrCustomer implements \Doctrine\ORM\Proxy\Proxy
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
            return array('__isInitialized__', '' . "\0" . 'alex\\yamBundle\\Entity\\TrCustomer' . "\0" . 'idCustomer', '' . "\0" . 'alex\\yamBundle\\Entity\\TrCustomer' . "\0" . 'idShopGroup', '' . "\0" . 'alex\\yamBundle\\Entity\\TrCustomer' . "\0" . 'idShop', '' . "\0" . 'alex\\yamBundle\\Entity\\TrCustomer' . "\0" . 'idGender', '' . "\0" . 'alex\\yamBundle\\Entity\\TrCustomer' . "\0" . 'idDefaultGroup', '' . "\0" . 'alex\\yamBundle\\Entity\\TrCustomer' . "\0" . 'idLang', '' . "\0" . 'alex\\yamBundle\\Entity\\TrCustomer' . "\0" . 'idRisk', '' . "\0" . 'alex\\yamBundle\\Entity\\TrCustomer' . "\0" . 'company', '' . "\0" . 'alex\\yamBundle\\Entity\\TrCustomer' . "\0" . 'siret', '' . "\0" . 'alex\\yamBundle\\Entity\\TrCustomer' . "\0" . 'ape', '' . "\0" . 'alex\\yamBundle\\Entity\\TrCustomer' . "\0" . 'firstname', '' . "\0" . 'alex\\yamBundle\\Entity\\TrCustomer' . "\0" . 'lastname', '' . "\0" . 'alex\\yamBundle\\Entity\\TrCustomer' . "\0" . 'email', '' . "\0" . 'alex\\yamBundle\\Entity\\TrCustomer' . "\0" . 'passwd', '' . "\0" . 'alex\\yamBundle\\Entity\\TrCustomer' . "\0" . 'lastPasswdGen', '' . "\0" . 'alex\\yamBundle\\Entity\\TrCustomer' . "\0" . 'birthday', '' . "\0" . 'alex\\yamBundle\\Entity\\TrCustomer' . "\0" . 'newsletter', '' . "\0" . 'alex\\yamBundle\\Entity\\TrCustomer' . "\0" . 'ipRegistrationNewsletter', '' . "\0" . 'alex\\yamBundle\\Entity\\TrCustomer' . "\0" . 'newsletterDateAdd', '' . "\0" . 'alex\\yamBundle\\Entity\\TrCustomer' . "\0" . 'optin', '' . "\0" . 'alex\\yamBundle\\Entity\\TrCustomer' . "\0" . 'website', '' . "\0" . 'alex\\yamBundle\\Entity\\TrCustomer' . "\0" . 'outstandingAllowAmount', '' . "\0" . 'alex\\yamBundle\\Entity\\TrCustomer' . "\0" . 'showPublicPrices', '' . "\0" . 'alex\\yamBundle\\Entity\\TrCustomer' . "\0" . 'maxPaymentDays', '' . "\0" . 'alex\\yamBundle\\Entity\\TrCustomer' . "\0" . 'secureKey', '' . "\0" . 'alex\\yamBundle\\Entity\\TrCustomer' . "\0" . 'note', '' . "\0" . 'alex\\yamBundle\\Entity\\TrCustomer' . "\0" . 'active', '' . "\0" . 'alex\\yamBundle\\Entity\\TrCustomer' . "\0" . 'isGuest', '' . "\0" . 'alex\\yamBundle\\Entity\\TrCustomer' . "\0" . 'deleted', '' . "\0" . 'alex\\yamBundle\\Entity\\TrCustomer' . "\0" . 'dateAdd', '' . "\0" . 'alex\\yamBundle\\Entity\\TrCustomer' . "\0" . 'dateUpd', '' . "\0" . 'alex\\yamBundle\\Entity\\TrCustomer' . "\0" . 'secondname', '' . "\0" . 'alex\\yamBundle\\Entity\\TrCustomer' . "\0" . 'thirdname', '' . "\0" . 'alex\\yamBundle\\Entity\\TrCustomer' . "\0" . 'cellphone', '' . "\0" . 'alex\\yamBundle\\Entity\\TrCustomer' . "\0" . 'phone', '' . "\0" . 'alex\\yamBundle\\Entity\\TrCustomer' . "\0" . 'idDocument', '' . "\0" . 'alex\\yamBundle\\Entity\\TrCustomer' . "\0" . 'numDocument', '' . "\0" . 'alex\\yamBundle\\Entity\\TrCustomer' . "\0" . 'idSupplier', '' . "\0" . 'alex\\yamBundle\\Entity\\TrCustomer' . "\0" . 'idPadre');
        }

        return array('__isInitialized__', '' . "\0" . 'alex\\yamBundle\\Entity\\TrCustomer' . "\0" . 'idCustomer', '' . "\0" . 'alex\\yamBundle\\Entity\\TrCustomer' . "\0" . 'idShopGroup', '' . "\0" . 'alex\\yamBundle\\Entity\\TrCustomer' . "\0" . 'idShop', '' . "\0" . 'alex\\yamBundle\\Entity\\TrCustomer' . "\0" . 'idGender', '' . "\0" . 'alex\\yamBundle\\Entity\\TrCustomer' . "\0" . 'idDefaultGroup', '' . "\0" . 'alex\\yamBundle\\Entity\\TrCustomer' . "\0" . 'idLang', '' . "\0" . 'alex\\yamBundle\\Entity\\TrCustomer' . "\0" . 'idRisk', '' . "\0" . 'alex\\yamBundle\\Entity\\TrCustomer' . "\0" . 'company', '' . "\0" . 'alex\\yamBundle\\Entity\\TrCustomer' . "\0" . 'siret', '' . "\0" . 'alex\\yamBundle\\Entity\\TrCustomer' . "\0" . 'ape', '' . "\0" . 'alex\\yamBundle\\Entity\\TrCustomer' . "\0" . 'firstname', '' . "\0" . 'alex\\yamBundle\\Entity\\TrCustomer' . "\0" . 'lastname', '' . "\0" . 'alex\\yamBundle\\Entity\\TrCustomer' . "\0" . 'email', '' . "\0" . 'alex\\yamBundle\\Entity\\TrCustomer' . "\0" . 'passwd', '' . "\0" . 'alex\\yamBundle\\Entity\\TrCustomer' . "\0" . 'lastPasswdGen', '' . "\0" . 'alex\\yamBundle\\Entity\\TrCustomer' . "\0" . 'birthday', '' . "\0" . 'alex\\yamBundle\\Entity\\TrCustomer' . "\0" . 'newsletter', '' . "\0" . 'alex\\yamBundle\\Entity\\TrCustomer' . "\0" . 'ipRegistrationNewsletter', '' . "\0" . 'alex\\yamBundle\\Entity\\TrCustomer' . "\0" . 'newsletterDateAdd', '' . "\0" . 'alex\\yamBundle\\Entity\\TrCustomer' . "\0" . 'optin', '' . "\0" . 'alex\\yamBundle\\Entity\\TrCustomer' . "\0" . 'website', '' . "\0" . 'alex\\yamBundle\\Entity\\TrCustomer' . "\0" . 'outstandingAllowAmount', '' . "\0" . 'alex\\yamBundle\\Entity\\TrCustomer' . "\0" . 'showPublicPrices', '' . "\0" . 'alex\\yamBundle\\Entity\\TrCustomer' . "\0" . 'maxPaymentDays', '' . "\0" . 'alex\\yamBundle\\Entity\\TrCustomer' . "\0" . 'secureKey', '' . "\0" . 'alex\\yamBundle\\Entity\\TrCustomer' . "\0" . 'note', '' . "\0" . 'alex\\yamBundle\\Entity\\TrCustomer' . "\0" . 'active', '' . "\0" . 'alex\\yamBundle\\Entity\\TrCustomer' . "\0" . 'isGuest', '' . "\0" . 'alex\\yamBundle\\Entity\\TrCustomer' . "\0" . 'deleted', '' . "\0" . 'alex\\yamBundle\\Entity\\TrCustomer' . "\0" . 'dateAdd', '' . "\0" . 'alex\\yamBundle\\Entity\\TrCustomer' . "\0" . 'dateUpd', '' . "\0" . 'alex\\yamBundle\\Entity\\TrCustomer' . "\0" . 'secondname', '' . "\0" . 'alex\\yamBundle\\Entity\\TrCustomer' . "\0" . 'thirdname', '' . "\0" . 'alex\\yamBundle\\Entity\\TrCustomer' . "\0" . 'cellphone', '' . "\0" . 'alex\\yamBundle\\Entity\\TrCustomer' . "\0" . 'phone', '' . "\0" . 'alex\\yamBundle\\Entity\\TrCustomer' . "\0" . 'idDocument', '' . "\0" . 'alex\\yamBundle\\Entity\\TrCustomer' . "\0" . 'numDocument', '' . "\0" . 'alex\\yamBundle\\Entity\\TrCustomer' . "\0" . 'idSupplier', '' . "\0" . 'alex\\yamBundle\\Entity\\TrCustomer' . "\0" . 'idPadre');
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (TrCustomer $proxy) {
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
    public function getIdCustomer()
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getIdCustomer();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIdCustomer', array());

        return parent::getIdCustomer();
    }

    /**
     * {@inheritDoc}
     */
    public function setIdShopGroup($idShopGroup)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIdShopGroup', array($idShopGroup));

        return parent::setIdShopGroup($idShopGroup);
    }

    /**
     * {@inheritDoc}
     */
    public function getIdShopGroup()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIdShopGroup', array());

        return parent::getIdShopGroup();
    }

    /**
     * {@inheritDoc}
     */
    public function setIdShop($idShop)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIdShop', array($idShop));

        return parent::setIdShop($idShop);
    }

    /**
     * {@inheritDoc}
     */
    public function getIdShop()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIdShop', array());

        return parent::getIdShop();
    }

    /**
     * {@inheritDoc}
     */
    public function setIdGender($idGender)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIdGender', array($idGender));

        return parent::setIdGender($idGender);
    }

    /**
     * {@inheritDoc}
     */
    public function getIdGender()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIdGender', array());

        return parent::getIdGender();
    }

    /**
     * {@inheritDoc}
     */
    public function setIdDefaultGroup($idDefaultGroup)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIdDefaultGroup', array($idDefaultGroup));

        return parent::setIdDefaultGroup($idDefaultGroup);
    }

    /**
     * {@inheritDoc}
     */
    public function getIdDefaultGroup()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIdDefaultGroup', array());

        return parent::getIdDefaultGroup();
    }

    /**
     * {@inheritDoc}
     */
    public function setIdLang($idLang)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIdLang', array($idLang));

        return parent::setIdLang($idLang);
    }

    /**
     * {@inheritDoc}
     */
    public function getIdLang()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIdLang', array());

        return parent::getIdLang();
    }

    /**
     * {@inheritDoc}
     */
    public function setIdRisk($idRisk)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIdRisk', array($idRisk));

        return parent::setIdRisk($idRisk);
    }

    /**
     * {@inheritDoc}
     */
    public function getIdRisk()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIdRisk', array());

        return parent::getIdRisk();
    }

    /**
     * {@inheritDoc}
     */
    public function setCompany($company)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCompany', array($company));

        return parent::setCompany($company);
    }

    /**
     * {@inheritDoc}
     */
    public function getCompany()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCompany', array());

        return parent::getCompany();
    }

    /**
     * {@inheritDoc}
     */
    public function setSiret($siret)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSiret', array($siret));

        return parent::setSiret($siret);
    }

    /**
     * {@inheritDoc}
     */
    public function getSiret()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSiret', array());

        return parent::getSiret();
    }

    /**
     * {@inheritDoc}
     */
    public function setApe($ape)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setApe', array($ape));

        return parent::setApe($ape);
    }

    /**
     * {@inheritDoc}
     */
    public function getApe()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getApe', array());

        return parent::getApe();
    }

    /**
     * {@inheritDoc}
     */
    public function setFirstname($firstname)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setFirstname', array($firstname));

        return parent::setFirstname($firstname);
    }

    /**
     * {@inheritDoc}
     */
    public function getFirstname()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFirstname', array());

        return parent::getFirstname();
    }

    /**
     * {@inheritDoc}
     */
    public function setLastname($lastname)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLastname', array($lastname));

        return parent::setLastname($lastname);
    }

    /**
     * {@inheritDoc}
     */
    public function getLastname()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLastname', array());

        return parent::getLastname();
    }

    /**
     * {@inheritDoc}
     */
    public function setEmail($email)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEmail', array($email));

        return parent::setEmail($email);
    }

    /**
     * {@inheritDoc}
     */
    public function getEmail()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEmail', array());

        return parent::getEmail();
    }

    /**
     * {@inheritDoc}
     */
    public function setPasswd($passwd)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPasswd', array($passwd));

        return parent::setPasswd($passwd);
    }

    /**
     * {@inheritDoc}
     */
    public function getPasswd()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPasswd', array());

        return parent::getPasswd();
    }

    /**
     * {@inheritDoc}
     */
    public function setLastPasswdGen($lastPasswdGen)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLastPasswdGen', array($lastPasswdGen));

        return parent::setLastPasswdGen($lastPasswdGen);
    }

    /**
     * {@inheritDoc}
     */
    public function getLastPasswdGen()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLastPasswdGen', array());

        return parent::getLastPasswdGen();
    }

    /**
     * {@inheritDoc}
     */
    public function setBirthday($birthday)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setBirthday', array($birthday));

        return parent::setBirthday($birthday);
    }

    /**
     * {@inheritDoc}
     */
    public function getBirthday()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getBirthday', array());

        return parent::getBirthday();
    }

    /**
     * {@inheritDoc}
     */
    public function setNewsletter($newsletter)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNewsletter', array($newsletter));

        return parent::setNewsletter($newsletter);
    }

    /**
     * {@inheritDoc}
     */
    public function getNewsletter()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNewsletter', array());

        return parent::getNewsletter();
    }

    /**
     * {@inheritDoc}
     */
    public function setIpRegistrationNewsletter($ipRegistrationNewsletter)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIpRegistrationNewsletter', array($ipRegistrationNewsletter));

        return parent::setIpRegistrationNewsletter($ipRegistrationNewsletter);
    }

    /**
     * {@inheritDoc}
     */
    public function getIpRegistrationNewsletter()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIpRegistrationNewsletter', array());

        return parent::getIpRegistrationNewsletter();
    }

    /**
     * {@inheritDoc}
     */
    public function setNewsletterDateAdd($newsletterDateAdd)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNewsletterDateAdd', array($newsletterDateAdd));

        return parent::setNewsletterDateAdd($newsletterDateAdd);
    }

    /**
     * {@inheritDoc}
     */
    public function getNewsletterDateAdd()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNewsletterDateAdd', array());

        return parent::getNewsletterDateAdd();
    }

    /**
     * {@inheritDoc}
     */
    public function setOptin($optin)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setOptin', array($optin));

        return parent::setOptin($optin);
    }

    /**
     * {@inheritDoc}
     */
    public function getOptin()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getOptin', array());

        return parent::getOptin();
    }

    /**
     * {@inheritDoc}
     */
    public function setWebsite($website)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setWebsite', array($website));

        return parent::setWebsite($website);
    }

    /**
     * {@inheritDoc}
     */
    public function getWebsite()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getWebsite', array());

        return parent::getWebsite();
    }

    /**
     * {@inheritDoc}
     */
    public function setOutstandingAllowAmount($outstandingAllowAmount)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setOutstandingAllowAmount', array($outstandingAllowAmount));

        return parent::setOutstandingAllowAmount($outstandingAllowAmount);
    }

    /**
     * {@inheritDoc}
     */
    public function getOutstandingAllowAmount()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getOutstandingAllowAmount', array());

        return parent::getOutstandingAllowAmount();
    }

    /**
     * {@inheritDoc}
     */
    public function setShowPublicPrices($showPublicPrices)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setShowPublicPrices', array($showPublicPrices));

        return parent::setShowPublicPrices($showPublicPrices);
    }

    /**
     * {@inheritDoc}
     */
    public function getShowPublicPrices()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getShowPublicPrices', array());

        return parent::getShowPublicPrices();
    }

    /**
     * {@inheritDoc}
     */
    public function setMaxPaymentDays($maxPaymentDays)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setMaxPaymentDays', array($maxPaymentDays));

        return parent::setMaxPaymentDays($maxPaymentDays);
    }

    /**
     * {@inheritDoc}
     */
    public function getMaxPaymentDays()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getMaxPaymentDays', array());

        return parent::getMaxPaymentDays();
    }

    /**
     * {@inheritDoc}
     */
    public function setSecureKey($secureKey)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSecureKey', array($secureKey));

        return parent::setSecureKey($secureKey);
    }

    /**
     * {@inheritDoc}
     */
    public function getSecureKey()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSecureKey', array());

        return parent::getSecureKey();
    }

    /**
     * {@inheritDoc}
     */
    public function setNote($note)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNote', array($note));

        return parent::setNote($note);
    }

    /**
     * {@inheritDoc}
     */
    public function getNote()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNote', array());

        return parent::getNote();
    }

    /**
     * {@inheritDoc}
     */
    public function setActive($active)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setActive', array($active));

        return parent::setActive($active);
    }

    /**
     * {@inheritDoc}
     */
    public function getActive()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getActive', array());

        return parent::getActive();
    }

    /**
     * {@inheritDoc}
     */
    public function setIsGuest($isGuest)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIsGuest', array($isGuest));

        return parent::setIsGuest($isGuest);
    }

    /**
     * {@inheritDoc}
     */
    public function getIsGuest()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIsGuest', array());

        return parent::getIsGuest();
    }

    /**
     * {@inheritDoc}
     */
    public function setDeleted($deleted)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDeleted', array($deleted));

        return parent::setDeleted($deleted);
    }

    /**
     * {@inheritDoc}
     */
    public function getDeleted()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDeleted', array());

        return parent::getDeleted();
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
    public function setSecondname($secondname)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSecondname', array($secondname));

        return parent::setSecondname($secondname);
    }

    /**
     * {@inheritDoc}
     */
    public function getSecondname()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSecondname', array());

        return parent::getSecondname();
    }

    /**
     * {@inheritDoc}
     */
    public function setThirdname($thirdname)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setThirdname', array($thirdname));

        return parent::setThirdname($thirdname);
    }

    /**
     * {@inheritDoc}
     */
    public function getThirdname()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getThirdname', array());

        return parent::getThirdname();
    }

    /**
     * {@inheritDoc}
     */
    public function setCellphone($cellphone)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCellphone', array($cellphone));

        return parent::setCellphone($cellphone);
    }

    /**
     * {@inheritDoc}
     */
    public function getCellphone()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCellphone', array());

        return parent::getCellphone();
    }

    /**
     * {@inheritDoc}
     */
    public function setPhone($phone)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPhone', array($phone));

        return parent::setPhone($phone);
    }

    /**
     * {@inheritDoc}
     */
    public function getPhone()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPhone', array());

        return parent::getPhone();
    }

    /**
     * {@inheritDoc}
     */
    public function setIdDocument($idDocument)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIdDocument', array($idDocument));

        return parent::setIdDocument($idDocument);
    }

    /**
     * {@inheritDoc}
     */
    public function getIdDocument()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIdDocument', array());

        return parent::getIdDocument();
    }

    /**
     * {@inheritDoc}
     */
    public function setNumDocument($numDocument)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNumDocument', array($numDocument));

        return parent::setNumDocument($numDocument);
    }

    /**
     * {@inheritDoc}
     */
    public function getNumDocument()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNumDocument', array());

        return parent::getNumDocument();
    }

    /**
     * {@inheritDoc}
     */
    public function setIdSupplier($idSupplier)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIdSupplier', array($idSupplier));

        return parent::setIdSupplier($idSupplier);
    }

    /**
     * {@inheritDoc}
     */
    public function getIdSupplier()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIdSupplier', array());

        return parent::getIdSupplier();
    }

    /**
     * {@inheritDoc}
     */
    public function setIdPadre($idPadre)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIdPadre', array($idPadre));

        return parent::setIdPadre($idPadre);
    }

    /**
     * {@inheritDoc}
     */
    public function getIdPadre()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIdPadre', array());

        return parent::getIdPadre();
    }

}
