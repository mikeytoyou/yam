<?php

namespace alex\yamBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TrLayeredPriceIndex
 */
class TrLayeredPriceIndex
{
    /**
     * @var integer
     */
    private $idProduct;

    /**
     * @var integer
     */
    private $idCurrency;

    /**
     * @var integer
     */
    private $idShop;

    /**
     * @var integer
     */
    private $priceMin;

    /**
     * @var integer
     */
    private $priceMax;


    /**
     * Set idProduct
     *
     * @param integer $idProduct
     * @return TrLayeredPriceIndex
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
     * Set idCurrency
     *
     * @param integer $idCurrency
     * @return TrLayeredPriceIndex
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
     * Set idShop
     *
     * @param integer $idShop
     * @return TrLayeredPriceIndex
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
     * Set priceMin
     *
     * @param integer $priceMin
     * @return TrLayeredPriceIndex
     */
    public function setPriceMin($priceMin)
    {
        $this->priceMin = $priceMin;

        return $this;
    }

    /**
     * Get priceMin
     *
     * @return integer 
     */
    public function getPriceMin()
    {
        return $this->priceMin;
    }

    /**
     * Set priceMax
     *
     * @param integer $priceMax
     * @return TrLayeredPriceIndex
     */
    public function setPriceMax($priceMax)
    {
        $this->priceMax = $priceMax;

        return $this;
    }

    /**
     * Get priceMax
     *
     * @return integer 
     */
    public function getPriceMax()
    {
        return $this->priceMax;
    }
}
