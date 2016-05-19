<?php

namespace alex\yamBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TrLayeredIndexableAttributeGroup
 */
class TrLayeredIndexableAttributeGroup
{
    /**
     * @var integer
     */
    private $idAttributeGroup;

    /**
     * @var boolean
     */
    private $indexable;


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
     * Set indexable
     *
     * @param boolean $indexable
     * @return TrLayeredIndexableAttributeGroup
     */
    public function setIndexable($indexable)
    {
        $this->indexable = $indexable;

        return $this;
    }

    /**
     * Get indexable
     *
     * @return boolean 
     */
    public function getIndexable()
    {
        return $this->indexable;
    }
}
