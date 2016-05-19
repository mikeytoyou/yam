<?php

namespace alex\yamBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TrOrderReturnDetail
 */
class TrOrderReturnDetail
{
    /**
     * @var integer
     */
    private $idOrderReturn;

    /**
     * @var integer
     */
    private $idOrderDetail;

    /**
     * @var integer
     */
    private $idCustomization;

    /**
     * @var integer
     */
    private $productQuantity;


    /**
     * Set idOrderReturn
     *
     * @param integer $idOrderReturn
     * @return TrOrderReturnDetail
     */
    public function setIdOrderReturn($idOrderReturn)
    {
        $this->idOrderReturn = $idOrderReturn;

        return $this;
    }

    /**
     * Get idOrderReturn
     *
     * @return integer 
     */
    public function getIdOrderReturn()
    {
        return $this->idOrderReturn;
    }

    /**
     * Set idOrderDetail
     *
     * @param integer $idOrderDetail
     * @return TrOrderReturnDetail
     */
    public function setIdOrderDetail($idOrderDetail)
    {
        $this->idOrderDetail = $idOrderDetail;

        return $this;
    }

    /**
     * Get idOrderDetail
     *
     * @return integer 
     */
    public function getIdOrderDetail()
    {
        return $this->idOrderDetail;
    }

    /**
     * Set idCustomization
     *
     * @param integer $idCustomization
     * @return TrOrderReturnDetail
     */
    public function setIdCustomization($idCustomization)
    {
        $this->idCustomization = $idCustomization;

        return $this;
    }

    /**
     * Get idCustomization
     *
     * @return integer 
     */
    public function getIdCustomization()
    {
        return $this->idCustomization;
    }

    /**
     * Set productQuantity
     *
     * @param integer $productQuantity
     * @return TrOrderReturnDetail
     */
    public function setProductQuantity($productQuantity)
    {
        $this->productQuantity = $productQuantity;

        return $this;
    }

    /**
     * Get productQuantity
     *
     * @return integer 
     */
    public function getProductQuantity()
    {
        return $this->productQuantity;
    }
}
