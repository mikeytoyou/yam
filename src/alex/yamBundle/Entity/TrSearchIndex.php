<?php

namespace alex\yamBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TrSearchIndex
 */
class TrSearchIndex
{
    /**
     * @var integer
     */
    private $idWord;

    /**
     * @var integer
     */
    private $idProduct;

    /**
     * @var integer
     */
    private $weight;


    /**
     * Set idWord
     *
     * @param integer $idWord
     * @return TrSearchIndex
     */
    public function setIdWord($idWord)
    {
        $this->idWord = $idWord;

        return $this;
    }

    /**
     * Get idWord
     *
     * @return integer 
     */
    public function getIdWord()
    {
        return $this->idWord;
    }

    /**
     * Set idProduct
     *
     * @param integer $idProduct
     * @return TrSearchIndex
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
     * Set weight
     *
     * @param integer $weight
     * @return TrSearchIndex
     */
    public function setWeight($weight)
    {
        $this->weight = $weight;

        return $this;
    }

    /**
     * Get weight
     *
     * @return integer 
     */
    public function getWeight()
    {
        return $this->weight;
    }
}
