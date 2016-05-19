<?php

namespace alex\yamBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TrHookAlias
 */
class TrHookAlias
{
    /**
     * @var integer
     */
    private $idHookAlias;

    /**
     * @var string
     */
    private $alias;

    /**
     * @var string
     */
    private $name;


    /**
     * Get idHookAlias
     *
     * @return integer 
     */
    public function getIdHookAlias()
    {
        return $this->idHookAlias;
    }

    /**
     * Set alias
     *
     * @param string $alias
     * @return TrHookAlias
     */
    public function setAlias($alias)
    {
        $this->alias = $alias;

        return $this;
    }

    /**
     * Get alias
     *
     * @return string 
     */
    public function getAlias()
    {
        return $this->alias;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return TrHookAlias
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
}
