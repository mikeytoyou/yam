<?php

namespace alex\yamBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TrCountryShop
 */
class TrCountryShop
{
    /**
     * @var integer
     */
    private $idCountry;

    /**
     * @var integer
     */
    private $idShop;


    /**
     * Set idCountry
     *
     * @param integer $idCountry
     * @return TrCountryShop
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
     * Set idShop
     *
     * @param integer $idShop
     * @return TrCountryShop
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
