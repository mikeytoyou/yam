<?php

namespace alex\yamBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TrScene
 */
class TrScene
{
    /**
     * @var integer
     */
    private $idScene;

    /**
     * @var boolean
     */
    private $active;


    /**
     * Get idScene
     *
     * @return integer 
     */
    public function getIdScene()
    {
        return $this->idScene;
    }

    /**
     * Set active
     *
     * @param boolean $active
     * @return TrScene
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
