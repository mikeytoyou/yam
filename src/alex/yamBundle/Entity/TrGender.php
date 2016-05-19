<?php

namespace alex\yamBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TrGender
 */
class TrGender
{
    /**
     * @var integer
     */
    private $idGender;

    /**
     * @var boolean
     */
    private $type;


    /**
     * Get idGender
     *
     * @return integer 
     */
    public function getIdGender()
    {
        return $this->idGender;
    }

    /**
     * Set type
     *
     * @param boolean $type
     * @return TrGender
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return boolean 
     */
    public function getType()
    {
        return $this->type;
    }
}
