<?php

namespace alex\yamBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TrProductCarrier
 */
class TrProductCarrier
{
    /**
     * @var integer
     */
    private $idProduct;

    /**
     * @var integer
     */
    private $idCarrierReference;

    /**
     * @var integer
     */
    private $idShop;


    /**
     * Set idProduct
     *
     * @param integer $idProduct
     * @return TrProductCarrier
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
     * Set idCarrierReference
     *
     * @param integer $idCarrierReference
     * @return TrProductCarrier
     */
    public function setIdCarrierReference($idCarrierReference)
    {
        $this->idCarrierReference = $idCarrierReference;

        return $this;
    }

    /**
     * Get idCarrierReference
     *
     * @return integer 
     */
    public function getIdCarrierReference()
    {
        return $this->idCarrierReference;
    }

    /**
     * Set idShop
     *
     * @param integer $idShop
     * @return TrProductCarrier
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
