<?php

namespace alex\yamBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TrLayeredIndexableFeature
 */
class TrLayeredIndexableFeature
{
    /**
     * @var integer
     */
    private $idFeature;

    /**
     * @var boolean
     */
    private $indexable;


    /**
     * Get idFeature
     *
     * @return integer 
     */
    public function getIdFeature()
    {
        return $this->idFeature;
    }

    /**
     * Set indexable
     *
     * @param boolean $indexable
     * @return TrLayeredIndexableFeature
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
