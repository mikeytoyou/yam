<?php

namespace alex\yamBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TrProductSale
 */
class TrProductSale
{
    /**
     * @var integer
     */
    private $idProduct;

    /**
     * @var integer
     */
    private $quantity;

    /**
     * @var integer
     */
    private $saleNbr;

    /**
     * @var \DateTime
     */
    private $dateUpd;


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
     * Set quantity
     *
     * @param integer $quantity
     * @return TrProductSale
     */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;

        return $this;
    }

    /**
     * Get quantity
     *
     * @return integer 
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * Set saleNbr
     *
     * @param integer $saleNbr
     * @return TrProductSale
     */
    public function setSaleNbr($saleNbr)
    {
        $this->saleNbr = $saleNbr;

        return $this;
    }

    /**
     * Get saleNbr
     *
     * @return integer 
     */
    public function getSaleNbr()
    {
        return $this->saleNbr;
    }

    /**
     * Set dateUpd
     *
     * @param \DateTime $dateUpd
     * @return TrProductSale
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
