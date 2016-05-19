<?php

namespace alex\yamBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TrOrderDetail
 */
class TrOrderDetail
{
    /**
     * @var integer
     */
    private $idOrderDetail;

    /**
     * @var integer
     */
    private $idOrder;

    /**
     * @var integer
     */
    private $idOrderInvoice;

    /**
     * @var integer
     */
    private $idWarehouse;

    /**
     * @var integer
     */
    private $idShop;

    /**
     * @var integer
     */
    private $productId;

    /**
     * @var integer
     */
    private $productAttributeId;

    /**
     * @var string
     */
    private $productName;

    /**
     * @var integer
     */
    private $productQuantity;

    /**
     * @var integer
     */
    private $productQuantityInStock;

    /**
     * @var integer
     */
    private $productQuantityRefunded;

    /**
     * @var integer
     */
    private $productQuantityReturn;

    /**
     * @var integer
     */
    private $productQuantityReinjected;

    /**
     * @var string
     */
    private $productPrice;

    /**
     * @var string
     */
    private $reductionPercent;

    /**
     * @var string
     */
    private $reductionAmount;

    /**
     * @var string
     */
    private $reductionAmountTaxIncl;

    /**
     * @var string
     */
    private $reductionAmountTaxExcl;

    /**
     * @var string
     */
    private $groupReduction;

    /**
     * @var string
     */
    private $productQuantityDiscount;

    /**
     * @var string
     */
    private $productEan13;

    /**
     * @var string
     */
    private $productUpc;

    /**
     * @var string
     */
    private $productReference;

    /**
     * @var string
     */
    private $productSupplierReference;

    /**
     * @var string
     */
    private $productWeight;

    /**
     * @var boolean
     */
    private $taxComputationMethod;

    /**
     * @var string
     */
    private $taxName;

    /**
     * @var string
     */
    private $taxRate;

    /**
     * @var string
     */
    private $ecotax;

    /**
     * @var string
     */
    private $ecotaxTaxRate;

    /**
     * @var boolean
     */
    private $discountQuantityApplied;

    /**
     * @var string
     */
    private $downloadHash;

    /**
     * @var integer
     */
    private $downloadNb;

    /**
     * @var \DateTime
     */
    private $downloadDeadline;

    /**
     * @var string
     */
    private $totalPriceTaxIncl;

    /**
     * @var string
     */
    private $totalPriceTaxExcl;

    /**
     * @var string
     */
    private $unitPriceTaxIncl;

    /**
     * @var string
     */
    private $unitPriceTaxExcl;

    /**
     * @var string
     */
    private $totalShippingPriceTaxIncl;

    /**
     * @var string
     */
    private $totalShippingPriceTaxExcl;

    /**
     * @var string
     */
    private $purchaseSupplierPrice;

    /**
     * @var string
     */
    private $originalProductPrice;


    /**
     * Get idOrderDetail
     *
     * @return integer 
     */
    public function getIdOrderDetail()
    {
        return $this->idOrderDetail;
    }

    /**
     * Set idOrder
     *
     * @param integer $idOrder
     * @return TrOrderDetail
     */
    public function setIdOrder($idOrder)
    {
        $this->idOrder = $idOrder;

        return $this;
    }

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
     * Set idOrderInvoice
     *
     * @param integer $idOrderInvoice
     * @return TrOrderDetail
     */
    public function setIdOrderInvoice($idOrderInvoice)
    {
        $this->idOrderInvoice = $idOrderInvoice;

        return $this;
    }

    /**
     * Get idOrderInvoice
     *
     * @return integer 
     */
    public function getIdOrderInvoice()
    {
        return $this->idOrderInvoice;
    }

    /**
     * Set idWarehouse
     *
     * @param integer $idWarehouse
     * @return TrOrderDetail
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
     * Set idShop
     *
     * @param integer $idShop
     * @return TrOrderDetail
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
     * Set productId
     *
     * @param integer $productId
     * @return TrOrderDetail
     */
    public function setProductId($productId)
    {
        $this->productId = $productId;

        return $this;
    }

    /**
     * Get productId
     *
     * @return integer 
     */
    public function getProductId()
    {
        return $this->productId;
    }

    /**
     * Set productAttributeId
     *
     * @param integer $productAttributeId
     * @return TrOrderDetail
     */
    public function setProductAttributeId($productAttributeId)
    {
        $this->productAttributeId = $productAttributeId;

        return $this;
    }

    /**
     * Get productAttributeId
     *
     * @return integer 
     */
    public function getProductAttributeId()
    {
        return $this->productAttributeId;
    }

    /**
     * Set productName
     *
     * @param string $productName
     * @return TrOrderDetail
     */
    public function setProductName($productName)
    {
        $this->productName = $productName;

        return $this;
    }

    /**
     * Get productName
     *
     * @return string 
     */
    public function getProductName()
    {
        return $this->productName;
    }

    /**
     * Set productQuantity
     *
     * @param integer $productQuantity
     * @return TrOrderDetail
     */
    public function setProductQuantity($productQuantity)
    {
        $this->productQuantity = $productQuantity;

        return $this;
    }

    /**
     * Get productQuantity
     *
     * @return integer 
     */
    public function getProductQuantity()
    {
        return $this->productQuantity;
    }

    /**
     * Set productQuantityInStock
     *
     * @param integer $productQuantityInStock
     * @return TrOrderDetail
     */
    public function setProductQuantityInStock($productQuantityInStock)
    {
        $this->productQuantityInStock = $productQuantityInStock;

        return $this;
    }

    /**
     * Get productQuantityInStock
     *
     * @return integer 
     */
    public function getProductQuantityInStock()
    {
        return $this->productQuantityInStock;
    }

    /**
     * Set productQuantityRefunded
     *
     * @param integer $productQuantityRefunded
     * @return TrOrderDetail
     */
    public function setProductQuantityRefunded($productQuantityRefunded)
    {
        $this->productQuantityRefunded = $productQuantityRefunded;

        return $this;
    }

    /**
     * Get productQuantityRefunded
     *
     * @return integer 
     */
    public function getProductQuantityRefunded()
    {
        return $this->productQuantityRefunded;
    }

    /**
     * Set productQuantityReturn
     *
     * @param integer $productQuantityReturn
     * @return TrOrderDetail
     */
    public function setProductQuantityReturn($productQuantityReturn)
    {
        $this->productQuantityReturn = $productQuantityReturn;

        return $this;
    }

    /**
     * Get productQuantityReturn
     *
     * @return integer 
     */
    public function getProductQuantityReturn()
    {
        return $this->productQuantityReturn;
    }

    /**
     * Set productQuantityReinjected
     *
     * @param integer $productQuantityReinjected
     * @return TrOrderDetail
     */
    public function setProductQuantityReinjected($productQuantityReinjected)
    {
        $this->productQuantityReinjected = $productQuantityReinjected;

        return $this;
    }

    /**
     * Get productQuantityReinjected
     *
     * @return integer 
     */
    public function getProductQuantityReinjected()
    {
        return $this->productQuantityReinjected;
    }

    /**
     * Set productPrice
     *
     * @param string $productPrice
     * @return TrOrderDetail
     */
    public function setProductPrice($productPrice)
    {
        $this->productPrice = $productPrice;

        return $this;
    }

    /**
     * Get productPrice
     *
     * @return string 
     */
    public function getProductPrice()
    {
        return $this->productPrice;
    }

    /**
     * Set reductionPercent
     *
     * @param string $reductionPercent
     * @return TrOrderDetail
     */
    public function setReductionPercent($reductionPercent)
    {
        $this->reductionPercent = $reductionPercent;

        return $this;
    }

    /**
     * Get reductionPercent
     *
     * @return string 
     */
    public function getReductionPercent()
    {
        return $this->reductionPercent;
    }

    /**
     * Set reductionAmount
     *
     * @param string $reductionAmount
     * @return TrOrderDetail
     */
    public function setReductionAmount($reductionAmount)
    {
        $this->reductionAmount = $reductionAmount;

        return $this;
    }

    /**
     * Get reductionAmount
     *
     * @return string 
     */
    public function getReductionAmount()
    {
        return $this->reductionAmount;
    }

    /**
     * Set reductionAmountTaxIncl
     *
     * @param string $reductionAmountTaxIncl
     * @return TrOrderDetail
     */
    public function setReductionAmountTaxIncl($reductionAmountTaxIncl)
    {
        $this->reductionAmountTaxIncl = $reductionAmountTaxIncl;

        return $this;
    }

    /**
     * Get reductionAmountTaxIncl
     *
     * @return string 
     */
    public function getReductionAmountTaxIncl()
    {
        return $this->reductionAmountTaxIncl;
    }

    /**
     * Set reductionAmountTaxExcl
     *
     * @param string $reductionAmountTaxExcl
     * @return TrOrderDetail
     */
    public function setReductionAmountTaxExcl($reductionAmountTaxExcl)
    {
        $this->reductionAmountTaxExcl = $reductionAmountTaxExcl;

        return $this;
    }

    /**
     * Get reductionAmountTaxExcl
     *
     * @return string 
     */
    public function getReductionAmountTaxExcl()
    {
        return $this->reductionAmountTaxExcl;
    }

    /**
     * Set groupReduction
     *
     * @param string $groupReduction
     * @return TrOrderDetail
     */
    public function setGroupReduction($groupReduction)
    {
        $this->groupReduction = $groupReduction;

        return $this;
    }

    /**
     * Get groupReduction
     *
     * @return string 
     */
    public function getGroupReduction()
    {
        return $this->groupReduction;
    }

    /**
     * Set productQuantityDiscount
     *
     * @param string $productQuantityDiscount
     * @return TrOrderDetail
     */
    public function setProductQuantityDiscount($productQuantityDiscount)
    {
        $this->productQuantityDiscount = $productQuantityDiscount;

        return $this;
    }

    /**
     * Get productQuantityDiscount
     *
     * @return string 
     */
    public function getProductQuantityDiscount()
    {
        return $this->productQuantityDiscount;
    }

    /**
     * Set productEan13
     *
     * @param string $productEan13
     * @return TrOrderDetail
     */
    public function setProductEan13($productEan13)
    {
        $this->productEan13 = $productEan13;

        return $this;
    }

    /**
     * Get productEan13
     *
     * @return string 
     */
    public function getProductEan13()
    {
        return $this->productEan13;
    }

    /**
     * Set productUpc
     *
     * @param string $productUpc
     * @return TrOrderDetail
     */
    public function setProductUpc($productUpc)
    {
        $this->productUpc = $productUpc;

        return $this;
    }

    /**
     * Get productUpc
     *
     * @return string 
     */
    public function getProductUpc()
    {
        return $this->productUpc;
    }

    /**
     * Set productReference
     *
     * @param string $productReference
     * @return TrOrderDetail
     */
    public function setProductReference($productReference)
    {
        $this->productReference = $productReference;

        return $this;
    }

    /**
     * Get productReference
     *
     * @return string 
     */
    public function getProductReference()
    {
        return $this->productReference;
    }

    /**
     * Set productSupplierReference
     *
     * @param string $productSupplierReference
     * @return TrOrderDetail
     */
    public function setProductSupplierReference($productSupplierReference)
    {
        $this->productSupplierReference = $productSupplierReference;

        return $this;
    }

    /**
     * Get productSupplierReference
     *
     * @return string 
     */
    public function getProductSupplierReference()
    {
        return $this->productSupplierReference;
    }

    /**
     * Set productWeight
     *
     * @param string $productWeight
     * @return TrOrderDetail
     */
    public function setProductWeight($productWeight)
    {
        $this->productWeight = $productWeight;

        return $this;
    }

    /**
     * Get productWeight
     *
     * @return string 
     */
    public function getProductWeight()
    {
        return $this->productWeight;
    }

    /**
     * Set taxComputationMethod
     *
     * @param boolean $taxComputationMethod
     * @return TrOrderDetail
     */
    public function setTaxComputationMethod($taxComputationMethod)
    {
        $this->taxComputationMethod = $taxComputationMethod;

        return $this;
    }

    /**
     * Get taxComputationMethod
     *
     * @return boolean 
     */
    public function getTaxComputationMethod()
    {
        return $this->taxComputationMethod;
    }

    /**
     * Set taxName
     *
     * @param string $taxName
     * @return TrOrderDetail
     */
    public function setTaxName($taxName)
    {
        $this->taxName = $taxName;

        return $this;
    }

    /**
     * Get taxName
     *
     * @return string 
     */
    public function getTaxName()
    {
        return $this->taxName;
    }

    /**
     * Set taxRate
     *
     * @param string $taxRate
     * @return TrOrderDetail
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
     * Set ecotax
     *
     * @param string $ecotax
     * @return TrOrderDetail
     */
    public function setEcotax($ecotax)
    {
        $this->ecotax = $ecotax;

        return $this;
    }

    /**
     * Get ecotax
     *
     * @return string 
     */
    public function getEcotax()
    {
        return $this->ecotax;
    }

    /**
     * Set ecotaxTaxRate
     *
     * @param string $ecotaxTaxRate
     * @return TrOrderDetail
     */
    public function setEcotaxTaxRate($ecotaxTaxRate)
    {
        $this->ecotaxTaxRate = $ecotaxTaxRate;

        return $this;
    }

    /**
     * Get ecotaxTaxRate
     *
     * @return string 
     */
    public function getEcotaxTaxRate()
    {
        return $this->ecotaxTaxRate;
    }

    /**
     * Set discountQuantityApplied
     *
     * @param boolean $discountQuantityApplied
     * @return TrOrderDetail
     */
    public function setDiscountQuantityApplied($discountQuantityApplied)
    {
        $this->discountQuantityApplied = $discountQuantityApplied;

        return $this;
    }

    /**
     * Get discountQuantityApplied
     *
     * @return boolean 
     */
    public function getDiscountQuantityApplied()
    {
        return $this->discountQuantityApplied;
    }

    /**
     * Set downloadHash
     *
     * @param string $downloadHash
     * @return TrOrderDetail
     */
    public function setDownloadHash($downloadHash)
    {
        $this->downloadHash = $downloadHash;

        return $this;
    }

    /**
     * Get downloadHash
     *
     * @return string 
     */
    public function getDownloadHash()
    {
        return $this->downloadHash;
    }

    /**
     * Set downloadNb
     *
     * @param integer $downloadNb
     * @return TrOrderDetail
     */
    public function setDownloadNb($downloadNb)
    {
        $this->downloadNb = $downloadNb;

        return $this;
    }

    /**
     * Get downloadNb
     *
     * @return integer 
     */
    public function getDownloadNb()
    {
        return $this->downloadNb;
    }

    /**
     * Set downloadDeadline
     *
     * @param \DateTime $downloadDeadline
     * @return TrOrderDetail
     */
    public function setDownloadDeadline($downloadDeadline)
    {
        $this->downloadDeadline = $downloadDeadline;

        return $this;
    }

    /**
     * Get downloadDeadline
     *
     * @return \DateTime 
     */
    public function getDownloadDeadline()
    {
        return $this->downloadDeadline;
    }

    /**
     * Set totalPriceTaxIncl
     *
     * @param string $totalPriceTaxIncl
     * @return TrOrderDetail
     */
    public function setTotalPriceTaxIncl($totalPriceTaxIncl)
    {
        $this->totalPriceTaxIncl = $totalPriceTaxIncl;

        return $this;
    }

    /**
     * Get totalPriceTaxIncl
     *
     * @return string 
     */
    public function getTotalPriceTaxIncl()
    {
        return $this->totalPriceTaxIncl;
    }

    /**
     * Set totalPriceTaxExcl
     *
     * @param string $totalPriceTaxExcl
     * @return TrOrderDetail
     */
    public function setTotalPriceTaxExcl($totalPriceTaxExcl)
    {
        $this->totalPriceTaxExcl = $totalPriceTaxExcl;

        return $this;
    }

    /**
     * Get totalPriceTaxExcl
     *
     * @return string 
     */
    public function getTotalPriceTaxExcl()
    {
        return $this->totalPriceTaxExcl;
    }

    /**
     * Set unitPriceTaxIncl
     *
     * @param string $unitPriceTaxIncl
     * @return TrOrderDetail
     */
    public function setUnitPriceTaxIncl($unitPriceTaxIncl)
    {
        $this->unitPriceTaxIncl = $unitPriceTaxIncl;

        return $this;
    }

    /**
     * Get unitPriceTaxIncl
     *
     * @return string 
     */
    public function getUnitPriceTaxIncl()
    {
        return $this->unitPriceTaxIncl;
    }

    /**
     * Set unitPriceTaxExcl
     *
     * @param string $unitPriceTaxExcl
     * @return TrOrderDetail
     */
    public function setUnitPriceTaxExcl($unitPriceTaxExcl)
    {
        $this->unitPriceTaxExcl = $unitPriceTaxExcl;

        return $this;
    }

    /**
     * Get unitPriceTaxExcl
     *
     * @return string 
     */
    public function getUnitPriceTaxExcl()
    {
        return $this->unitPriceTaxExcl;
    }

    /**
     * Set totalShippingPriceTaxIncl
     *
     * @param string $totalShippingPriceTaxIncl
     * @return TrOrderDetail
     */
    public function setTotalShippingPriceTaxIncl($totalShippingPriceTaxIncl)
    {
        $this->totalShippingPriceTaxIncl = $totalShippingPriceTaxIncl;

        return $this;
    }

    /**
     * Get totalShippingPriceTaxIncl
     *
     * @return string 
     */
    public function getTotalShippingPriceTaxIncl()
    {
        return $this->totalShippingPriceTaxIncl;
    }

    /**
     * Set totalShippingPriceTaxExcl
     *
     * @param string $totalShippingPriceTaxExcl
     * @return TrOrderDetail
     */
    public function setTotalShippingPriceTaxExcl($totalShippingPriceTaxExcl)
    {
        $this->totalShippingPriceTaxExcl = $totalShippingPriceTaxExcl;

        return $this;
    }

    /**
     * Get totalShippingPriceTaxExcl
     *
     * @return string 
     */
    public function getTotalShippingPriceTaxExcl()
    {
        return $this->totalShippingPriceTaxExcl;
    }

    /**
     * Set purchaseSupplierPrice
     *
     * @param string $purchaseSupplierPrice
     * @return TrOrderDetail
     */
    public function setPurchaseSupplierPrice($purchaseSupplierPrice)
    {
        $this->purchaseSupplierPrice = $purchaseSupplierPrice;

        return $this;
    }

    /**
     * Get purchaseSupplierPrice
     *
     * @return string 
     */
    public function getPurchaseSupplierPrice()
    {
        return $this->purchaseSupplierPrice;
    }

    /**
     * Set originalProductPrice
     *
     * @param string $originalProductPrice
     * @return TrOrderDetail
     */
    public function setOriginalProductPrice($originalProductPrice)
    {
        $this->originalProductPrice = $originalProductPrice;

        return $this;
    }

    /**
     * Get originalProductPrice
     *
     * @return string 
     */
    public function getOriginalProductPrice()
    {
        return $this->originalProductPrice;
    }
}
