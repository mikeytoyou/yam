<?php

namespace alex\yamBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TrCart
 */
class TrCart
{
    /**
     * @var integer
     */
    private $idCart;

    /**
     * @var integer
     */
    private $idShopGroup;

    /**
     * @var integer
     */
    private $idShop;

    /**
     * @var integer
     */
    private $idCarrier;

    /**
     * @var string
     */
    private $deliveryOption;

    /**
     * @var integer
     */
    private $idLang;

    /**
     * @var integer
     */
    private $idAddressDelivery;

    /**
     * @var integer
     */
    private $idAddressInvoice;

    /**
     * @var integer
     */
    private $idCurrency;

    /**
     * @var integer
     */
    private $idCustomer;

    /**
     * @var integer
     */
    private $idGuest;

    /**
     * @var string
     */
    private $secureKey;

    /**
     * @var boolean
     */
    private $recyclable;

    /**
     * @var boolean
     */
    private $gift;

    /**
     * @var string
     */
    private $giftMessage;

    /**
     * @var boolean
     */
    private $mobileTheme;

    /**
     * @var boolean
     */
    private $allowSeperatedPackage;

    /**
     * @var \DateTime
     */
    private $dateAdd;

    /**
     * @var \DateTime
     */
    private $dateUpd;


    /**
     * Get idCart
     *
     * @return integer 
     */
    public function getIdCart()
    {
        return $this->idCart;
    }

    /**
     * Set idShopGroup
     *
     * @param integer $idShopGroup
     * @return TrCart
     */
    public function setIdShopGroup($idShopGroup)
    {
        $this->idShopGroup = $idShopGroup;

        return $this;
    }

    /**
     * Get idShopGroup
     *
     * @return integer 
     */
    public function getIdShopGroup()
    {
        return $this->idShopGroup;
    }

    /**
     * Set idShop
     *
     * @param integer $idShop
     * @return TrCart
     */
    public function setIdShop($idShop)
    {
        $this->idShop = $idShop;

        return $this;
    }

    /**
     * Get idShop
     *
     * @return integer 
     */
    public function getIdShop()
    {
        return $this->idShop;
    }

    /**
     * Set idCarrier
     *
     * @param integer $idCarrier
     * @return TrCart
     */
    public function setIdCarrier($idCarrier)
    {
        $this->idCarrier = $idCarrier;

        return $this;
    }

    /**
     * Get idCarrier
     *
     * @return integer 
     */
    public function getIdCarrier()
    {
        return $this->idCarrier;
    }

    /**
     * Set deliveryOption
     *
     * @param string $deliveryOption
     * @return TrCart
     */
    public function setDeliveryOption($deliveryOption)
    {
        $this->deliveryOption = $deliveryOption;

        return $this;
    }

    /**
     * Get deliveryOption
     *
     * @return string 
     */
    public function getDeliveryOption()
    {
        return $this->deliveryOption;
    }

    /**
     * Set idLang
     *
     * @param integer $idLang
     * @return TrCart
     */
    public function setIdLang($idLang)
    {
        $this->idLang = $idLang;

        return $this;
    }

    /**
     * Get idLang
     *
     * @return integer 
     */
    public function getIdLang()
    {
        return $this->idLang;
    }

    /**
     * Set idAddressDelivery
     *
     * @param integer $idAddressDelivery
     * @return TrCart
     */
    public function setIdAddressDelivery($idAddressDelivery)
    {
        $this->idAddressDelivery = $idAddressDelivery;

        return $this;
    }

    /**
     * Get idAddressDelivery
     *
     * @return integer 
     */
    public function getIdAddressDelivery()
    {
        return $this->idAddressDelivery;
    }

    /**
     * Set idAddressInvoice
     *
     * @param integer $idAddressInvoice
     * @return TrCart
     */
    public function setIdAddressInvoice($idAddressInvoice)
    {
        $this->idAddressInvoice = $idAddressInvoice;

        return $this;
    }

    /**
     * Get idAddressInvoice
     *
     * @return integer 
     */
    public function getIdAddressInvoice()
    {
        return $this->idAddressInvoice;
    }

    /**
     * Set idCurrency
     *
     * @param integer $idCurrency
     * @return TrCart
     */
    public function setIdCurrency($idCurrency)
    {
        $this->idCurrency = $idCurrency;

        return $this;
    }

    /**
     * Get idCurrency
     *
     * @return integer 
     */
    public function getIdCurrency()
    {
        return $this->idCurrency;
    }

    /**
     * Set idCustomer
     *
     * @param integer $idCustomer
     * @return TrCart
     */
    public function setIdCustomer($idCustomer)
    {
        $this->idCustomer = $idCustomer;

        return $this;
    }

    /**
     * Get idCustomer
     *
     * @return integer 
     */
    public function getIdCustomer()
    {
        return $this->idCustomer;
    }

    /**
     * Set idGuest
     *
     * @param integer $idGuest
     * @return TrCart
     */
    public function setIdGuest($idGuest)
    {
        $this->idGuest = $idGuest;

        return $this;
    }

    /**
     * Get idGuest
     *
     * @return integer 
     */
    public function getIdGuest()
    {
        return $this->idGuest;
    }

    /**
     * Set secureKey
     *
     * @param string $secureKey
     * @return TrCart
     */
    public function setSecureKey($secureKey)
    {
        $this->secureKey = $secureKey;

        return $this;
    }

    /**
     * Get secureKey
     *
     * @return string 
     */
    public function getSecureKey()
    {
        return $this->secureKey;
    }

    /**
     * Set recyclable
     *
     * @param boolean $recyclable
     * @return TrCart
     */
    public function setRecyclable($recyclable)
    {
        $this->recyclable = $recyclable;

        return $this;
    }

    /**
     * Get recyclable
     *
     * @return boolean 
     */
    public function getRecyclable()
    {
        return $this->recyclable;
    }

    /**
     * Set gift
     *
     * @param boolean $gift
     * @return TrCart
     */
    public function setGift($gift)
    {
        $this->gift = $gift;

        return $this;
    }

    /**
     * Get gift
     *
     * @return boolean 
     */
    public function getGift()
    {
        return $this->gift;
    }

    /**
     * Set giftMessage
     *
     * @param string $giftMessage
     * @return TrCart
     */
    public function setGiftMessage($giftMessage)
    {
        $this->giftMessage = $giftMessage;

        return $this;
    }

    /**
     * Get giftMessage
     *
     * @return string 
     */
    public function getGiftMessage()
    {
        return $this->giftMessage;
    }

    /**
     * Set mobileTheme
     *
     * @param boolean $mobileTheme
     * @return TrCart
     */
    public function setMobileTheme($mobileTheme)
    {
        $this->mobileTheme = $mobileTheme;

        return $this;
    }

    /**
     * Get mobileTheme
     *
     * @return boolean 
     */
    public function getMobileTheme()
    {
        return $this->mobileTheme;
    }

    /**
     * Set allowSeperatedPackage
     *
     * @param boolean $allowSeperatedPackage
     * @return TrCart
     */
    public function setAllowSeperatedPackage($allowSeperatedPackage)
    {
        $this->allowSeperatedPackage = $allowSeperatedPackage;

        return $this;
    }

    /**
     * Get allowSeperatedPackage
     *
     * @return boolean 
     */
    public function getAllowSeperatedPackage()
    {
        return $this->allowSeperatedPackage;
    }

    /**
     * Set dateAdd
     *
     * @param \DateTime $dateAdd
     * @return TrCart
     */
    public function setDateAdd($dateAdd)
    {
        $this->dateAdd = $dateAdd;

        return $this;
    }

    /**
     * Get dateAdd
     *
     * @return \DateTime 
     */
    public function getDateAdd()
    {
        return $this->dateAdd;
    }

    /**
     * Set dateUpd
     *
     * @param \DateTime $dateUpd
     * @return TrCart
     */
    public function setDateUpd($dateUpd)
    {
        $this->dateUpd = $dateUpd;

        return $this;
    }

    /**
     * Get dateUpd
     *
     * @return \DateTime 
     */
    public function getDateUpd()
    {
        return $this->dateUpd;
    }
}
