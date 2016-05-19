<?php

namespace alex\yamBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TrGroup
 */
class TrGroup
{
    /**
     * @var integer
     */
    private $idGroup;

    /**
     * @var string
     */
    private $reduction;

    /**
     * @var boolean
     */
    private $priceDisplayMethod;

    /**
     * @var boolean
     */
    private $showPrices;

    /**
     * @var \DateTime
     */
    private $dateAdd;

    /**
     * @var \DateTime
     */
    private $dateUpd;


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
     * Set reduction
     *
     * @param string $reduction
     * @return TrGroup
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
     * Set priceDisplayMethod
     *
     * @param boolean $priceDisplayMethod
     * @return TrGroup
     */
    public function setPriceDisplayMethod($priceDisplayMethod)
    {
        $this->priceDisplayMethod = $priceDisplayMethod;

        return $this;
    }

    /**
     * Get priceDisplayMethod
     *
     * @return boolean 
     */
    public function getPriceDisplayMethod()
    {
        return $this->priceDisplayMethod;
    }

    /**
     * Set showPrices
     *
     * @param boolean $showPrices
     * @return TrGroup
     */
    public function setShowPrices($showPrices)
    {
        $this->showPrices = $showPrices;

        return $this;
    }

    /**
     * Get showPrices
     *
     * @return boolean 
     */
    public function getShowPrices()
    {
        return $this->showPrices;
    }

    /**
     * Set dateAdd
     *
     * @param \DateTime $dateAdd
     * @return TrGroup
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
     * @return TrGroup
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
