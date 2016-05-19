<?php

namespace alex\yamBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TrCustomizationField
 */
class TrCustomizationField
{
    /**
     * @var integer
     */
    private $idCustomizationField;

    /**
     * @var integer
     */
    private $idProduct;

    /**
     * @var boolean
     */
    private $type;

    /**
     * @var boolean
     */
    private $required;


    /**
     * Get idCustomizationField
     *
     * @return integer 
     */
    public function getIdCustomizationField()
    {
        return $this->idCustomizationField;
    }

    /**
     * Set idProduct
     *
     * @param integer $idProduct
     * @return TrCustomizationField
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
     * Set type
     *
     * @param boolean $type
     * @return TrCustomizationField
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return boolean 
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set required
     *
     * @param boolean $required
     * @return TrCustomizationField
     */
    public function setRequired($required)
    {
        $this->required = $required;

        return $this;
    }

    /**
     * Get required
     *
     * @return boolean 
     */
    public function getRequired()
    {
        return $this->required;
    }
}
