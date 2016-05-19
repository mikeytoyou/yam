<?php

namespace alex\yamBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TrPageType
 */
class TrPageType
{
    /**
     * @var integer
     */
    private $idPageType;

    /**
     * @var string
     */
    private $name;


    /**
     * Get idPageType
     *
     * @return integer 
     */
    public function getIdPageType()
    {
        return $this->idPageType;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return TrPageType
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
