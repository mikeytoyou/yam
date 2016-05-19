<?php

namespace alex\yamBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TrFeatureValue
 */
class TrFeatureValue
{
    /**
     * @var integer
     */
    private $idFeatureValue;

    /**
     * @var integer
     */
    private $idFeature;

    /**
     * @var boolean
     */
    private $custom;


    /**
     * Get idFeatureValue
     *
     * @return integer 
     */
    public function getIdFeatureValue()
    {
        return $this->idFeatureValue;
    }

    /**
     * Set idFeature
     *
     * @param integer $idFeature
     * @return TrFeatureValue
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
     * Set custom
     *
     * @param boolean $custom
     * @return TrFeatureValue
     */
    public function setCustom($custom)
    {
        $this->custom = $custom;

        return $this;
    }

    /**
     * Get custom
     *
     * @return boolean 
     */
    public function getCustom()
    {
        return $this->custom;
    }
}
