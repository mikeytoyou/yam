<?php

namespace alex\yamBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TrOperatingSystem
 */
class TrOperatingSystem
{
    /**
     * @var integer
     */
    private $idOperatingSystem;

    /**
     * @var string
     */
    private $name;


    /**
     * Get idOperatingSystem
     *
     * @return integer 
     */
    public function getIdOperatingSystem()
    {
        return $this->idOperatingSystem;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return TrOperatingSystem
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
