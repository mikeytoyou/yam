<?php

namespace alex\yamBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TrStoreShop
 */
class TrStoreShop
{
    /**
     * @var integer
     */
    private $idStore;

    /**
     * @var integer
     */
    private $idShop;


    /**
     * Set idStore
     *
     * @param integer $idStore
     * @return TrStoreShop
     */
    public function setIdStore($idStore)
    {
        $this->idStore = $idStore;

        return $this;
    }

    /**
     * Get idStore
     *
     * @return integer 
     */
    public function getIdStore()
    {
        return $this->idStore;
    }

    /**
     * Set idShop
     *
     * @param integer $idShop
     * @return TrStoreShop
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
