<?php

namespace alex\yamBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TrAccessory
 */
class TrAccessory
{
    /**
     * @var integer
     */
    private $idProduct1;

    /**
     * @var integer
     */
    private $idProduct2;


    /**
     * Get idProduct1
     *
     * @return integer 
     */
    public function getIdProduct1()
    {
        return $this->idProduct1;
    }

    /**
     * Set idProduct2
     *
     * @param integer $idProduct2
     * @return TrAccessory
     */
    public function setIdProduct2($idProduct2)
    {
        $this->idProduct2 = $idProduct2;

        return $this;
    }

    /**
     * Get idProduct2
     *
     * @return integer 
     */
    public function getIdProduct2()
    {
        return $this->idProduct2;
    }
}
