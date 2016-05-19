<?php

namespace alex\yamBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TrAttributeGroup
 */
class TrAttributeGroup
{
    /**
     * @var integer
     */
    private $idAttributeGroup;

    /**
     * @var boolean
     */
    private $isColorGroup;

    /**
     * @var string
     */
    private $groupType;

    /**
     * @var integer
     */
    private $position;


    /**
     * Get idAttributeGroup
     *
     * @return integer 
     */
    public function getIdAttributeGroup()
    {
        return $this->idAttributeGroup;
    }

    /**
     * Set isColorGroup
     *
     * @param boolean $isColorGroup
     * @return TrAttributeGroup
     */
    public function setIsColorGroup($isColorGroup)
    {
        $this->isColorGroup = $isColorGroup;

        return $this;
    }

    /**
     * Get isColorGroup
     *
     * @return boolean 
     */
    public function getIsColorGroup()
    {
        return $this->isColorGroup;
    }

    /**
     * Set groupType
     *
     * @param string $groupType
     * @return TrAttributeGroup
     */
    public function setGroupType($groupType)
    {
        $this->groupType = $groupType;

        return $this;
    }

    /**
     * Get groupType
     *
     * @return string 
     */
    public function getGroupType()
    {
        return $this->groupType;
    }

    /**
     * Set position
     *
     * @param integer $position
     * @return TrAttributeGroup
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
}
