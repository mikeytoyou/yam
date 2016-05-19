<?php

namespace alex\yamBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TrDelivery
 */
class TrDelivery
{
    /**
     * @var integer
     */
    private $idDelivery;

    /**
     * @var integer
     */
    private $idShop;

    /**
     * @var integer
     */
    private $idShopGroup;

    /**
     * @var integer
     */
    private $idCarrier;

    /**
     * @var integer
     */
    private $idRangePrice;

    /**
     * @var integer
     */
    private $idRangeWeight;

    /**
     * @var integer
     */
    private $idZone;

    /**
     * @var string
     */
    private $price;


    /**
     * Get idDelivery
     *
     * @return integer 
     */
    public function getIdDelivery()
    {
        return $this->idDelivery;
    }

    /**
     * Set idShop
     *
     * @param integer $idShop
     * @return TrDelivery
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
     * Set idShopGroup
     *
     * @param integer $idShopGroup
     * @return TrDelivery
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
     * Set idCarrier
     *
     * @param integer $idCarrier
     * @return TrDelivery
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
     * Set idRangePrice
     *
     * @param integer $idRangePrice
     * @return TrDelivery
     */
    public function setIdRangePrice($idRangePrice)
    {
        $this->idRangePrice = $idRangePrice;

        return $this;
    }

    /**
     * Get idRangePrice
     *
     * @return integer 
     */
    public function getIdRangePrice()
    {
        return $this->idRangePrice;
    }

    /**
     * Set idRangeWeight
     *
     * @param integer $idRangeWeight
     * @return TrDelivery
     */
    public function setIdRangeWeight($idRangeWeight)
    {
        $this->idRangeWeight = $idRangeWeight;

        return $this;
    }

    /**
     * Get idRangeWeight
     *
     * @return integer 
     */
    public function getIdRangeWeight()
    {
        return $this->idRangeWeight;
    }

    /**
     * Set idZone
     *
     * @param integer $idZone
     * @return TrDelivery
     */
    public function setIdZone($idZone)
    {
        $this->idZone = $idZone;

        return $this;
    }

    /**
     * Get idZone
     *
     * @return integer 
     */
    public function getIdZone()
    {
        return $this->idZone;
    }

    /**
     * Set price
     *
     * @param string $price
     * @return TrDelivery
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
}
