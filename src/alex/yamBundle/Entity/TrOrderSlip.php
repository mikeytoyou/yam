<?php

namespace alex\yamBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TrOrderSlip
 */
class TrOrderSlip
{
    /**
     * @var integer
     */
    private $idOrderSlip;

    /**
     * @var string
     */
    private $conversionRate;

    /**
     * @var integer
     */
    private $idCustomer;

    /**
     * @var integer
     */
    private $idOrder;

    /**
     * @var boolean
     */
    private $shippingCost;

    /**
     * @var string
     */
    private $amount;

    /**
     * @var string
     */
    private $shippingCostAmount;

    /**
     * @var boolean
     */
    private $partial;

    /**
     * @var \DateTime
     */
    private $dateAdd;

    /**
     * @var \DateTime
     */
    private $dateUpd;


    /**
     * Get idOrderSlip
     *
     * @return integer 
     */
    public function getIdOrderSlip()
    {
        return $this->idOrderSlip;
    }

    /**
     * Set conversionRate
     *
     * @param string $conversionRate
     * @return TrOrderSlip
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
     * Set idCustomer
     *
     * @param integer $idCustomer
     * @return TrOrderSlip
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
     * Set idOrder
     *
     * @param integer $idOrder
     * @return TrOrderSlip
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
     * Set shippingCost
     *
     * @param boolean $shippingCost
     * @return TrOrderSlip
     */
    public function setShippingCost($shippingCost)
    {
        $this->shippingCost = $shippingCost;

        return $this;
    }

    /**
     * Get shippingCost
     *
     * @return boolean 
     */
    public function getShippingCost()
    {
        return $this->shippingCost;
    }

    /**
     * Set amount
     *
     * @param string $amount
     * @return TrOrderSlip
     */
    public function setAmount($amount)
    {
        $this->amount = $amount;

        return $this;
    }

    /**
     * Get amount
     *
     * @return string 
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * Set shippingCostAmount
     *
     * @param string $shippingCostAmount
     * @return TrOrderSlip
     */
    public function setShippingCostAmount($shippingCostAmount)
    {
        $this->shippingCostAmount = $shippingCostAmount;

        return $this;
    }

    /**
     * Get shippingCostAmount
     *
     * @return string 
     */
    public function getShippingCostAmount()
    {
        return $this->shippingCostAmount;
    }

    /**
     * Set partial
     *
     * @param boolean $partial
     * @return TrOrderSlip
     */
    public function setPartial($partial)
    {
        $this->partial = $partial;

        return $this;
    }

    /**
     * Get partial
     *
     * @return boolean 
     */
    public function getPartial()
    {
        return $this->partial;
    }

    /**
     * Set dateAdd
     *
     * @param \DateTime $dateAdd
     * @return TrOrderSlip
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
     * @return TrOrderSlip
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
