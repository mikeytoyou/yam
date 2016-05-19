<?php

namespace alex\yamBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TrSpecificPriceRule
 */
class TrSpecificPriceRule
{
    /**
     * @var integer
     */
    private $idSpecificPriceRule;

    /**
     * @var string
     */
    private $name;

    /**
     * @var integer
     */
    private $idShop;

    /**
     * @var integer
     */
    private $idCurrency;

    /**
     * @var integer
     */
    private $idCountry;

    /**
     * @var integer
     */
    private $idGroup;

    /**
     * @var integer
     */
    private $fromQuantity;

    /**
     * @var string
     */
    private $price;

    /**
     * @var string
     */
    private $reduction;

    /**
     * @var string
     */
    private $reductionType;

    /**
     * @var \DateTime
     */
    private $from;

    /**
     * @var \DateTime
     */
    private $to;


    /**
     * Get idSpecificPriceRule
     *
     * @return integer 
     */
    public function getIdSpecificPriceRule()
    {
        return $this->idSpecificPriceRule;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return TrSpecificPriceRule
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
     * Set idShop
     *
     * @param integer $idShop
     * @return TrSpecificPriceRule
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
     * Set idCurrency
     *
     * @param integer $idCurrency
     * @return TrSpecificPriceRule
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
     * Set idCountry
     *
     * @param integer $idCountry
     * @return TrSpecificPriceRule
     */
    public function setIdCountry($idCountry)
    {
        $this->idCountry = $idCountry;

        return $this;
    }

    /**
     * Get idCountry
     *
     * @return integer 
     */
    public function getIdCountry()
    {
        return $this->idCountry;
    }

    /**
     * Set idGroup
     *
     * @param integer $idGroup
     * @return TrSpecificPriceRule
     */
    public function setIdGroup($idGroup)
    {
        $this->idGroup = $idGroup;

        return $this;
    }

    /**
     * Get idGroup
     *
     * @return integer 
     */
    public function getIdGroup()
    {
        return $this->idGroup;
    }

    /**
     * Set fromQuantity
     *
     * @param integer $fromQuantity
     * @return TrSpecificPriceRule
     */
    public function setFromQuantity($fromQuantity)
    {
        $this->fromQuantity = $fromQuantity;

        return $this;
    }

    /**
     * Get fromQuantity
     *
     * @return integer 
     */
    public function getFromQuantity()
    {
        return $this->fromQuantity;
    }

    /**
     * Set price
     *
     * @param string $price
     * @return TrSpecificPriceRule
     */
    public function setPrice($price)
    {
        $this->price = $price;

        return $this;
    }

    /**
     * Get price
     *
     * @return string 
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Set reduction
     *
     * @param string $reduction
     * @return TrSpecificPriceRule
     */
    public function setReduction($reduction)
    {
        $this->reduction = $reduction;

        return $this;
    }

    /**
     * Get reduction
     *
     * @return string 
     */
    public function getReduction()
    {
        return $this->reduction;
    }

    /**
     * Set reductionType
     *
     * @param string $reductionType
     * @return TrSpecificPriceRule
     */
    public function setReductionType($reductionType)
    {
        $this->reductionType = $reductionType;

        return $this;
    }

    /**
     * Get reductionType
     *
     * @return string 
     */
    public function getReductionType()
    {
        return $this->reductionType;
    }

    /**
     * Set from
     *
     * @param \DateTime $from
     * @return TrSpecificPriceRule
     */
    public function setFrom($from)
    {
        $this->from = $from;

        return $this;
    }

    /**
     * Get from
     *
     * @return \DateTime 
     */
    public function getFrom()
    {
        return $this->from;
    }

    /**
     * Set to
     *
     * @param \DateTime $to
     * @return TrSpecificPriceRule
     */
    public function setTo($to)
    {
        $this->to = $to;

        return $this;
    }

    /**
     * Get to
     *
     * @return \DateTime 
     */
    public function getTo()
    {
        return $this->to;
    }
}
