<?php

namespace alex\yamBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TrSupplierShop
 */
class TrSupplierShop
{
    /**
     * @var integer
     */
    private $idSupplier;

    /**
     * @var integer
     */
    private $idShop;


    /**
     * Set idSupplier
     *
     * @param integer $idSupplier
     * @return TrSupplierShop
     */
    public function setIdSupplier($idSupplier)
    {
        $this->idSupplier = $idSupplier;

        return $this;
    }

    /**
     * Get idSupplier
     *
     * @return integer 
     */
    public function getIdSupplier()
    {
        return $this->idSupplier;
    }

    /**
     * Set idShop
     *
     * @param integer $idShop
     * @return TrSupplierShop
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
