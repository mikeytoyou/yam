<?php

namespace alex\yamBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TrHomeslider
 */
class TrHomeslider
{
    /**
     * @var integer
     */
    private $idHomesliderSlides;

    /**
     * @var integer
     */
    private $idShop;


    /**
     * Set idHomesliderSlides
     *
     * @param integer $idHomesliderSlides
     * @return TrHomeslider
     */
    public function setIdHomesliderSlides($idHomesliderSlides)
    {
        $this->idHomesliderSlides = $idHomesliderSlides;

        return $this;
    }

    /**
     * Get idHomesliderSlides
     *
     * @return integer 
     */
    public function getIdHomesliderSlides()
    {
        return $this->idHomesliderSlides;
    }

    /**
     * Set idShop
     *
     * @param integer $idShop
     * @return TrHomeslider
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
