<?php

namespace alex\yamBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TrWarehouseCarrier
 */
class TrWarehouseCarrier
{
    /**
     * @var integer
     */
    private $idWarehouse;

    /**
     * @var integer
     */
    private $idCarrier;


    /**
     * Set idWarehouse
     *
     * @param integer $idWarehouse
     * @return TrWarehouseCarrier
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
     * Set idCarrier
     *
     * @param integer $idCarrier
     * @return TrWarehouseCarrier
     */
    public function setIdCarrier($idCarrier)
    {
        $this->idCarrier = $idCarrier;

        return $this;
    }

    /**
     * Get idCarrier
     *
     * @return integer 
     */
    public function getIdCarrier()
    {
        return $this->idCarrier;
    }
}
