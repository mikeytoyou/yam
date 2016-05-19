<?php

namespace alex\yamBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TrEmployeeShop
 */
class TrEmployeeShop
{
    /**
     * @var integer
     */
    private $idEmployee;

    /**
     * @var integer
     */
    private $idShop;


    /**
     * Set idEmployee
     *
     * @param integer $idEmployee
     * @return TrEmployeeShop
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
     * Set idShop
     *
     * @param integer $idShop
     * @return TrEmployeeShop
     */
    public function setIdShop($idShop)
    {
        $this->idShop = $idShop;

        return $this;
    }

    /**
     * Get idShop
     *
     * @return integer 
     */
    public function getIdShop()
    {
        return $this->idShop;
    }
}
