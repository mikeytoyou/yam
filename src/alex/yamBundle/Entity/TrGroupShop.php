<?php

namespace alex\yamBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TrGroupShop
 */
class TrGroupShop
{
    /**
     * @var integer
     */
    private $idGroup;

    /**
     * @var integer
     */
    private $idShop;


    /**
     * Set idGroup
     *
     * @param integer $idGroup
     * @return TrGroupShop
     */
    public function setIdGroup($idGroup)
    {
        $this->idGroup = $idGroup;

        return $this;
    }

    /**
     * Get idGroup
     *
     * @return integer 
     */
    public function getIdGroup()
    {
        return $this->idGroup;
    }

    /**
     * Set idShop
     *
     * @param integer $idShop
     * @return TrGroupShop
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
