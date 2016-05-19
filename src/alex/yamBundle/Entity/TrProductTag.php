<?php

namespace alex\yamBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TrProductTag
 */
class TrProductTag
{
    /**
     * @var integer
     */
    private $idProduct;

    /**
     * @var integer
     */
    private $idTag;


    /**
     * Set idProduct
     *
     * @param integer $idProduct
     * @return TrProductTag
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
     * Set idTag
     *
     * @param integer $idTag
     * @return TrProductTag
     */
    public function setIdTag($idTag)
    {
        $this->idTag = $idTag;

        return $this;
    }

    /**
     * Get idTag
     *
     * @return integer 
     */
    public function getIdTag()
    {
        return $this->idTag;
    }
}
