<?php

namespace alex\yamBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TrSpecificPricePriority
 */
class TrSpecificPricePriority
{
    /**
     * @var integer
     */
    private $idSpecificPricePriority;

    /**
     * @var integer
     */
    private $idProduct;

    /**
     * @var string
     */
    private $priority;


    /**
     * Set idSpecificPricePriority
     *
     * @param integer $idSpecificPricePriority
     * @return TrSpecificPricePriority
     */
    public function setIdSpecificPricePriority($idSpecificPricePriority)
    {
        $this->idSpecificPricePriority = $idSpecificPricePriority;

        return $this;
    }

    /**
     * Get idSpecificPricePriority
     *
     * @return integer 
     */
    public function getIdSpecificPricePriority()
    {
        return $this->idSpecificPricePriority;
    }

    /**
     * Set idProduct
     *
     * @param integer $idProduct
     * @return TrSpecificPricePriority
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
     * Set priority
     *
     * @param string $priority
     * @return TrSpecificPricePriority
     */
    public function setPriority($priority)
    {
        $this->priority = $priority;

        return $this;
    }

    /**
     * Get priority
     *
     * @return string 
     */
    public function getPriority()
    {
        return $this->priority;
    }
}
