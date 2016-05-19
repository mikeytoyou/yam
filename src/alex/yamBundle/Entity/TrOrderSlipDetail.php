<?php

namespace alex\yamBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TrOrderSlipDetail
 */
class TrOrderSlipDetail
{
    /**
     * @var integer
     */
    private $idOrderSlip;

    /**
     * @var integer
     */
    private $idOrderDetail;

    /**
     * @var integer
     */
    private $productQuantity;

    /**
     * @var string
     */
    private $amountTaxExcl;

    /**
     * @var string
     */
    private $amountTaxIncl;


    /**
     * Set idOrderSlip
     *
     * @param integer $idOrderSlip
     * @return TrOrderSlipDetail
     */
    public function setIdOrderSlip($idOrderSlip)
    {
        $this->idOrderSlip = $idOrderSlip;

        return $this;
    }

    /**
     * Get idOrderSlip
     *
     * @return integer 
     */
    public function getIdOrderSlip()
    {
        return $this->idOrderSlip;
    }

    /**
     * Set idOrderDetail
     *
     * @param integer $idOrderDetail
     * @return TrOrderSlipDetail
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
     * Set productQuantity
     *
     * @param integer $productQuantity
     * @return TrOrderSlipDetail
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

    /**
     * Set amountTaxExcl
     *
     * @param string $amountTaxExcl
     * @return TrOrderSlipDetail
     */
    public function setAmountTaxExcl($amountTaxExcl)
    {
        $this->amountTaxExcl = $amountTaxExcl;

        return $this;
    }

    /**
     * Get amountTaxExcl
     *
     * @return string 
     */
    public function getAmountTaxExcl()
    {
        return $this->amountTaxExcl;
    }

    /**
     * Set amountTaxIncl
     *
     * @param string $amountTaxIncl
     * @return TrOrderSlipDetail
     */
    public function setAmountTaxIncl($amountTaxIncl)
    {
        $this->amountTaxIncl = $amountTaxIncl;

        return $this;
    }

    /**
     * Get amountTaxIncl
     *
     * @return string 
     */
    public function getAmountTaxIncl()
    {
        return $this->amountTaxIncl;
    }
}
