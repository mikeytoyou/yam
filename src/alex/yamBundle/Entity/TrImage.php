<?php

namespace alex\yamBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TrImage
 */
class TrImage
{
    /**
     * @var integer
     */
    private $idImage;

    /**
     * @var integer
     */
    private $idProduct;

    /**
     * @var integer
     */
    private $position;

    /**
     * @var boolean
     */
    private $cover;


    /**
     * Get idImage
     *
     * @return integer 
     */
    public function getIdImage()
    {
        return $this->idImage;
    }

    /**
     * Set idProduct
     *
     * @param integer $idProduct
     * @return TrImage
     */
    public function setIdProduct($idProduct)
    {
        $this->idProduct = $idProduct;

        return $this;
    }

    /**
     * Get idProduct
     *
     * @return integer 
     */
    public function getIdProduct()
    {
        return $this->idProduct;
    }

    /**
     * Set position
     *
     * @param integer $position
     * @return TrImage
     */
    public function setPosition($position)
    {
        $this->position = $position;

        return $this;
    }

    /**
     * Get position
     *
     * @return integer 
     */
    public function getPosition()
    {
        return $this->position;
    }

    /**
     * Set cover
     *
     * @param boolean $cover
     * @return TrImage
     */
    public function setCover($cover)
    {
        $this->cover = $cover;

        return $this;
    }

    /**
     * Get cover
     *
     * @return boolean 
     */
    public function getCover()
    {
        return $this->cover;
    }
}
