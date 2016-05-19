<?php

namespace alex\yamBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TrSpecificPriceRuleCondition
 */
class TrSpecificPriceRuleCondition
{
    /**
     * @var integer
     */
    private $idSpecificPriceRuleCondition;

    /**
     * @var integer
     */
    private $idSpecificPriceRuleConditionGroup;

    /**
     * @var string
     */
    private $type;

    /**
     * @var string
     */
    private $value;


    /**
     * Get idSpecificPriceRuleCondition
     *
     * @return integer 
     */
    public function getIdSpecificPriceRuleCondition()
    {
        return $this->idSpecificPriceRuleCondition;
    }

    /**
     * Set idSpecificPriceRuleConditionGroup
     *
     * @param integer $idSpecificPriceRuleConditionGroup
     * @return TrSpecificPriceRuleCondition
     */
    public function setIdSpecificPriceRuleConditionGroup($idSpecificPriceRuleConditionGroup)
    {
        $this->idSpecificPriceRuleConditionGroup = $idSpecificPriceRuleConditionGroup;

        return $this;
    }

    /**
     * Get idSpecificPriceRuleConditionGroup
     *
     * @return integer 
     */
    public function getIdSpecificPriceRuleConditionGroup()
    {
        return $this->idSpecificPriceRuleConditionGroup;
    }

    /**
     * Set type
     *
     * @param string $type
     * @return TrSpecificPriceRuleCondition
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

    /**
     * Set value
     *
     * @param string $value
     * @return TrSpecificPriceRuleCondition
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
