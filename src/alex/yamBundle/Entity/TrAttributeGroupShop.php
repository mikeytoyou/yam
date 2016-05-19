<?php

namespace alex\yamBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TrAttributeGroupShop
 */
class TrAttributeGroupShop
{
    /**
     * @var integer
     */
    private $idAttributeGroup;

    /**
     * @var integer
     */
    private $idShop;


    /**
     * Set idAttributeGroup
     *
     * @param integer $idAttributeGroup
     * @return TrAttributeGroupShop
     */
    public function setIdAttributeGroup($idAttributeGroup)
    {
        $this->idAttributeGroup = $idAttributeGroup;

        return $this;
    }

    /**
     * Get idAttributeGroup
     *
     * @return integer 
     */
    public function getIdAttributeGroup()
    {
        return $this->idAttributeGroup;
    }

    /**
     * Set idShop
     *
     * @param integer $idShop
     * @return TrAttributeGroupShop
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
