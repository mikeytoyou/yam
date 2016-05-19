<?php

namespace alex\yamBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TrSupplyOrderDetail
 */
class TrSupplyOrderDetail
{
    /**
     * @var integer
     */
    private $idSupplyOrderDetail;

    /**
     * @var integer
     */
    private $idSupplyOrder;

    /**
     * @var integer
     */
    private $idCurrency;

    /**
     * @var integer
     */
    private $idProduct;

    /**
     * @var integer
     */
    private $idProductAttribute;

    /**
     * @var string
     */
    private $reference;

    /**
     * @var string
     */
    private $supplierReference;

    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $ean13;

    /**
     * @var string
     */
    private $upc;

    /**
     * @var string
     */
    private $exchangeRate;

    /**
     * @var string
     */
    private $unitPriceTe;

    /**
     * @var integer
     */
    private $quantityExpected;

    /**
     * @var integer
     */
    private $quantityReceived;

    /**
     * @var string
     */
    private $priceTe;

    /**
     * @var string
     */
    private $discountRate;

    /**
     * @var string
     */
    private $discountValueTe;

    /**
     * @var string
     */
    private $priceWithDiscountTe;

    /**
     * @var string
     */
    private $taxRate;

    /**
     * @var string
     */
    private $taxValue;

    /**
     * @var string
     */
    private $priceTi;

    /**
     * @var string
     */
    private $taxValueWithOrderDiscount;

    /**
     * @var string
     */
    private $priceWithOrderDiscountTe;


    /**
     * Get idSupplyOrderDetail
     *
     * @return integer 
     */
    public function getIdSupplyOrderDetail()
    {
        return $this->idSupplyOrderDetail;
    }

    /**
     * Set idSupplyOrder
     *
     * @param integer $idSupplyOrder
     * @return TrSupplyOrderDetail
     */
    public function setIdSupplyOrder($idSupplyOrder)
    {
        $this->idSupplyOrder = $idSupplyOrder;

        return $this;
    }

    /**
     * Get idSupplyOrder
     *
     * @return integer 
     */
    public function getIdSupplyOrder()
    {
        return $this->idSupplyOrder;
    }

    /**
     * Set idCurrency
     *
     * @param integer $idCurrency
     * @return TrSupplyOrderDetail
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
     * Set idProduct
     *
     * @param integer $idProduct
     * @return TrSupplyOrderDetail
     */
    public function setIdProduct($idProduct)
    {
        $this->idProduct = $idProduct;

        return $this;
    }

    /**
     * Get idProduct
     *
     * @return integer 
     */
    public function getIdProduct()
    {
        return $this->idProduct;
    }

    /**
     * Set idProductAttribute
     *
     * @param integer $idProductAttribute
     * @return TrSupplyOrderDetail
     */
    public function setIdProductAttribute($idProductAttribute)
    {
        $this->idProductAttribute = $idProductAttribute;

        return $this;
    }

    /**
     * Get idProductAttribute
     *
     * @return integer 
     */
    public function getIdProductAttribute()
    {
        return $this->idProductAttribute;
    }

    /**
     * Set reference
     *
     * @param string $reference
     * @return TrSupplyOrderDetail
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
     * Set supplierReference
     *
     * @param string $supplierReference
     * @return TrSupplyOrderDetail
     */
    public function setSupplierReference($supplierReference)
    {
        $this->supplierReference = $supplierReference;

        return $this;
    }

    /**
     * Get supplierReference
     *
     * @return string 
     */
    public function getSupplierReference()
    {
        return $this->supplierReference;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return TrSupplyOrderDetail
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set ean13
     *
     * @param string $ean13
     * @return TrSupplyOrderDetail
     */
    public function setEan13($ean13)
    {
        $this->ean13 = $ean13;

        return $this;
    }

    /**
     * Get ean13
     *
     * @return string 
     */
    public function getEan13()
    {
        return $this->ean13;
    }

    /**
     * Set upc
     *
     * @param string $upc
     * @return TrSupplyOrderDetail
     */
    public function setUpc($upc)
    {
        $this->upc = $upc;

        return $this;
    }

    /**
     * Get upc
     *
     * @return string 
     */
    public function getUpc()
    {
        return $this->upc;
    }

    /**
     * Set exchangeRate
     *
     * @param string $exchangeRate
     * @return TrSupplyOrderDetail
     */
    public function setExchangeRate($exchangeRate)
    {
        $this->exchangeRate = $exchangeRate;

        return $this;
    }

    /**
     * Get exchangeRate
     *
     * @return string 
     */
    public function getExchangeRate()
    {
        return $this->exchangeRate;
    }

    /**
     * Set unitPriceTe
     *
     * @param string $unitPriceTe
     * @return TrSupplyOrderDetail
     */
    public function setUnitPriceTe($unitPriceTe)
    {
        $this->unitPriceTe = $unitPriceTe;

        return $this;
    }

    /**
     * Get unitPriceTe
     *
     * @return string 
     */
    public function getUnitPriceTe()
    {
        return $this->unitPriceTe;
    }

    /**
     * Set quantityExpected
     *
     * @param integer $quantityExpected
     * @return TrSupplyOrderDetail
     */
    public function setQuantityExpected($quantityExpected)
    {
        $this->quantityExpected = $quantityExpected;

        return $this;
    }

    /**
     * Get quantityExpected
     *
     * @return integer 
     */
    public function getQuantityExpected()
    {
        return $this->quantityExpected;
    }

    /**
     * Set quantityReceived
     *
     * @param integer $quantityReceived
     * @return TrSupplyOrderDetail
     */
    public function setQuantityReceived($quantityReceived)
    {
        $this->quantityReceived = $quantityReceived;

        return $this;
    }

    /**
     * Get quantityReceived
     *
     * @return integer 
     */
    public function getQuantityReceived()
    {
        return $this->quantityReceived;
    }

    /**
     * Set priceTe
     *
     * @param string $priceTe
     * @return TrSupplyOrderDetail
     */
    public function setPriceTe($priceTe)
    {
        $this->priceTe = $priceTe;

        return $this;
    }

    /**
     * Get priceTe
     *
     * @return string 
     */
    public function getPriceTe()
    {
        return $this->priceTe;
    }

    /**
     * Set discountRate
     *
     * @param string $discountRate
     * @return TrSupplyOrderDetail
     */
    public function setDiscountRate($discountRate)
    {
        $this->discountRate = $discountRate;

        return $this;
    }

    /**
     * Get discountRate
     *
     * @return string 
     */
    public function getDiscountRate()
    {
        return $this->discountRate;
    }

    /**
     * Set discountValueTe
     *
     * @param string $discountValueTe
     * @return TrSupplyOrderDetail
     */
    public function setDiscountValueTe($discountValueTe)
    {
        $this->discountValueTe = $discountValueTe;

        return $this;
    }

    /**
     * Get discountValueTe
     *
     * @return string 
     */
    public function getDiscountValueTe()
    {
        return $this->discountValueTe;
    }

    /**
     * Set priceWithDiscountTe
     *
     * @param string $priceWithDiscountTe
     * @return TrSupplyOrderDetail
     */
    public function setPriceWithDiscountTe($priceWithDiscountTe)
    {
        $this->priceWithDiscountTe = $priceWithDiscountTe;

        return $this;
    }

    /**
     * Get priceWithDiscountTe
     *
     * @return string 
     */
    public function getPriceWithDiscountTe()
    {
        return $this->priceWithDiscountTe;
    }

    /**
     * Set taxRate
     *
     * @param string $taxRate
     * @return TrSupplyOrderDetail
     */
    public function setTaxRate($taxRate)
    {
        $this->taxRate = $taxRate;

        return $this;
    }

    /**
     * Get taxRate
     *
     * @return string 
     */
    public function getTaxRate()
    {
        return $this->taxRate;
    }

    /**
     * Set taxValue
     *
     * @param string $taxValue
     * @return TrSupplyOrderDetail
     */
    public function setTaxValue($taxValue)
    {
        $this->taxValue = $taxValue;

        return $this;
    }

    /**
     * Get taxValue
     *
     * @return string 
     */
    public function getTaxValue()
    {
        return $this->taxValue;
    }

    /**
     * Set priceTi
     *
     * @param string $priceTi
     * @return TrSupplyOrderDetail
     */
    public function setPriceTi($priceTi)
    {
        $this->priceTi = $priceTi;

        return $this;
    }

    /**
     * Get priceTi
     *
     * @return string 
     */
    public function getPriceTi()
    {
        return $this->priceTi;
    }

    /**
     * Set taxValueWithOrderDiscount
     *
     * @param string $taxValueWithOrderDiscount
     * @return TrSupplyOrderDetail
     */
    public function setTaxValueWithOrderDiscount($taxValueWithOrderDiscount)
    {
        $this->taxValueWithOrderDiscount = $taxValueWithOrderDiscount;

        return $this;
    }

    /**
     * Get taxValueWithOrderDiscount
     *
     * @return string 
     */
    public function getTaxValueWithOrderDiscount()
    {
        return $this->taxValueWithOrderDiscount;
    }

    /**
     * Set priceWithOrderDiscountTe
     *
     * @param string $priceWithOrderDiscountTe
     * @return TrSupplyOrderDetail
     */
    public function setPriceWithOrderDiscountTe($priceWithOrderDiscountTe)
    {
        $this->priceWithOrderDiscountTe = $priceWithOrderDiscountTe;

        return $this;
    }

    /**
     * Get priceWithOrderDiscountTe
     *
     * @return string 
     */
    public function getPriceWithOrderDiscountTe()
    {
        return $this->priceWithOrderDiscountTe;
    }
}
