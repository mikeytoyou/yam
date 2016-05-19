<?php

namespace alex\yamBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TrOrders
 */
class TrOrders
{
    /**
     * @var integer
     */
    private $idOrder;

    /**
     * @var string
     */
    private $reference;

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
     * @var integer
     */
    private $idLang;

    /**
     * @var integer
     */
    private $idCustomer;

    /**
     * @var integer
     */
    private $idCart;

    /**
     * @var integer
     */
    private $idCurrency;

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
    private $currentState;

    /**
     * @var string
     */
    private $secureKey;

    /**
     * @var string
     */
    private $payment;

    /**
     * @var string
     */
    private $conversionRate;

    /**
     * @var string
     */
    private $module;

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
     * @var string
     */
    private $shippingNumber;

    /**
     * @var string
     */
    private $totalDiscounts;

    /**
     * @var string
     */
    private $totalDiscountsTaxIncl;

    /**
     * @var string
     */
    private $totalDiscountsTaxExcl;

    /**
     * @var string
     */
    private $totalPaid;

    /**
     * @var string
     */
    private $totalPaidTaxIncl;

    /**
     * @var string
     */
    private $totalPaidTaxExcl;

    /**
     * @var string
     */
    private $totalPaidReal;

    /**
     * @var string
     */
    private $totalProducts;

    /**
     * @var string
     */
    private $totalProductsWt;

    /**
     * @var string
     */
    private $totalShipping;

    /**
     * @var string
     */
    private $totalShippingTaxIncl;

    /**
     * @var string
     */
    private $totalShippingTaxExcl;

    /**
     * @var string
     */
    private $carrierTaxRate;

    /**
     * @var string
     */
    private $totalWrapping;

    /**
     * @var string
     */
    private $totalWrappingTaxIncl;

    /**
     * @var string
     */
    private $totalWrappingTaxExcl;

    /**
     * @var integer
     */
    private $invoiceNumber;

    /**
     * @var integer
     */
    private $deliveryNumber;

    /**
     * @var \DateTime
     */
    private $invoiceDate;

    /**
     * @var \DateTime
     */
    private $deliveryDate;

    /**
     * @var integer
     */
    private $valid;

    /**
     * @var \DateTime
     */
    private $dateAdd;

    /**
     * @var \DateTime
     */
    private $dateUpd;

    /**
     * @var integer
     */
    private $comanda;

    /**
     * @var integer
     */
    private $idMeza;

    /**
     * @var float
     */
    private $payTotal;

    /**
     * @var integer
     */
    private $idCajaDetalle;


    /**
     * Get idOrder
     *
     * @return integer 
     */
    public function getIdOrder()
    {
        return $this->idOrder;
    }

    /**
     * Set reference
     *
     * @param string $reference
     * @return TrOrders
     */
    public function setReference($reference)
    {
        $this->reference = $reference;

        return $this;
    }

    /**
     * Get reference
     *
     * @return string 
     */
    public function getReference()
    {
        return $this->reference;
    }

    /**
     * Set idShopGroup
     *
     * @param integer $idShopGroup
     * @return TrOrders
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
     * @return TrOrders
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
     * @return TrOrders
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
     * Set idLang
     *
     * @param integer $idLang
     * @return TrOrders
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
     * Set idCustomer
     *
     * @param integer $idCustomer
     * @return TrOrders
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
     * Set idCart
     *
     * @param integer $idCart
     * @return TrOrders
     */
    public function setIdCart($idCart)
    {
        $this->idCart = $idCart;

        return $this;
    }

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
     * Set idCurrency
     *
     * @param integer $idCurrency
     * @return TrOrders
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
     * Set idAddressDelivery
     *
     * @param integer $idAddressDelivery
     * @return TrOrders
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
     * @return TrOrders
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
     * Set currentState
     *
     * @param integer $currentState
     * @return TrOrders
     */
    public function setCurrentState($currentState)
    {
        $this->currentState = $currentState;

        return $this;
    }

    /**
     * Get currentState
     *
     * @return integer 
     */
    public function getCurrentState()
    {
        return $this->currentState;
    }

    /**
     * Set secureKey
     *
     * @param string $secureKey
     * @return TrOrders
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
     * Set payment
     *
     * @param string $payment
     * @return TrOrders
     */
    public function setPayment($payment)
    {
        $this->payment = $payment;

        return $this;
    }

    /**
     * Get payment
     *
     * @return string 
     */
    public function getPayment()
    {
        return $this->payment;
    }

    /**
     * Set conversionRate
     *
     * @param string $conversionRate
     * @return TrOrders
     */
    public function setConversionRate($conversionRate)
    {
        $this->conversionRate = $conversionRate;

        return $this;
    }

    /**
     * Get conversionRate
     *
     * @return string 
     */
    public function getConversionRate()
    {
        return $this->conversionRate;
    }

    /**
     * Set module
     *
     * @param string $module
     * @return TrOrders
     */
    public function setModule($module)
    {
        $this->module = $module;

        return $this;
    }

    /**
     * Get module
     *
     * @return string 
     */
    public function getModule()
    {
        return $this->module;
    }

    /**
     * Set recyclable
     *
     * @param boolean $recyclable
     * @return TrOrders
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
     * @return TrOrders
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
     * @return TrOrders
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
     * @return TrOrders
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
     * Set shippingNumber
     *
     * @param string $shippingNumber
     * @return TrOrders
     */
    public function setShippingNumber($shippingNumber)
    {
        $this->shippingNumber = $shippingNumber;

        return $this;
    }

    /**
     * Get shippingNumber
     *
     * @return string 
     */
    public function getShippingNumber()
    {
        return $this->shippingNumber;
    }

    /**
     * Set totalDiscounts
     *
     * @param string $totalDiscounts
     * @return TrOrders
     */
    public function setTotalDiscounts($totalDiscounts)
    {
        $this->totalDiscounts = $totalDiscounts;

        return $this;
    }

    /**
     * Get totalDiscounts
     *
     * @return string 
     */
    public function getTotalDiscounts()
    {
        return $this->totalDiscounts;
    }

    /**
     * Set totalDiscountsTaxIncl
     *
     * @param string $totalDiscountsTaxIncl
     * @return TrOrders
     */
    public function setTotalDiscountsTaxIncl($totalDiscountsTaxIncl)
    {
        $this->totalDiscountsTaxIncl = $totalDiscountsTaxIncl;

        return $this;
    }

    /**
     * Get totalDiscountsTaxIncl
     *
     * @return string 
     */
    public function getTotalDiscountsTaxIncl()
    {
        return $this->totalDiscountsTaxIncl;
    }

    /**
     * Set totalDiscountsTaxExcl
     *
     * @param string $totalDiscountsTaxExcl
     * @return TrOrders
     */
    public function setTotalDiscountsTaxExcl($totalDiscountsTaxExcl)
    {
        $this->totalDiscountsTaxExcl = $totalDiscountsTaxExcl;

        return $this;
    }

    /**
     * Get totalDiscountsTaxExcl
     *
     * @return string 
     */
    public function getTotalDiscountsTaxExcl()
    {
        return $this->totalDiscountsTaxExcl;
    }

    /**
     * Set totalPaid
     *
     * @param string $totalPaid
     * @return TrOrders
     */
    public function setTotalPaid($totalPaid)
    {
        $this->totalPaid = $totalPaid;

        return $this;
    }

    /**
     * Get totalPaid
     *
     * @return string 
     */
    public function getTotalPaid()
    {
        return $this->totalPaid;
    }

    /**
     * Set totalPaidTaxIncl
     *
     * @param string $totalPaidTaxIncl
     * @return TrOrders
     */
    public function setTotalPaidTaxIncl($totalPaidTaxIncl)
    {
        $this->totalPaidTaxIncl = $totalPaidTaxIncl;

        return $this;
    }

    /**
     * Get totalPaidTaxIncl
     *
     * @return string 
     */
    public function getTotalPaidTaxIncl()
    {
        return $this->totalPaidTaxIncl;
    }

    /**
     * Set totalPaidTaxExcl
     *
     * @param string $totalPaidTaxExcl
     * @return TrOrders
     */
    public function setTotalPaidTaxExcl($totalPaidTaxExcl)
    {
        $this->totalPaidTaxExcl = $totalPaidTaxExcl;

        return $this;
    }

    /**
     * Get totalPaidTaxExcl
     *
     * @return string 
     */
    public function getTotalPaidTaxExcl()
    {
        return $this->totalPaidTaxExcl;
    }

    /**
     * Set totalPaidReal
     *
     * @param string $totalPaidReal
     * @return TrOrders
     */
    public function setTotalPaidReal($totalPaidReal)
    {
        $this->totalPaidReal = $totalPaidReal;

        return $this;
    }

    /**
     * Get totalPaidReal
     *
     * @return string 
     */
    public function getTotalPaidReal()
    {
        return $this->totalPaidReal;
    }

    /**
     * Set totalProducts
     *
     * @param string $totalProducts
     * @return TrOrders
     */
    public function setTotalProducts($totalProducts)
    {
        $this->totalProducts = $totalProducts;

        return $this;
    }

    /**
     * Get totalProducts
     *
     * @return string 
     */
    public function getTotalProducts()
    {
        return $this->totalProducts;
    }

    /**
     * Set totalProductsWt
     *
     * @param string $totalProductsWt
     * @return TrOrders
     */
    public function setTotalProductsWt($totalProductsWt)
    {
        $this->totalProductsWt = $totalProductsWt;

        return $this;
    }

    /**
     * Get totalProductsWt
     *
     * @return string 
     */
    public function getTotalProductsWt()
    {
        return $this->totalProductsWt;
    }

    /**
     * Set totalShipping
     *
     * @param string $totalShipping
     * @return TrOrders
     */
    public function setTotalShipping($totalShipping)
    {
        $this->totalShipping = $totalShipping;

        return $this;
    }

    /**
     * Get totalShipping
     *
     * @return string 
     */
    public function getTotalShipping()
    {
        return $this->totalShipping;
    }

    /**
     * Set totalShippingTaxIncl
     *
     * @param string $totalShippingTaxIncl
     * @return TrOrders
     */
    public function setTotalShippingTaxIncl($totalShippingTaxIncl)
    {
        $this->totalShippingTaxIncl = $totalShippingTaxIncl;

        return $this;
    }

    /**
     * Get totalShippingTaxIncl
     *
     * @return string 
     */
    public function getTotalShippingTaxIncl()
    {
        return $this->totalShippingTaxIncl;
    }

    /**
     * Set totalShippingTaxExcl
     *
     * @param string $totalShippingTaxExcl
     * @return TrOrders
     */
    public function setTotalShippingTaxExcl($totalShippingTaxExcl)
    {
        $this->totalShippingTaxExcl = $totalShippingTaxExcl;

        return $this;
    }

    /**
     * Get totalShippingTaxExcl
     *
     * @return string 
     */
    public function getTotalShippingTaxExcl()
    {
        return $this->totalShippingTaxExcl;
    }

    /**
     * Set carrierTaxRate
     *
     * @param string $carrierTaxRate
     * @return TrOrders
     */
    public function setCarrierTaxRate($carrierTaxRate)
    {
        $this->carrierTaxRate = $carrierTaxRate;

        return $this;
    }

    /**
     * Get carrierTaxRate
     *
     * @return string 
     */
    public function getCarrierTaxRate()
    {
        return $this->carrierTaxRate;
    }

    /**
     * Set totalWrapping
     *
     * @param string $totalWrapping
     * @return TrOrders
     */
    public function setTotalWrapping($totalWrapping)
    {
        $this->totalWrapping = $totalWrapping;

        return $this;
    }

    /**
     * Get totalWrapping
     *
     * @return string 
     */
    public function getTotalWrapping()
    {
        return $this->totalWrapping;
    }

    /**
     * Set totalWrappingTaxIncl
     *
     * @param string $totalWrappingTaxIncl
     * @return TrOrders
     */
    public function setTotalWrappingTaxIncl($totalWrappingTaxIncl)
    {
        $this->totalWrappingTaxIncl = $totalWrappingTaxIncl;

        return $this;
    }

    /**
     * Get totalWrappingTaxIncl
     *
     * @return string 
     */
    public function getTotalWrappingTaxIncl()
    {
        return $this->totalWrappingTaxIncl;
    }

    /**
     * Set totalWrappingTaxExcl
     *
     * @param string $totalWrappingTaxExcl
     * @return TrOrders
     */
    public function setTotalWrappingTaxExcl($totalWrappingTaxExcl)
    {
        $this->totalWrappingTaxExcl = $totalWrappingTaxExcl;

        return $this;
    }

    /**
     * Get totalWrappingTaxExcl
     *
     * @return string 
     */
    public function getTotalWrappingTaxExcl()
    {
        return $this->totalWrappingTaxExcl;
    }

    /**
     * Set invoiceNumber
     *
     * @param integer $invoiceNumber
     * @return TrOrders
     */
    public function setInvoiceNumber($invoiceNumber)
    {
        $this->invoiceNumber = $invoiceNumber;

        return $this;
    }

    /**
     * Get invoiceNumber
     *
     * @return integer 
     */
    public function getInvoiceNumber()
    {
        return $this->invoiceNumber;
    }

    /**
     * Set deliveryNumber
     *
     * @param integer $deliveryNumber
     * @return TrOrders
     */
    public function setDeliveryNumber($deliveryNumber)
    {
        $this->deliveryNumber = $deliveryNumber;

        return $this;
    }

    /**
     * Get deliveryNumber
     *
     * @return integer 
     */
    public function getDeliveryNumber()
    {
        return $this->deliveryNumber;
    }

    /**
     * Set invoiceDate
     *
     * @param \DateTime $invoiceDate
     * @return TrOrders
     */
    public function setInvoiceDate($invoiceDate)
    {
        $this->invoiceDate = $invoiceDate;

        return $this;
    }

    /**
     * Get invoiceDate
     *
     * @return \DateTime 
     */
    public function getInvoiceDate()
    {
        return $this->invoiceDate;
    }

    /**
     * Set deliveryDate
     *
     * @param \DateTime $deliveryDate
     * @return TrOrders
     */
    public function setDeliveryDate($deliveryDate)
    {
        $this->deliveryDate = $deliveryDate;

        return $this;
    }

    /**
     * Get deliveryDate
     *
     * @return \DateTime 
     */
    public function getDeliveryDate()
    {
        return $this->deliveryDate;
    }

    /**
     * Set valid
     *
     * @param integer $valid
     * @return TrOrders
     */
    public function setValid($valid)
    {
        $this->valid = $valid;

        return $this;
    }

    /**
     * Get valid
     *
     * @return integer 
     */
    public function getValid()
    {
        return $this->valid;
    }

    /**
     * Set dateAdd
     *
     * @param \DateTime $dateAdd
     * @return TrOrders
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
     * @return TrOrders
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

    /**
     * Set comanda
     *
     * @param integer $comanda
     * @return TrOrders
     */
    public function setComanda($comanda)
    {
        $this->comanda = $comanda;

        return $this;
    }

    /**
     * Get comanda
     *
     * @return integer 
     */
    public function getComanda()
    {
        return $this->comanda;
    }

    /**
     * Set idMeza
     *
     * @param integer $idMeza
     * @return TrOrders
     */
    public function setIdMeza($idMeza)
    {
        $this->idMeza = $idMeza;

        return $this;
    }

    /**
     * Get idMeza
     *
     * @return integer 
     */
    public function getIdMeza()
    {
        return $this->idMeza;
    }

    /**
     * Set payTotal
     *
     * @param float $payTotal
     * @return TrOrders
     */
    public function setPayTotal($payTotal)
    {
        $this->payTotal = $payTotal;

        return $this;
    }

    /**
     * Get payTotal
     *
     * @return float 
     */
    public function getPayTotal()
    {
        return $this->payTotal;
    }

    /**
     * Set idCajaDetalle
     *
     * @param integer $idCajaDetalle
     * @return TrOrders
     */
    public function setIdCajaDetalle($idCajaDetalle)
    {
        $this->idCajaDetalle = $idCajaDetalle;

        return $this;
    }

    /**
     * Get idCajaDetalle
     *
     * @return integer 
     */
    public function getIdCajaDetalle()
    {
        return $this->idCajaDetalle;
    }
}
