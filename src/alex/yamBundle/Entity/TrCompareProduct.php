<?php

namespace alex\yamBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TrCompareProduct
 */
class TrCompareProduct
{
    /**
     * @var integer
     */
    private $idCompare;

    /**
     * @var integer
     */
    private $idProduct;

    /**
     * @var \DateTime
     */
    private $dateAdd;

    /**
     * @var \DateTime
     */
    private $dateUpd;


    /**
     * Set idCompare
     *
     * @param integer $idCompare
     * @return TrCompareProduct
     */
    public function setIdCompare($idCompare)
    {
        $this->idCompare = $idCompare;

        return $this;
    }

    /**
     * Get idCompare
     *
     * @return integer 
     */
    public function getIdCompare()
    {
        return $this->idCompare;
    }

    /**
     * Set idProduct
     *
     * @param integer $idProduct
     * @return TrCompareProduct
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
     * Set dateAdd
     *
     * @param \DateTime $dateAdd
     * @return TrCompareProduct
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
     * @return TrCompareProduct
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
