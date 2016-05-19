<?php

namespace alex\yamBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TrOrderDetailTax
 */
class TrOrderDetailTax
{
    /**
     * @var integer
     */
    private $idOrderDetail;

    /**
     * @var integer
     */
    private $idTax;

    /**
     * @var string
     */
    private $unitAmount;

    /**
     * @var string
     */
    private $totalAmount;


    /**
     * Set idOrderDetail
     *
     * @param integer $idOrderDetail
     * @return TrOrderDetailTax
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
     * Set idTax
     *
     * @param integer $idTax
     * @return TrOrderDetailTax
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

    /**
     * Set unitAmount
     *
     * @param string $unitAmount
     * @return TrOrderDetailTax
     */
    public function setUnitAmount($unitAmount)
    {
        $this->unitAmount = $unitAmount;

        return $this;
    }

    /**
     * Get unitAmount
     *
     * @return string 
     */
    public function getUnitAmount()
    {
        return $this->unitAmount;
    }

    /**
     * Set totalAmount
     *
     * @param string $totalAmount
     * @return TrOrderDetailTax
     */
    public function setTotalAmount($totalAmount)
    {
        $this->totalAmount = $totalAmount;

        return $this;
    }

    /**
     * Get totalAmount
     *
     * @return string 
     */
    public function getTotalAmount()
    {
        return $this->totalAmount;
    }
}
