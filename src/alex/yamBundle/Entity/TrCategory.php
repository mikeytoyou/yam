<?php

namespace alex\yamBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TrCategory
 */
class TrCategory
{
    /**
     * @var integer
     */
    private $idCategory;

    /**
     * @var integer
     */
    private $idParent;

    /**
     * @var integer
     */
    private $idShopDefault;

    /**
     * @var boolean
     */
    private $levelDepth;

    /**
     * @var integer
     */
    private $nleft;

    /**
     * @var integer
     */
    private $nright;

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
     * @var boolean
     */
    private $isRootCategory;


    /**
     * Get idCategory
     *
     * @return integer 
     */
    public function getIdCategory()
    {
        return $this->idCategory;
    }

    /**
     * Set idParent
     *
     * @param integer $idParent
     * @return TrCategory
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
     * Set idShopDefault
     *
     * @param integer $idShopDefault
     * @return TrCategory
     */
    public function setIdShopDefault($idShopDefault)
    {
        $this->idShopDefault = $idShopDefault;

        return $this;
    }

    /**
     * Get idShopDefault
     *
     * @return integer 
     */
    public function getIdShopDefault()
    {
        return $this->idShopDefault;
    }

    /**
     * Set levelDepth
     *
     * @param boolean $levelDepth
     * @return TrCategory
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
     * Set nleft
     *
     * @param integer $nleft
     * @return TrCategory
     */
    public function setNleft($nleft)
    {
        $this->nleft = $nleft;

        return $this;
    }

    /**
     * Get nleft
     *
     * @return integer 
     */
    public function getNleft()
    {
        return $this->nleft;
    }

    /**
     * Set nright
     *
     * @param integer $nright
     * @return TrCategory
     */
    public function setNright($nright)
    {
        $this->nright = $nright;

        return $this;
    }

    /**
     * Get nright
     *
     * @return integer 
     */
    public function getNright()
    {
        return $this->nright;
    }

    /**
     * Set active
     *
     * @param boolean $active
     * @return TrCategory
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
     * @return TrCategory
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
     * @return TrCategory
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
     * @return TrCategory
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
     * Set isRootCategory
     *
     * @param boolean $isRootCategory
     * @return TrCategory
     */
    public function setIsRootCategory($isRootCategory)
    {
        $this->isRootCategory = $isRootCategory;

        return $this;
    }

    /**
     * Get isRootCategory
     *
     * @return boolean 
     */
    public function getIsRootCategory()
    {
        return $this->isRootCategory;
    }
}
