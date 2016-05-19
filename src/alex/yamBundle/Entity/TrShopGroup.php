<?php

namespace alex\yamBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TrShopGroup
 */
class TrShopGroup
{
    /**
     * @var integer
     */
    private $idShopGroup;

    /**
     * @var string
     */
    private $name;

    /**
     * @var boolean
     */
    private $shareCustomer;

    /**
     * @var boolean
     */
    private $shareOrder;

    /**
     * @var boolean
     */
    private $shareStock;

    /**
     * @var boolean
     */
    private $active;

    /**
     * @var boolean
     */
    private $deleted;


    /**
     * Get idShopGroup
     *
     * @return integer 
     */
    public function getIdShopGroup()
    {
        return $this->idShopGroup;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return TrShopGroup
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set shareCustomer
     *
     * @param boolean $shareCustomer
     * @return TrShopGroup
     */
    public function setShareCustomer($shareCustomer)
    {
        $this->shareCustomer = $shareCustomer;

        return $this;
    }

    /**
     * Get shareCustomer
     *
     * @return boolean 
     */
    public function getShareCustomer()
    {
        return $this->shareCustomer;
    }

    /**
     * Set shareOrder
     *
     * @param boolean $shareOrder
     * @return TrShopGroup
     */
    public function setShareOrder($shareOrder)
    {
        $this->shareOrder = $shareOrder;

        return $this;
    }

    /**
     * Get shareOrder
     *
     * @return boolean 
     */
    public function getShareOrder()
    {
        return $this->shareOrder;
    }

    /**
     * Set shareStock
     *
     * @param boolean $shareStock
     * @return TrShopGroup
     */
    public function setShareStock($shareStock)
    {
        $this->shareStock = $shareStock;

        return $this;
    }

    /**
     * Get shareStock
     *
     * @return boolean 
     */
    public function getShareStock()
    {
        return $this->shareStock;
    }

    /**
     * Set active
     *
     * @param boolean $active
     * @return TrShopGroup
     */
    public function setActive($active)
    {
        $this->active = $active;

        return $this;
    }

    /**
     * Get active
     *
     * @return boolean 
     */
    public function getActive()
    {
        return $this->active;
    }

    /**
     * Set deleted
     *
     * @param boolean $deleted
     * @return TrShopGroup
     */
    public function setDeleted($deleted)
    {
        $this->deleted = $deleted;

        return $this;
    }

    /**
     * Get deleted
     *
     * @return boolean 
     */
    public function getDeleted()
    {
        return $this->deleted;
    }
}
