<?php

namespace alex\yamBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TrOrderState
 */
class TrOrderState
{
    /**
     * @var integer
     */
    private $idOrderState;

    /**
     * @var boolean
     */
    private $invoice;

    /**
     * @var boolean
     */
    private $sendEmail;

    /**
     * @var string
     */
    private $moduleName;

    /**
     * @var string
     */
    private $color;

    /**
     * @var boolean
     */
    private $unremovable;

    /**
     * @var boolean
     */
    private $hidden;

    /**
     * @var boolean
     */
    private $logable;

    /**
     * @var boolean
     */
    private $delivery;

    /**
     * @var boolean
     */
    private $shipped;

    /**
     * @var boolean
     */
    private $paid;

    /**
     * @var boolean
     */
    private $deleted;


    /**
     * Get idOrderState
     *
     * @return integer 
     */
    public function getIdOrderState()
    {
        return $this->idOrderState;
    }

    /**
     * Set invoice
     *
     * @param boolean $invoice
     * @return TrOrderState
     */
    public function setInvoice($invoice)
    {
        $this->invoice = $invoice;

        return $this;
    }

    /**
     * Get invoice
     *
     * @return boolean 
     */
    public function getInvoice()
    {
        return $this->invoice;
    }

    /**
     * Set sendEmail
     *
     * @param boolean $sendEmail
     * @return TrOrderState
     */
    public function setSendEmail($sendEmail)
    {
        $this->sendEmail = $sendEmail;

        return $this;
    }

    /**
     * Get sendEmail
     *
     * @return boolean 
     */
    public function getSendEmail()
    {
        return $this->sendEmail;
    }

    /**
     * Set moduleName
     *
     * @param string $moduleName
     * @return TrOrderState
     */
    public function setModuleName($moduleName)
    {
        $this->moduleName = $moduleName;

        return $this;
    }

    /**
     * Get moduleName
     *
     * @return string 
     */
    public function getModuleName()
    {
        return $this->moduleName;
    }

    /**
     * Set color
     *
     * @param string $color
     * @return TrOrderState
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

    /**
     * Set unremovable
     *
     * @param boolean $unremovable
     * @return TrOrderState
     */
    public function setUnremovable($unremovable)
    {
        $this->unremovable = $unremovable;

        return $this;
    }

    /**
     * Get unremovable
     *
     * @return boolean 
     */
    public function getUnremovable()
    {
        return $this->unremovable;
    }

    /**
     * Set hidden
     *
     * @param boolean $hidden
     * @return TrOrderState
     */
    public function setHidden($hidden)
    {
        $this->hidden = $hidden;

        return $this;
    }

    /**
     * Get hidden
     *
     * @return boolean 
     */
    public function getHidden()
    {
        return $this->hidden;
    }

    /**
     * Set logable
     *
     * @param boolean $logable
     * @return TrOrderState
     */
    public function setLogable($logable)
    {
        $this->logable = $logable;

        return $this;
    }

    /**
     * Get logable
     *
     * @return boolean 
     */
    public function getLogable()
    {
        return $this->logable;
    }

    /**
     * Set delivery
     *
     * @param boolean $delivery
     * @return TrOrderState
     */
    public function setDelivery($delivery)
    {
        $this->delivery = $delivery;

        return $this;
    }

    /**
     * Get delivery
     *
     * @return boolean 
     */
    public function getDelivery()
    {
        return $this->delivery;
    }

    /**
     * Set shipped
     *
     * @param boolean $shipped
     * @return TrOrderState
     */
    public function setShipped($shipped)
    {
        $this->shipped = $shipped;

        return $this;
    }

    /**
     * Get shipped
     *
     * @return boolean 
     */
    public function getShipped()
    {
        return $this->shipped;
    }

    /**
     * Set paid
     *
     * @param boolean $paid
     * @return TrOrderState
     */
    public function setPaid($paid)
    {
        $this->paid = $paid;

        return $this;
    }

    /**
     * Get paid
     *
     * @return boolean 
     */
    public function getPaid()
    {
        return $this->paid;
    }

    /**
     * Set deleted
     *
     * @param boolean $deleted
     * @return TrOrderState
     */
    public function setDeleted($deleted)
    {
        $this->deleted = $deleted;

        return $this;
    }

    /**
     * Get deleted
     *
     * @return boolean 
     */
    public function getDeleted()
    {
        return $this->deleted;
    }
}
