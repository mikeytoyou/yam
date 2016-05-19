<?php

namespace alex\yamBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TrCms
 */
class TrCms
{
    /**
     * @var integer
     */
    private $idCms;

    /**
     * @var integer
     */
    private $idCmsCategory;

    /**
     * @var integer
     */
    private $position;

    /**
     * @var boolean
     */
    private $active;

    /**
     * @var boolean
     */
    private $indexation;


    /**
     * Get idCms
     *
     * @return integer 
     */
    public function getIdCms()
    {
        return $this->idCms;
    }

    /**
     * Set idCmsCategory
     *
     * @param integer $idCmsCategory
     * @return TrCms
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
     * Set position
     *
     * @param integer $position
     * @return TrCms
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
     * Set active
     *
     * @param boolean $active
     * @return TrCms
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
     * Set indexation
     *
     * @param boolean $indexation
     * @return TrCms
     */
    public function setIndexation($indexation)
    {
        $this->indexation = $indexation;

        return $this;
    }

    /**
     * Get indexation
     *
     * @return boolean 
     */
    public function getIndexation()
    {
        return $this->indexation;
    }
}
