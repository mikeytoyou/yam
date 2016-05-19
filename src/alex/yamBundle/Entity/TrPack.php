<?php

namespace alex\yamBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TrPack
 */
class TrPack
{
    /**
     * @var integer
     */
    private $idProductPack;

    /**
     * @var integer
     */
    private $idProductItem;

    /**
     * @var integer
     */
    private $quantity;


    /**
     * Set idProductPack
     *
     * @param integer $idProductPack
     * @return TrPack
     */
    public function setIdProductPack($idProductPack)
    {
        $this->idProductPack = $idProductPack;

        return $this;
    }

    /**
     * Get idProductPack
     *
     * @return integer 
     */
    public function getIdProductPack()
    {
        return $this->idProductPack;
    }

    /**
     * Set idProductItem
     *
     * @param integer $idProductItem
     * @return TrPack
     */
    public function setIdProductItem($idProductItem)
    {
        $this->idProductItem = $idProductItem;

        return $this;
    }

    /**
     * Get idProductItem
     *
     * @return integer 
     */
    public function getIdProductItem()
    {
        return $this->idProductItem;
    }

    /**
     * Set quantity
     *
     * @param integer $quantity
     * @return TrPack
     */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;

        return $this;
    }

    /**
     * Get quantity
     *
     * @return integer 
     */
    public function getQuantity()
    {
        return $this->quantity;
    }
}
