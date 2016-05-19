<?php

namespace alex\yamBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TrCartRuleProductRule
 */
class TrCartRuleProductRule
{
    /**
     * @var integer
     */
    private $idProductRule;

    /**
     * @var integer
     */
    private $idProductRuleGroup;

    /**
     * @var string
     */
    private $type;


    /**
     * Get idProductRule
     *
     * @return integer 
     */
    public function getIdProductRule()
    {
        return $this->idProductRule;
    }

    /**
     * Set idProductRuleGroup
     *
     * @param integer $idProductRuleGroup
     * @return TrCartRuleProductRule
     */
    public function setIdProductRuleGroup($idProductRuleGroup)
    {
        $this->idProductRuleGroup = $idProductRuleGroup;

        return $this;
    }

    /**
     * Get idProductRuleGroup
     *
     * @return integer 
     */
    public function getIdProductRuleGroup()
    {
        return $this->idProductRuleGroup;
    }

    /**
     * Set type
     *
     * @param string $type
     * @return TrCartRuleProductRule
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return string 
     */
    public function getType()
    {
        return $this->type;
    }
}
