<?php

namespace alex\yamBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TrSupplyOrderState
 */
class TrSupplyOrderState
{
    /**
     * @var integer
     */
    private $idSupplyOrderState;

    /**
     * @var boolean
     */
    private $deliveryNote;

    /**
     * @var boolean
     */
    private $editable;

    /**
     * @var boolean
     */
    private $receiptState;

    /**
     * @var boolean
     */
    private $pendingReceipt;

    /**
     * @var boolean
     */
    private $enclosed;

    /**
     * @var string
     */
    private $color;


    /**
     * Get idSupplyOrderState
     *
     * @return integer 
     */
    public function getIdSupplyOrderState()
    {
        return $this->idSupplyOrderState;
    }

    /**
     * Set deliveryNote
     *
     * @param boolean $deliveryNote
     * @return TrSupplyOrderState
     */
    public function setDeliveryNote($deliveryNote)
    {
        $this->deliveryNote = $deliveryNote;

        return $this;
    }

    /**
     * Get deliveryNote
     *
     * @return boolean 
     */
    public function getDeliveryNote()
    {
        return $this->deliveryNote;
    }

    /**
     * Set editable
     *
     * @param boolean $editable
     * @return TrSupplyOrderState
     */
    public function setEditable($editable)
    {
        $this->editable = $editable;

        return $this;
    }

    /**
     * Get editable
     *
     * @return boolean 
     */
    public function getEditable()
    {
        return $this->editable;
    }

    /**
     * Set receiptState
     *
     * @param boolean $receiptState
     * @return TrSupplyOrderState
     */
    public function setReceiptState($receiptState)
    {
        $this->receiptState = $receiptState;

        return $this;
    }

    /**
     * Get receiptState
     *
     * @return boolean 
     */
    public function getReceiptState()
    {
        return $this->receiptState;
    }

    /**
     * Set pendingReceipt
     *
     * @param boolean $pendingReceipt
     * @return TrSupplyOrderState
     */
    public function setPendingReceipt($pendingReceipt)
    {
        $this->pendingReceipt = $pendingReceipt;

        return $this;
    }

    /**
     * Get pendingReceipt
     *
     * @return boolean 
     */
    public function getPendingReceipt()
    {
        return $this->pendingReceipt;
    }

    /**
     * Set enclosed
     *
     * @param boolean $enclosed
     * @return TrSupplyOrderState
     */
    public function setEnclosed($enclosed)
    {
        $this->enclosed = $enclosed;

        return $this;
    }

    /**
     * Get enclosed
     *
     * @return boolean 
     */
    public function getEnclosed()
    {
        return $this->enclosed;
    }

    /**
     * Set color
     *
     * @param string $color
     * @return TrSupplyOrderState
     */
    public function setColor($color)
    {
        $this->color = $color;

        return $this;
    }

    /**
     * Get color
     *
     * @return string 
     */
    public function getColor()
    {
        return $this->color;
    }
}
