<?php

namespace alex\yamBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TrWarehouseShop
 */
class TrWarehouseShop
{
    /**
     * @var integer
     */
    private $idWarehouse;

    /**
     * @var integer
     */
    private $idShop;


    /**
     * Set idWarehouse
     *
     * @param integer $idWarehouse
     * @return TrWarehouseShop
     */
    public function setIdWarehouse($idWarehouse)
    {
        $this->idWarehouse = $idWarehouse;

        return $this;
    }

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
     * Set idShop
     *
     * @param integer $idShop
     * @return TrWarehouseShop
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
