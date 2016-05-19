<?php

namespace alex\yamBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TrOrderCarrier
 */
class TrOrderCarrier
{
    /**
     * @var integer
     */
    private $idOrderCarrier;

    /**
     * @var integer
     */
    private $idOrder;

    /**
     * @var integer
     */
    private $idCarrier;

    /**
     * @var integer
     */
    private $idOrderInvoice;

    /**
     * @var string
     */
    private $weight;

    /**
     * @var string
     */
    private $shippingCostTaxExcl;

    /**
     * @var string
     */
    private $shippingCostTaxIncl;

    /**
     * @var string
     */
    private $trackingNumber;

    /**
     * @var \DateTime
     */
    private $dateAdd;


    /**
     * Get idOrderCarrier
     *
     * @return integer 
     */
    public function getIdOrderCarrier()
    {
        return $this->idOrderCarrier;
    }

    /**
     * Set idOrder
     *
     * @param integer $idOrder
     * @return TrOrderCarrier
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
     * Set idCarrier
     *
     * @param integer $idCarrier
     * @return TrOrderCarrier
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
     * Set idOrderInvoice
     *
     * @param integer $idOrderInvoice
     * @return TrOrderCarrier
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
     * Set weight
     *
     * @param string $weight
     * @return TrOrderCarrier
     */
    public function setWeight($weight)
    {
        $this->weight = $weight;

        return $this;
    }

    /**
     * Get weight
     *
     * @return string 
     */
    public function getWeight()
    {
        return $this->weight;
    }

    /**
     * Set shippingCostTaxExcl
     *
     * @param string $shippingCostTaxExcl
     * @return TrOrderCarrier
     */
    public function setShippingCostTaxExcl($shippingCostTaxExcl)
    {
        $this->shippingCostTaxExcl = $shippingCostTaxExcl;

        return $this;
    }

    /**
     * Get shippingCostTaxExcl
     *
     * @return string 
     */
    public function getShippingCostTaxExcl()
    {
        return $this->shippingCostTaxExcl;
    }

    /**
     * Set shippingCostTaxIncl
     *
     * @param string $shippingCostTaxIncl
     * @return TrOrderCarrier
     */
    public function setShippingCostTaxIncl($shippingCostTaxIncl)
    {
        $this->shippingCostTaxIncl = $shippingCostTaxIncl;

        return $this;
    }

    /**
     * Get shippingCostTaxIncl
     *
     * @return string 
     */
    public function getShippingCostTaxIncl()
    {
        return $this->shippingCostTaxIncl;
    }

    /**
     * Set trackingNumber
     *
     * @param string $trackingNumber
     * @return TrOrderCarrier
     */
    public function setTrackingNumber($trackingNumber)
    {
        $this->trackingNumber = $trackingNumber;

        return $this;
    }

    /**
     * Get trackingNumber
     *
     * @return string 
     */
    public function getTrackingNumber()
    {
        return $this->trackingNumber;
    }

    /**
     * Set dateAdd
     *
     * @param \DateTime $dateAdd
     * @return TrOrderCarrier
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
