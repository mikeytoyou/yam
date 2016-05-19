<?php

namespace alex\yamBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TrFeatureShop
 */
class TrFeatureShop
{
    /**
     * @var integer
     */
    private $idFeature;

    /**
     * @var integer
     */
    private $idShop;


    /**
     * Set idFeature
     *
     * @param integer $idFeature
     * @return TrFeatureShop
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
     * Set idShop
     *
     * @param integer $idShop
     * @return TrFeatureShop
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
}
