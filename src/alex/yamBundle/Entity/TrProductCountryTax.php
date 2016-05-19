<?php

namespace alex\yamBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TrProductCountryTax
 */
class TrProductCountryTax
{
    /**
     * @var integer
     */
    private $idProduct;

    /**
     * @var integer
     */
    private $idCountry;

    /**
     * @var integer
     */
    private $idTax;


    /**
     * Set idProduct
     *
     * @param integer $idProduct
     * @return TrProductCountryTax
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
     * Set idCountry
     *
     * @param integer $idCountry
     * @return TrProductCountryTax
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
     * Set idTax
     *
     * @param integer $idTax
     * @return TrProductCountryTax
     */
    public function setIdTax($idTax)
    {
        $this->idTax = $idTax;

        return $this;
    }

    /**
     * Get idTax
     *
     * @return integer 
     */
    public function getIdTax()
    {
        return $this->idTax;
    }
}
