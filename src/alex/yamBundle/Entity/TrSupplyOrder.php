<?php

namespace alex\yamBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TrSupplyOrder
 */
class TrSupplyOrder
{
    /**
     * @var integer
     */
    private $idSupplyOrder;

    /**
     * @var integer
     */
    private $idSupplier;

    /**
     * @var string
     */
    private $supplierName;

    /**
     * @var integer
     */
    private $idLang;

    /**
     * @var integer
     */
    private $idWarehouse;

    /**
     * @var integer
     */
    private $idSupplyOrderState;

    /**
     * @var integer
     */
    private $idCurrency;

    /**
     * @var integer
     */
    private $idRefCurrency;

    /**
     * @var string
     */
    private $reference;

    /**
     * @var \DateTime
     */
    private $dateAdd;

    /**
     * @var \DateTime
     */
    private $dateUpd;

    /**
     * @var \DateTime
     */
    private $dateDeliveryExpected;

    /**
     * @var string
     */
    private $totalTe;

    /**
     * @var string
     */
    private $totalWithDiscountTe;

    /**
     * @var string
     */
    private $totalTax;

    /**
     * @var string
     */
    private $totalTi;

    /**
     * @var string
     */
    private $discountRate;

    /**
     * @var string
     */
    private $discountValueTe;

    /**
     * @var boolean
     */
    private $isTemplate;


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
     * Set idSupplier
     *
     * @param integer $idSupplier
     * @return TrSupplyOrder
     */
    public function setIdSupplier($idSupplier)
    {
        $this->idSupplier = $idSupplier;

        return $this;
    }

    /**
     * Get idSupplier
     *
     * @return integer 
     */
    public function getIdSupplier()
    {
        return $this->idSupplier;
    }

    /**
     * Set supplierName
     *
     * @param string $supplierName
     * @return TrSupplyOrder
     */
    public function setSupplierName($supplierName)
    {
        $this->supplierName = $supplierName;

        return $this;
    }

    /**
     * Get supplierName
     *
     * @return string 
     */
    public function getSupplierName()
    {
        return $this->supplierName;
    }

    /**
     * Set idLang
     *
     * @param integer $idLang
     * @return TrSupplyOrder
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
     * Set idWarehouse
     *
     * @param integer $idWarehouse
     * @return TrSupplyOrder
     */
    public function setIdWarehouse($idWarehouse)
    {
        $this->idWarehouse = $idWarehouse;

        return $this;
    }

    /**
     * Get idWarehouse
     *
     * @return integer 
     */
    public function getIdWarehouse()
    {
        return $this->idWarehouse;
    }

    /**
     * Set idSupplyOrderState
     *
     * @param integer $idSupplyOrderState
     * @return TrSupplyOrder
     */
    public function setIdSupplyOrderState($idSupplyOrderState)
    {
        $this->idSupplyOrderState = $idSupplyOrderState;

        return $this;
    }

    /**
     * Get idSupplyOrderState
     *
     * @return integer 
     */
    public function getIdSupplyOrderState()
    {
        return $this->idSupplyOrderState;
    }

    /**
     * Set idCurrency
     *
     * @param integer $idCurrency
     * @return TrSupplyOrder
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
     * Set idRefCurrency
     *
     * @param integer $idRefCurrency
     * @return TrSupplyOrder
     */
    public function setIdRefCurrency($idRefCurrency)
    {
        $this->idRefCurrency = $idRefCurrency;

        return $this;
    }

    /**
     * Get idRefCurrency
     *
     * @return integer 
     */
    public function getIdRefCurrency()
    {
        return $this->idRefCurrency;
    }

    /**
     * Set reference
     *
     * @param string $reference
     * @return TrSupplyOrder
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
     * Set dateAdd
     *
     * @param \DateTime $dateAdd
     * @return TrSupplyOrder
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
     * @return TrSupplyOrder
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
     * Set dateDeliveryExpected
     *
     * @param \DateTime $dateDeliveryExpected
     * @return TrSupplyOrder
     */
    public function setDateDeliveryExpected($dateDeliveryExpected)
    {
        $this->dateDeliveryExpected = $dateDeliveryExpected;

        return $this;
    }

    /**
     * Get dateDeliveryExpected
     *
     * @return \DateTime 
     */
    public function getDateDeliveryExpected()
    {
        return $this->dateDeliveryExpected;
    }

    /**
     * Set totalTe
     *
     * @param string $totalTe
     * @return TrSupplyOrder
     */
    public function setTotalTe($totalTe)
    {
        $this->totalTe = $totalTe;

        return $this;
    }

    /**
     * Get totalTe
     *
     * @return string 
     */
    public function getTotalTe()
    {
        return $this->totalTe;
    }

    /**
     * Set totalWithDiscountTe
     *
     * @param string $totalWithDiscountTe
     * @return TrSupplyOrder
     */
    public function setTotalWithDiscountTe($totalWithDiscountTe)
    {
        $this->totalWithDiscountTe = $totalWithDiscountTe;

        return $this;
    }

    /**
     * Get totalWithDiscountTe
     *
     * @return string 
     */
    public function getTotalWithDiscountTe()
    {
        return $this->totalWithDiscountTe;
    }

    /**
     * Set totalTax
     *
     * @param string $totalTax
     * @return TrSupplyOrder
     */
    public function setTotalTax($totalTax)
    {
        $this->totalTax = $totalTax;

        return $this;
    }

    /**
     * Get totalTax
     *
     * @return string 
     */
    public function getTotalTax()
    {
        return $this->totalTax;
    }

    /**
     * Set totalTi
     *
     * @param string $totalTi
     * @return TrSupplyOrder
     */
    public function setTotalTi($totalTi)
    {
        $this->totalTi = $totalTi;

        return $this;
    }

    /**
     * Get totalTi
     *
     * @return string 
     */
    public function getTotalTi()
    {
        return $this->totalTi;
    }

    /**
     * Set discountRate
     *
     * @param string $discountRate
     * @return TrSupplyOrder
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
     * @return TrSupplyOrder
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
     * Set isTemplate
     *
     * @param boolean $isTemplate
     * @return TrSupplyOrder
     */
    public function setIsTemplate($isTemplate)
    {
        $this->isTemplate = $isTemplate;

        return $this;
    }

    /**
     * Get isTemplate
     *
     * @return boolean 
     */
    public function getIsTemplate()
    {
        return $this->isTemplate;
    }
}
