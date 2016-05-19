<?php

namespace alex\yamBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TrProductGroupReductionCache
 */
class TrProductGroupReductionCache
{
    /**
     * @var integer
     */
    private $idProduct;

    /**
     * @var integer
     */
    private $idGroup;

    /**
     * @var string
     */
    private $reduction;


    /**
     * Set idProduct
     *
     * @param integer $idProduct
     * @return TrProductGroupReductionCache
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
     * Set idGroup
     *
     * @param integer $idGroup
     * @return TrProductGroupReductionCache
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
     * Set reduction
     *
     * @param string $reduction
     * @return TrProductGroupReductionCache
     */
    public function setReduction($reduction)
    {
        $this->reduction = $reduction;

        return $this;
    }

    /**
     * Get reduction
     *
     * @return string 
     */
    public function getReduction()
    {
        return $this->reduction;
    }
}
