<?php

namespace alex\yamBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TrCmsCategory
 */
class TrCmsCategory
{
    /**
     * @var integer
     */
    private $idCmsCategory;

    /**
     * @var integer
     */
    private $idParent;

    /**
     * @var boolean
     */
    private $levelDepth;

    /**
     * @var boolean
     */
    private $active;

    /**
     * @var \DateTime
     */
    private $dateAdd;

    /**
     * @var \DateTime
     */
    private $dateUpd;

    /**
     * @var integer
     */
    private $position;


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
     * Set idParent
     *
     * @param integer $idParent
     * @return TrCmsCategory
     */
    public function setIdParent($idParent)
    {
        $this->idParent = $idParent;

        return $this;
    }

    /**
     * Get idParent
     *
     * @return integer 
     */
    public function getIdParent()
    {
        return $this->idParent;
    }

    /**
     * Set levelDepth
     *
     * @param boolean $levelDepth
     * @return TrCmsCategory
     */
    public function setLevelDepth($levelDepth)
    {
        $this->levelDepth = $levelDepth;

        return $this;
    }

    /**
     * Get levelDepth
     *
     * @return boolean 
     */
    public function getLevelDepth()
    {
        return $this->levelDepth;
    }

    /**
     * Set active
     *
     * @param boolean $active
     * @return TrCmsCategory
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
     * Set dateAdd
     *
     * @param \DateTime $dateAdd
     * @return TrCmsCategory
     */
    public function setDateAdd($dateAdd)
    {
        $this->dateAdd = $dateAdd;

        return $this;
    }

    /**
     * Get dateAdd
     *
     * @return \DateTime 
     */
    public function getDateAdd()
    {
        return $this->dateAdd;
    }

    /**
     * Set dateUpd
     *
     * @param \DateTime $dateUpd
     * @return TrCmsCategory
     */
    public function setDateUpd($dateUpd)
    {
        $this->dateUpd = $dateUpd;

        return $this;
    }

    /**
     * Get dateUpd
     *
     * @return \DateTime 
     */
    public function getDateUpd()
    {
        return $this->dateUpd;
    }

    /**
     * Set position
     *
     * @param integer $position
     * @return TrCmsCategory
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
