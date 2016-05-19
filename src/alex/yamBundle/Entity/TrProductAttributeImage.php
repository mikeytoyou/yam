<?php

namespace alex\yamBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TrProductAttributeImage
 */
class TrProductAttributeImage
{
    /**
     * @var integer
     */
    private $idProductAttribute;

    /**
     * @var integer
     */
    private $idImage;


    /**
     * Set idProductAttribute
     *
     * @param integer $idProductAttribute
     * @return TrProductAttributeImage
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

    /**
     * Set idImage
     *
     * @param integer $idImage
     * @return TrProductAttributeImage
     */
    public function setIdImage($idImage)
    {
        $this->idImage = $idImage;

        return $this;
    }

    /**
     * Get idImage
     *
     * @return integer 
     */
    public function getIdImage()
    {
        return $this->idImage;
    }
}
