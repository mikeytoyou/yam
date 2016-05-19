<?php

namespace alex\yamBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TrMessage
 */
class TrMessage
{
    /**
     * @var integer
     */
    private $idMessage;

    /**
     * @var integer
     */
    private $idCart;

    /**
     * @var integer
     */
    private $idCustomer;

    /**
     * @var integer
     */
    private $idEmployee;

    /**
     * @var integer
     */
    private $idOrder;

    /**
     * @var string
     */
    private $message;

    /**
     * @var boolean
     */
    private $private;

    /**
     * @var \DateTime
     */
    private $dateAdd;


    /**
     * Get idMessage
     *
     * @return integer 
     */
    public function getIdMessage()
    {
        return $this->idMessage;
    }

    /**
     * Set idCart
     *
     * @param integer $idCart
     * @return TrMessage
     */
    public function setIdCart($idCart)
    {
        $this->idCart = $idCart;

        return $this;
    }

    /**
     * Get idCart
     *
     * @return integer 
     */
    public function getIdCart()
    {
        return $this->idCart;
    }

    /**
     * Set idCustomer
     *
     * @param integer $idCustomer
     * @return TrMessage
     */
    public function setIdCustomer($idCustomer)
    {
        $this->idCustomer = $idCustomer;

        return $this;
    }

    /**
     * Get idCustomer
     *
     * @return integer 
     */
    public function getIdCustomer()
    {
        return $this->idCustomer;
    }

    /**
     * Set idEmployee
     *
     * @param integer $idEmployee
     * @return TrMessage
     */
    public function setIdEmployee($idEmployee)
    {
        $this->idEmployee = $idEmployee;

        return $this;
    }

    /**
     * Get idEmployee
     *
     * @return integer 
     */
    public function getIdEmployee()
    {
        return $this->idEmployee;
    }

    /**
     * Set idOrder
     *
     * @param integer $idOrder
     * @return TrMessage
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

    /**
     * Set message
     *
     * @param string $message
     * @return TrMessage
     */
    public function setMessage($message)
    {
        $this->message = $message;

        return $this;
    }

    /**
     * Get message
     *
     * @return string 
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * Set private
     *
     * @param boolean $private
     * @return TrMessage
     */
    public function setPrivate($private)
    {
        $this->private = $private;

        return $this;
    }

    /**
     * Get private
     *
     * @return boolean 
     */
    public function getPrivate()
    {
        return $this->private;
    }

    /**
     * Set dateAdd
     *
     * @param \DateTime $dateAdd
     * @return TrMessage
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
}
