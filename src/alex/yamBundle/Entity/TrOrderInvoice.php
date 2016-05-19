<?php

namespace alex\yamBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TrOrderInvoice
 */
class TrOrderInvoice
{
    /**
     * @var integer
     */
    private $idOrderInvoice;

    /**
     * @var integer
     */
    private $idOrder;

    /**
     * @var integer
     */
    private $number;

    /**
     * @var integer
     */
    private $deliveryNumber;

    /**
     * @var \DateTime
     */
    private $deliveryDate;

    /**
     * @var string
     */
    private $totalDiscountTaxExcl;

    /**
     * @var string
     */
    private $totalDiscountTaxIncl;

    /**
     * @var string
     */
    private $totalPaidTaxExcl;

    /**
     * @var string
     */
    private $totalPaidTaxIncl;

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
    private $totalShippingTaxExcl;

    /**
     * @var string
     */
    private $totalShippingTaxIncl;

    /**
     * @var integer
     */
    private $shippingTaxComputationMethod;

    /**
     * @var string
     */
    private $totalWrappingTaxExcl;

    /**
     * @var string
     */
    private $totalWrappingTaxIncl;

    /**
     * @var string
     */
    private $note;

    /**
     * @var \DateTime
     */
    private $dateAdd;


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
     * Set idOrder
     *
     * @param integer $idOrder
     * @return TrOrderInvoice
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
     * Set number
     *
     * @param integer $number
     * @return TrOrderInvoice
     */
    public function setNumber($number)
    {
        $this->number = $number;

        return $this;
    }

    /**
     * Get number
     *
     * @return integer 
     */
    public function getNumber()
    {
        return $this->number;
    }

    /**
     * Set deliveryNumber
     *
     * @param integer $deliveryNumber
     * @return TrOrderInvoice
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
     * Set deliveryDate
     *
     * @param \DateTime $deliveryDate
     * @return TrOrderInvoice
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
     * Set totalDiscountTaxExcl
     *
     * @param string $totalDiscountTaxExcl
     * @return TrOrderInvoice
     */
    public function setTotalDiscountTaxExcl($totalDiscountTaxExcl)
    {
        $this->totalDiscountTaxExcl = $totalDiscountTaxExcl;

        return $this;
    }

    /**
     * Get totalDiscountTaxExcl
     *
     * @return string 
     */
    public function getTotalDiscountTaxExcl()
    {
        return $this->totalDiscountTaxExcl;
    }

    /**
     * Set totalDiscountTaxIncl
     *
     * @param string $totalDiscountTaxIncl
     * @return TrOrderInvoice
     */
    public function setTotalDiscountTaxIncl($totalDiscountTaxIncl)
    {
        $this->totalDiscountTaxIncl = $totalDiscountTaxIncl;

        return $this;
    }

    /**
     * Get totalDiscountTaxIncl
     *
     * @return string 
     */
    public function getTotalDiscountTaxIncl()
    {
        return $this->totalDiscountTaxIncl;
    }

    /**
     * Set totalPaidTaxExcl
     *
     * @param string $totalPaidTaxExcl
     * @return TrOrderInvoice
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
     * Set totalPaidTaxIncl
     *
     * @param string $totalPaidTaxIncl
     * @return TrOrderInvoice
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
     * Set totalProducts
     *
     * @param string $totalProducts
     * @return TrOrderInvoice
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
     * @return TrOrderInvoice
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
     * Set totalShippingTaxExcl
     *
     * @param string $totalShippingTaxExcl
     * @return TrOrderInvoice
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
     * Set totalShippingTaxIncl
     *
     * @param string $totalShippingTaxIncl
     * @return TrOrderInvoice
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
     * Set shippingTaxComputationMethod
     *
     * @param integer $shippingTaxComputationMethod
     * @return TrOrderInvoice
     */
    public function setShippingTaxComputationMethod($shippingTaxComputationMethod)
    {
        $this->shippingTaxComputationMethod = $shippingTaxComputationMethod;

        return $this;
    }

    /**
     * Get shippingTaxComputationMethod
     *
     * @return integer 
     */
    public function getShippingTaxComputationMethod()
    {
        return $this->shippingTaxComputationMethod;
    }

    /**
     * Set totalWrappingTaxExcl
     *
     * @param string $totalWrappingTaxExcl
     * @return TrOrderInvoice
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
     * Set totalWrappingTaxIncl
     *
     * @param string $totalWrappingTaxIncl
     * @return TrOrderInvoice
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
     * Set note
     *
     * @param string $note
     * @return TrOrderInvoice
     */
    public function setNote($note)
    {
        $this->note = $note;

        return $this;
    }

    /**
     * Get note
     *
     * @return string 
     */
    public function getNote()
    {
        return $this->note;
    }

    /**
     * Set dateAdd
     *
     * @param \DateTime $dateAdd
     * @return TrOrderInvoice
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
}
