<?php

namespace alex\yamBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TrSupplyOrderHistory
 */
class TrSupplyOrderHistory
{
    /**
     * @var integer
     */
    private $idSupplyOrderHistory;

    /**
     * @var integer
     */
    private $idSupplyOrder;

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
    private $idState;

    /**
     * @var \DateTime
     */
    private $dateAdd;


    /**
     * Get idSupplyOrderHistory
     *
     * @return integer 
     */
    public function getIdSupplyOrderHistory()
    {
        return $this->idSupplyOrderHistory;
    }

    /**
     * Set idSupplyOrder
     *
     * @param integer $idSupplyOrder
     * @return TrSupplyOrderHistory
     */
    public function setIdSupplyOrder($idSupplyOrder)
    {
        $this->idSupplyOrder = $idSupplyOrder;

        return $this;
    }

    /**
     * Get idSupplyOrder
     *
     * @return integer 
     */
    public function getIdSupplyOrder()
    {
        return $this->idSupplyOrder;
    }

    /**
     * Set idEmployee
     *
     * @param integer $idEmployee
     * @return TrSupplyOrderHistory
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
     * @return TrSupplyOrderHistory
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
     * @return TrSupplyOrderHistory
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
     * Set idState
     *
     * @param integer $idState
     * @return TrSupplyOrderHistory
     */
    public function setIdState($idState)
    {
        $this->idState = $idState;

        return $this;
    }

    /**
     * Get idState
     *
     * @return integer 
     */
    public function getIdState()
    {
        return $this->idState;
    }

    /**
     * Set dateAdd
     *
     * @param \DateTime $dateAdd
     * @return TrSupplyOrderHistory
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
