<?php

namespace alex\yamBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TrZone
 */
class TrZone
{
    /**
     * @var integer
     */
    private $idZone;

    /**
     * @var string
     */
    private $name;

    /**
     * @var boolean
     */
    private $active;


    /**
     * Get idZone
     *
     * @return integer 
     */
    public function getIdZone()
    {
        return $this->idZone;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return TrZone
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
     * @param boolean $active
     * @return TrZone
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
