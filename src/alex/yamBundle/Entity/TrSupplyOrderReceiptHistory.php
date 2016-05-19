<?php

namespace alex\yamBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TrSupplyOrderReceiptHistory
 */
class TrSupplyOrderReceiptHistory
{
    /**
     * @var integer
     */
    private $idSupplyOrderReceiptHistory;

    /**
     * @var integer
     */
    private $idSupplyOrderDetail;

    /**
     * @var integer
     */
    private $idEmployee;

    /**
     * @var string
     */
    private $employeeLastname;

    /**
     * @var string
     */
    private $employeeFirstname;

    /**
     * @var integer
     */
    private $idSupplyOrderState;

    /**
     * @var integer
     */
    private $quantity;

    /**
     * @var \DateTime
     */
    private $dateAdd;


    /**
     * Get idSupplyOrderReceiptHistory
     *
     * @return integer 
     */
    public function getIdSupplyOrderReceiptHistory()
    {
        return $this->idSupplyOrderReceiptHistory;
    }

    /**
     * Set idSupplyOrderDetail
     *
     * @param integer $idSupplyOrderDetail
     * @return TrSupplyOrderReceiptHistory
     */
    public function setIdSupplyOrderDetail($idSupplyOrderDetail)
    {
        $this->idSupplyOrderDetail = $idSupplyOrderDetail;

        return $this;
    }

    /**
     * Get idSupplyOrderDetail
     *
     * @return integer 
     */
    public function getIdSupplyOrderDetail()
    {
        return $this->idSupplyOrderDetail;
    }

    /**
     * Set idEmployee
     *
     * @param integer $idEmployee
     * @return TrSupplyOrderReceiptHistory
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
     * Set employeeLastname
     *
     * @param string $employeeLastname
     * @return TrSupplyOrderReceiptHistory
     */
    public function setEmployeeLastname($employeeLastname)
    {
        $this->employeeLastname = $employeeLastname;

        return $this;
    }

    /**
     * Get employeeLastname
     *
     * @return string 
     */
    public function getEmployeeLastname()
    {
        return $this->employeeLastname;
    }

    /**
     * Set employeeFirstname
     *
     * @param string $employeeFirstname
     * @return TrSupplyOrderReceiptHistory
     */
    public function setEmployeeFirstname($employeeFirstname)
    {
        $this->employeeFirstname = $employeeFirstname;

        return $this;
    }

    /**
     * Get employeeFirstname
     *
     * @return string 
     */
    public function getEmployeeFirstname()
    {
        return $this->employeeFirstname;
    }

    /**
     * Set idSupplyOrderState
     *
     * @param integer $idSupplyOrderState
     * @return TrSupplyOrderReceiptHistory
     */
    public function setIdSupplyOrderState($idSupplyOrderState)
    {
        $this->idSupplyOrderState = $idSupplyOrderState;

        return $this;
    }

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
     * Set quantity
     *
     * @param integer $quantity
     * @return TrSupplyOrderReceiptHistory
     */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;

        return $this;
    }

    /**
     * Get quantity
     *
     * @return integer 
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * Set dateAdd
     *
     * @param \DateTime $dateAdd
     * @return TrSupplyOrderReceiptHistory
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
