<?php

namespace alex\yamBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TrAlias
 */
class TrAlias
{
    /**
     * @var integer
     */
    private $idAlias;

    /**
     * @var string
     */
    private $alias;

    /**
     * @var string
     */
    private $search;

    /**
     * @var boolean
     */
    private $active;


    /**
     * Get idAlias
     *
     * @return integer 
     */
    public function getIdAlias()
    {
        return $this->idAlias;
    }

    /**
     * Set alias
     *
     * @param string $alias
     * @return TrAlias
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
     * Set search
     *
     * @param string $search
     * @return TrAlias
     */
    public function setSearch($search)
    {
        $this->search = $search;

        return $this;
    }

    /**
     * Get search
     *
     * @return string 
     */
    public function getSearch()
    {
        return $this->search;
    }

    /**
     * Set active
     *
     * @param boolean $active
     * @return TrAlias
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
}
