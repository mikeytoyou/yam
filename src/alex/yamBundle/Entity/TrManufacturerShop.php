<?php

namespace alex\yamBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TrManufacturerShop
 */
class TrManufacturerShop
{
    /**
     * @var integer
     */
    private $idManufacturer;

    /**
     * @var integer
     */
    private $idShop;


    /**
     * Set idManufacturer
     *
     * @param integer $idManufacturer
     * @return TrManufacturerShop
     */
    public function setIdManufacturer($idManufacturer)
    {
        $this->idManufacturer = $idManufacturer;

        return $this;
    }

    /**
     * Get idManufacturer
     *
     * @return integer 
     */
    public function getIdManufacturer()
    {
        return $this->idManufacturer;
    }

    /**
     * Set idShop
     *
     * @param integer $idShop
     * @return TrManufacturerShop
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
