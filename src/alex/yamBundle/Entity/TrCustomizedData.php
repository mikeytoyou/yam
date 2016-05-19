<?php

namespace alex\yamBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TrCustomizedData
 */
class TrCustomizedData
{
    /**
     * @var integer
     */
    private $idCustomization;

    /**
     * @var boolean
     */
    private $type;

    /**
     * @var integer
     */
    private $index;

    /**
     * @var string
     */
    private $value;


    /**
     * Set idCustomization
     *
     * @param integer $idCustomization
     * @return TrCustomizedData
     */
    public function setIdCustomization($idCustomization)
    {
        $this->idCustomization = $idCustomization;

        return $this;
    }

    /**
     * Get idCustomization
     *
     * @return integer 
     */
    public function getIdCustomization()
    {
        return $this->idCustomization;
    }

    /**
     * Set type
     *
     * @param boolean $type
     * @return TrCustomizedData
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
     * Set index
     *
     * @param integer $index
     * @return TrCustomizedData
     */
    public function setIndex($index)
    {
        $this->index = $index;

        return $this;
    }

    /**
     * Get index
     *
     * @return integer 
     */
    public function getIndex()
    {
        return $this->index;
    }

    /**
     * Set value
     *
     * @param string $value
     * @return TrCustomizedData
     */
    public function setValue($value)
    {
        $this->value = $value;

        return $this;
    }

    /**
     * Get value
     *
     * @return string 
     */
    public function getValue()
    {
        return $this->value;
    }
}
