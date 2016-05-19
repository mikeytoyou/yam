<?php

namespace alex\yamBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TrProductAttributeCombination
 */
class TrProductAttributeCombination
{
    /**
     * @var integer
     */
    private $idAttribute;

    /**
     * @var integer
     */
    private $idProductAttribute;


    /**
     * Set idAttribute
     *
     * @param integer $idAttribute
     * @return TrProductAttributeCombination
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
     * Set idProductAttribute
     *
     * @param integer $idProductAttribute
     * @return TrProductAttributeCombination
     */
    public function setIdProductAttribute($idProductAttribute)
    {
        $this->idProductAttribute = $idProductAttribute;

        return $this;
    }

    /**
     * Get idProductAttribute
     *
     * @return integer 
     */
    public function getIdProductAttribute()
    {
        return $this->idProductAttribute;
    }
}
