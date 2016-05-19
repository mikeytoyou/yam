<?php

namespace alex\yamBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TrStockMvt
 */
class TrStockMvt
{
    /**
     * @var integer
     */
    private $idStockMvt;

    /**
     * @var integer
     */
    private $idStock;

    /**
     * @var integer
     */
    private $idOrder;

    /**
     * @var integer
     */
    private $idSupplyOrder;

    /**
     * @var integer
     */
    private $idStockMvtReason;

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
    private $physicalQuantity;

    /**
     * @var \DateTime
     */
    private $dateAdd;

    /**
     * @var boolean
     */
    private $sign;

    /**
     * @var string
     */
    private $priceTe;

    /**
     * @var string
     */
    private $lastWa;

    /**
     * @var string
     */
    private $currentWa;

    /**
     * @var integer
     */
    private $referer;


    /**
     * Get idStockMvt
     *
     * @return integer 
     */
    public function getIdStockMvt()
    {
        return $this->idStockMvt;
    }

    /**
     * Set idStock
     *
     * @param integer $idStock
     * @return TrStockMvt
     */
    public function setIdStock($idStock)
    {
        $this->idStock = $idStock;

        return $this;
    }

    /**
     * Get idStock
     *
     * @return integer 
     */
    public function getIdStock()
    {
        return $this->idStock;
    }

    /**
     * Set idOrder
     *
     * @param integer $idOrder
     * @return TrStockMvt
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
     * Set idSupplyOrder
     *
     * @param integer $idSupplyOrder
     * @return TrStockMvt
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
     * Set idStockMvtReason
     *
     * @param integer $idStockMvtReason
     * @return TrStockMvt
     */
    public function setIdStockMvtReason($idStockMvtReason)
    {
        $this->idStockMvtReason = $idStockMvtReason;

        return $this;
    }

    /**
     * Get idStockMvtReason
     *
     * @return integer 
     */
    public function getIdStockMvtReason()
    {
        return $this->idStockMvtReason;
    }

    /**
     * Set idEmployee
     *
     * @param integer $idEmployee
     * @return TrStockMvt
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
     * @return TrStockMvt
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
     * @return TrStockMvt
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
     * Set physicalQuantity
     *
     * @param integer $physicalQuantity
     * @return TrStockMvt
     */
    public function setPhysicalQuantity($physicalQuantity)
    {
        $this->physicalQuantity = $physicalQuantity;

        return $this;
    }

    /**
     * Get physicalQuantity
     *
     * @return integer 
     */
    public function getPhysicalQuantity()
    {
        return $this->physicalQuantity;
    }

    /**
     * Set dateAdd
     *
     * @param \DateTime $dateAdd
     * @return TrStockMvt
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

    /**
     * Set sign
     *
     * @param boolean $sign
     * @return TrStockMvt
     */
    public function setSign($sign)
    {
        $this->sign = $sign;

        return $this;
    }

    /**
     * Get sign
     *
     * @return boolean 
     */
    public function getSign()
    {
        return $this->sign;
    }

    /**
     * Set priceTe
     *
     * @param string $priceTe
     * @return TrStockMvt
     */
    public function setPriceTe($priceTe)
    {
        $this->priceTe = $priceTe;

        return $this;
    }

    /**
     * Get priceTe
     *
     * @return string 
     */
    public function getPriceTe()
    {
        return $this->priceTe;
    }

    /**
     * Set lastWa
     *
     * @param string $lastWa
     * @return TrStockMvt
     */
    public function setLastWa($lastWa)
    {
        $this->lastWa = $lastWa;

        return $this;
    }

    /**
     * Get lastWa
     *
     * @return string 
     */
    public function getLastWa()
    {
        return $this->lastWa;
    }

    /**
     * Set currentWa
     *
     * @param string $currentWa
     * @return TrStockMvt
     */
    public function setCurrentWa($currentWa)
    {
        $this->currentWa = $currentWa;

        return $this;
    }

    /**
     * Get currentWa
     *
     * @return string 
     */
    public function getCurrentWa()
    {
        return $this->currentWa;
    }

    /**
     * Set referer
     *
     * @param integer $referer
     * @return TrStockMvt
     */
    public function setReferer($referer)
    {
        $this->referer = $referer;

        return $this;
    }

    /**
     * Get referer
     *
     * @return integer 
     */
    public function getReferer()
    {
        return $this->referer;
    }
}
