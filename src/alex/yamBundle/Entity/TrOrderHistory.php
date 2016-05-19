<?php

namespace alex\yamBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TrOrderHistory
 */
class TrOrderHistory
{
    /**
     * @var integer
     */
    private $idOrderHistory;

    /**
     * @var integer
     */
    private $idEmployee;

    /**
     * @var integer
     */
    private $idOrder;

    /**
     * @var integer
     */
    private $idOrderState;

    /**
     * @var \DateTime
     */
    private $dateAdd;


    /**
     * Get idOrderHistory
     *
     * @return integer 
     */
    public function getIdOrderHistory()
    {
        return $this->idOrderHistory;
    }

    /**
     * Set idEmployee
     *
     * @param integer $idEmployee
     * @return TrOrderHistory
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
     * @return TrOrderHistory
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
     * Set idOrderState
     *
     * @param integer $idOrderState
     * @return TrOrderHistory
     */
    public function setIdOrderState($idOrderState)
    {
        $this->idOrderState = $idOrderState;

        return $this;
    }

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
     * Set dateAdd
     *
     * @param \DateTime $dateAdd
     * @return TrOrderHistory
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
