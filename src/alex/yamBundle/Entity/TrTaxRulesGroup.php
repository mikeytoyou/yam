<?php

namespace alex\yamBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TrTaxRulesGroup
 */
class TrTaxRulesGroup
{
    /**
     * @var integer
     */
    private $idTaxRulesGroup;

    /**
     * @var string
     */
    private $name;

    /**
     * @var integer
     */
    private $active;


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
     * @return TrTaxRulesGroup
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
     * Set active
     *
     * @param integer $active
     * @return TrTaxRulesGroup
     */
    public function setActive($active)
    {
        $this->active = $active;

        return $this;
    }

    /**
     * Get active
     *
     * @return integer 
     */
    public function getActive()
    {
        return $this->active;
    }
}
