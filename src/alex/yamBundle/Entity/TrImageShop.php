<?php

namespace alex\yamBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TrImageShop
 */
class TrImageShop
{
    /**
     * @var integer
     */
    private $idImage;

    /**
     * @var integer
     */
    private $idShop;

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
     * Set idShop
     *
     * @param integer $idShop
     * @return TrImageShop
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

    /**
     * Set cover
     *
     * @param boolean $cover
     * @return TrImageShop
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
