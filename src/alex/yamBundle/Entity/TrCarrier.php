<?php

namespace alex\yamBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TrCarrier
 */
class TrCarrier
{
    /**
     * @var integer
     */
    private $idCarrier;

    /**
     * @var integer
     */
    private $idReference;

    /**
     * @var integer
     */
    private $idTaxRulesGroup;

    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $url;

    /**
     * @var boolean
     */
    private $active;

    /**
     * @var boolean
     */
    private $deleted;

    /**
     * @var boolean
     */
    private $shippingHandling;

    /**
     * @var boolean
     */
    private $rangeBehavior;

    /**
     * @var boolean
     */
    private $isModule;

    /**
     * @var boolean
     */
    private $isFree;

    /**
     * @var boolean
     */
    private $shippingExternal;

    /**
     * @var boolean
     */
    private $needRange;

    /**
     * @var string
     */
    private $externalModuleName;

    /**
     * @var integer
     */
    private $shippingMethod;

    /**
     * @var integer
     */
    private $position;

    /**
     * @var integer
     */
    private $maxWidth;

    /**
     * @var integer
     */
    private $maxHeight;

    /**
     * @var integer
     */
    private $maxDepth;

    /**
     * @var string
     */
    private $maxWeight;

    /**
     * @var integer
     */
    private $grade;


    /**
     * Get idCarrier
     *
     * @return integer 
     */
    public function getIdCarrier()
    {
        return $this->idCarrier;
    }

    /**
     * Set idReference
     *
     * @param integer $idReference
     * @return TrCarrier
     */
    public function setIdReference($idReference)
    {
        $this->idReference = $idReference;

        return $this;
    }

    /**
     * Get idReference
     *
     * @return integer 
     */
    public function getIdReference()
    {
        return $this->idReference;
    }

    /**
     * Set idTaxRulesGroup
     *
     * @param integer $idTaxRulesGroup
     * @return TrCarrier
     */
    public function setIdTaxRulesGroup($idTaxRulesGroup)
    {
        $this->idTaxRulesGroup = $idTaxRulesGroup;

        return $this;
    }

    /**
     * Get idTaxRulesGroup
     *
     * @return integer 
     */
    public function getIdTaxRulesGroup()
    {
        return $this->idTaxRulesGroup;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return TrCarrier
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set url
     *
     * @param string $url
     * @return TrCarrier
     */
    public function setUrl($url)
    {
        $this->url = $url;

        return $this;
    }

    /**
     * Get url
     *
     * @return string 
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * Set active
     *
     * @param boolean $active
     * @return TrCarrier
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
     * Set deleted
     *
     * @param boolean $deleted
     * @return TrCarrier
     */
    public function setDeleted($deleted)
    {
        $this->deleted = $deleted;

        return $this;
    }

    /**
     * Get deleted
     *
     * @return boolean 
     */
    public function getDeleted()
    {
        return $this->deleted;
    }

    /**
     * Set shippingHandling
     *
     * @param boolean $shippingHandling
     * @return TrCarrier
     */
    public function setShippingHandling($shippingHandling)
    {
        $this->shippingHandling = $shippingHandling;

        return $this;
    }

    /**
     * Get shippingHandling
     *
     * @return boolean 
     */
    public function getShippingHandling()
    {
        return $this->shippingHandling;
    }

    /**
     * Set rangeBehavior
     *
     * @param boolean $rangeBehavior
     * @return TrCarrier
     */
    public function setRangeBehavior($rangeBehavior)
    {
        $this->rangeBehavior = $rangeBehavior;

        return $this;
    }

    /**
     * Get rangeBehavior
     *
     * @return boolean 
     */
    public function getRangeBehavior()
    {
        return $this->rangeBehavior;
    }

    /**
     * Set isModule
     *
     * @param boolean $isModule
     * @return TrCarrier
     */
    public function setIsModule($isModule)
    {
        $this->isModule = $isModule;

        return $this;
    }

    /**
     * Get isModule
     *
     * @return boolean 
     */
    public function getIsModule()
    {
        return $this->isModule;
    }

    /**
     * Set isFree
     *
     * @param boolean $isFree
     * @return TrCarrier
     */
    public function setIsFree($isFree)
    {
        $this->isFree = $isFree;

        return $this;
    }

    /**
     * Get isFree
     *
     * @return boolean 
     */
    public function getIsFree()
    {
        return $this->isFree;
    }

    /**
     * Set shippingExternal
     *
     * @param boolean $shippingExternal
     * @return TrCarrier
     */
    public function setShippingExternal($shippingExternal)
    {
        $this->shippingExternal = $shippingExternal;

        return $this;
    }

    /**
     * Get shippingExternal
     *
     * @return boolean 
     */
    public function getShippingExternal()
    {
        return $this->shippingExternal;
    }

    /**
     * Set needRange
     *
     * @param boolean $needRange
     * @return TrCarrier
     */
    public function setNeedRange($needRange)
    {
        $this->needRange = $needRange;

        return $this;
    }

    /**
     * Get needRange
     *
     * @return boolean 
     */
    public function getNeedRange()
    {
        return $this->needRange;
    }

    /**
     * Set externalModuleName
     *
     * @param string $externalModuleName
     * @return TrCarrier
     */
    public function setExternalModuleName($externalModuleName)
    {
        $this->externalModuleName = $externalModuleName;

        return $this;
    }

    /**
     * Get externalModuleName
     *
     * @return string 
     */
    public function getExternalModuleName()
    {
        return $this->externalModuleName;
    }

    /**
     * Set shippingMethod
     *
     * @param integer $shippingMethod
     * @return TrCarrier
     */
    public function setShippingMethod($shippingMethod)
    {
        $this->shippingMethod = $shippingMethod;

        return $this;
    }

    /**
     * Get shippingMethod
     *
     * @return integer 
     */
    public function getShippingMethod()
    {
        return $this->shippingMethod;
    }

    /**
     * Set position
     *
     * @param integer $position
     * @return TrCarrier
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
     * Set maxWidth
     *
     * @param integer $maxWidth
     * @return TrCarrier
     */
    public function setMaxWidth($maxWidth)
    {
        $this->maxWidth = $maxWidth;

        return $this;
    }

    /**
     * Get maxWidth
     *
     * @return integer 
     */
    public function getMaxWidth()
    {
        return $this->maxWidth;
    }

    /**
     * Set maxHeight
     *
     * @param integer $maxHeight
     * @return TrCarrier
     */
    public function setMaxHeight($maxHeight)
    {
        $this->maxHeight = $maxHeight;

        return $this;
    }

    /**
     * Get maxHeight
     *
     * @return integer 
     */
    public function getMaxHeight()
    {
        return $this->maxHeight;
    }

    /**
     * Set maxDepth
     *
     * @param integer $maxDepth
     * @return TrCarrier
     */
    public function setMaxDepth($maxDepth)
    {
        $this->maxDepth = $maxDepth;

        return $this;
    }

    /**
     * Get maxDepth
     *
     * @return integer 
     */
    public function getMaxDepth()
    {
        return $this->maxDepth;
    }

    /**
     * Set maxWeight
     *
     * @param string $maxWeight
     * @return TrCarrier
     */
    public function setMaxWeight($maxWeight)
    {
        $this->maxWeight = $maxWeight;

        return $this;
    }

    /**
     * Get maxWeight
     *
     * @return string 
     */
    public function getMaxWeight()
    {
        return $this->maxWeight;
    }

    /**
     * Set grade
     *
     * @param integer $grade
     * @return TrCarrier
     */
    public function setGrade($grade)
    {
        $this->grade = $grade;

        return $this;
    }

    /**
     * Get grade
     *
     * @return integer 
     */
    public function getGrade()
    {
        return $this->grade;
    }
}
