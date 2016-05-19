<?php

namespace alex\yamBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TrOrderInvoicePayment
 */
class TrOrderInvoicePayment
{
    /**
     * @var integer
     */
    private $idOrderInvoice;

    /**
     * @var integer
     */
    private $idOrderPayment;

    /**
     * @var integer
     */
    private $idOrder;


    /**
     * Set idOrderInvoice
     *
     * @param integer $idOrderInvoice
     * @return TrOrderInvoicePayment
     */
    public function setIdOrderInvoice($idOrderInvoice)
    {
        $this->idOrderInvoice = $idOrderInvoice;

        return $this;
    }

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
     * Set idOrderPayment
     *
     * @param integer $idOrderPayment
     * @return TrOrderInvoicePayment
     */
    public function setIdOrderPayment($idOrderPayment)
    {
        $this->idOrderPayment = $idOrderPayment;

        return $this;
    }

    /**
     * Get idOrderPayment
     *
     * @return integer 
     */
    public function getIdOrderPayment()
    {
        return $this->idOrderPayment;
    }

    /**
     * Set idOrder
     *
     * @param integer $idOrder
     * @return TrOrderInvoicePayment
     */
    public function setIdOrder($idOrder)
    {
        $this->idOrder = $idOrder;

        return $this;
    }

    /**
     * Get idOrder
     *
     * @return integer 
     */
    public function getIdOrder()
    {
        return $this->idOrder;
    }
}
