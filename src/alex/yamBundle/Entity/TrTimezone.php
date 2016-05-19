<?php

namespace alex\yamBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TrTimezone
 */
class TrTimezone
{
    /**
     * @var integer
     */
    private $idTimezone;

    /**
     * @var string
     */
    private $name;


    /**
     * Get idTimezone
     *
     * @return integer 
     */
    public function getIdTimezone()
    {
        return $this->idTimezone;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return TrTimezone
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
