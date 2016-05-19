<?php

namespace alex\yamBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TrOrderInvoiceTax
 */
class TrOrderInvoiceTax
{
    /**
     * @var integer
     */
    private $idOrderInvoice;

    /**
     * @var string
     */
    private $type;

    /**
     * @var integer
     */
    private $idTax;

    /**
     * @var string
     */
    private $amount;


    /**
     * Get idOrderInvoice
     *
     * @return integer 
     */
    public function getIdOrderInvoice()
    {
        return $this->idOrderInvoice;
    }

    /**
     * Set type
     *
     * @param string $type
     * @return TrOrderInvoiceTax
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return string 
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set idTax
     *
     * @param integer $idTax
     * @return TrOrderInvoiceTax
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
     * Set amount
     *
     * @param string $amount
     * @return TrOrderInvoiceTax
     */
    public function setAmount($amount)
    {
        $this->amount = $amount;

        return $this;
    }

    /**
     * Get amount
     *
     * @return string 
     */
    public function getAmount()
    {
        return $this->amount;
    }
}
