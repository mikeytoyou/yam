<?php

namespace alex\yamBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TrCmsBlock
 */
class TrCmsBlock
{
    /**
     * @var integer
     */
    private $idCmsBlock;

    /**
     * @var integer
     */
    private $idCmsCategory;

    /**
     * @var boolean
     */
    private $location;

    /**
     * @var integer
     */
    private $position;

    /**
     * @var boolean
     */
    private $displayStore;


    /**
     * Get idCmsBlock
     *
     * @return integer 
     */
    public function getIdCmsBlock()
    {
        return $this->idCmsBlock;
    }

    /**
     * Set idCmsCategory
     *
     * @param integer $idCmsCategory
     * @return TrCmsBlock
     */
    public function setIdCmsCategory($idCmsCategory)
    {
        $this->idCmsCategory = $idCmsCategory;

        return $this;
    }

    /**
     * Get idCmsCategory
     *
     * @return integer 
     */
    public function getIdCmsCategory()
    {
        return $this->idCmsCategory;
    }

    /**
     * Set location
     *
     * @param boolean $location
     * @return TrCmsBlock
     */
    public function setLocation($location)
    {
        $this->location = $location;

        return $this;
    }

    /**
     * Get location
     *
     * @return boolean 
     */
    public function getLocation()
    {
        return $this->location;
    }

    /**
     * Set position
     *
     * @param integer $position
     * @return TrCmsBlock
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

    /**
     * Set displayStore
     *
     * @param boolean $displayStore
     * @return TrCmsBlock
     */
    public function setDisplayStore($displayStore)
    {
        $this->displayStore = $displayStore;

        return $this;
    }

    /**
     * Get displayStore
     *
     * @return boolean 
     */
    public function getDisplayStore()
    {
        return $this->displayStore;
    }
}
