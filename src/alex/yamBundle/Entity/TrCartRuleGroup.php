<?php

namespace alex\yamBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TrCartRuleGroup
 */
class TrCartRuleGroup
{
    /**
     * @var integer
     */
    private $idCartRule;

    /**
     * @var integer
     */
    private $idGroup;


    /**
     * Set idCartRule
     *
     * @param integer $idCartRule
     * @return TrCartRuleGroup
     */
    public function setIdCartRule($idCartRule)
    {
        $this->idCartRule = $idCartRule;

        return $this;
    }

    /**
     * Get idCartRule
     *
     * @return integer 
     */
    public function getIdCartRule()
    {
        return $this->idCartRule;
    }

    /**
     * Set idGroup
     *
     * @param integer $idGroup
     * @return TrCartRuleGroup
     */
    public function setIdGroup($idGroup)
    {
        $this->idGroup = $idGroup;

        return $this;
    }

    /**
     * Get idGroup
     *
     * @return integer 
     */
    public function getIdGroup()
    {
        return $this->idGroup;
    }
}
