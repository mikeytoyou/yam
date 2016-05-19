<?php

namespace alex\yamBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TrAttributeShop
 */
class TrAttributeShop
{
    /**
     * @var integer
     */
    private $idAttribute;

    /**
     * @var integer
     */
    private $idShop;


    /**
     * Set idAttribute
     *
     * @param integer $idAttribute
     * @return TrAttributeShop
     */
    public function setIdAttribute($idAttribute)
    {
        $this->idAttribute = $idAttribute;

        return $this;
    }

    /**
     * Get idAttribute
     *
     * @return integer 
     */
    public function getIdAttribute()
    {
        return $this->idAttribute;
    }

    /**
     * Set idShop
     *
     * @param integer $idShop
     * @return TrAttributeShop
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
