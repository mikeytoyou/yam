<?php

namespace alex\yamBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TrWarehouse
 */
class TrWarehouse
{
    /**
     * @var integer
     */
    private $idWarehouse;

    /**
     * @var integer
     */
    private $idCurrency;

    /**
     * @var integer
     */
    private $idAddress;

    /**
     * @var integer
     */
    private $idEmployee;

    /**
     * @var string
     */
    private $reference;

    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $managementType;

    /**
     * @var boolean
     */
    private $deleted;


    /**
     * Get idWarehouse
     *
     * @return integer 
     */
    public function getIdWarehouse()
    {
        return $this->idWarehouse;
    }

    /**
     * Set idCurrency
     *
     * @param integer $idCurrency
     * @return TrWarehouse
     */
    public function setIdCurrency($idCurrency)
    {
        $this->idCurrency = $idCurrency;

        return $this;
    }

    /**
     * Get idCurrency
     *
     * @return integer 
     */
    public function getIdCurrency()
    {
        return $this->idCurrency;
    }

    /**
     * Set idAddress
     *
     * @param integer $idAddress
     * @return TrWarehouse
     */
    public function setIdAddress($idAddress)
    {
        $this->idAddress = $idAddress;

        return $this;
    }

    /**
     * Get idAddress
     *
     * @return integer 
     */
    public function getIdAddress()
    {
        return $this->idAddress;
    }

    /**
     * Set idEmployee
     *
     * @param integer $idEmployee
     * @return TrWarehouse
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
     * Set reference
     *
     * @param string $reference
     * @return TrWarehouse
     */
    public function setReference($reference)
    {
        $this->reference = $reference;

        return $this;
    }

    /**
     * Get reference
     *
     * @return string 
     */
    public function getReference()
    {
        return $this->reference;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return TrWarehouse
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set managementType
     *
     * @param string $managementType
     * @return TrWarehouse
     */
    public function setManagementType($managementType)
    {
        $this->managementType = $managementType;

        return $this;
    }

    /**
     * Get managementType
     *
     * @return string 
     */
    public function getManagementType()
    {
        return $this->managementType;
    }

    /**
     * Set deleted
     *
     * @param boolean $deleted
     * @return TrWarehouse
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
