<?php

namespace alex\yamBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TrFeatureProduct
 */
class TrFeatureProduct
{
    /**
     * @var integer
     */
    private $idFeature;

    /**
     * @var integer
     */
    private $idProduct;

    /**
     * @var integer
     */
    private $idFeatureValue;


    /**
     * Set idFeature
     *
     * @param integer $idFeature
     * @return TrFeatureProduct
     */
    public function setIdFeature($idFeature)
    {
        $this->idFeature = $idFeature;

        return $this;
    }

    /**
     * Get idFeature
     *
     * @return integer 
     */
    public function getIdFeature()
    {
        return $this->idFeature;
    }

    /**
     * Set idProduct
     *
     * @param integer $idProduct
     * @return TrFeatureProduct
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
     * Set idFeatureValue
     *
     * @param integer $idFeatureValue
     * @return TrFeatureProduct
     */
    public function setIdFeatureValue($idFeatureValue)
    {
        $this->idFeatureValue = $idFeatureValue;

        return $this;
    }

    /**
     * Get idFeatureValue
     *
     * @return integer 
     */
    public function getIdFeatureValue()
    {
        return $this->idFeatureValue;
    }
}
