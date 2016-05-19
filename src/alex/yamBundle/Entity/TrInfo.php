<?php

namespace alex\yamBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TrInfo
 */
class TrInfo
{
    /**
     * @var integer
     */
    private $idInfo;

    /**
     * @var integer
     */
    private $idShop;


    /**
     * Get idInfo
     *
     * @return integer 
     */
    public function getIdInfo()
    {
        return $this->idInfo;
    }

    /**
     * Set idShop
     *
     * @param integer $idShop
     * @return TrInfo
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
