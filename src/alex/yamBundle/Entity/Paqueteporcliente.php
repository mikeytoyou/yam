<?php

namespace alex\yamBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Paqueteporcliente
 */
class Paqueteporcliente
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var integer
     */
    private $cutomerId;

    /**
     * @var \alex\yamBundle\Entity\Paquete
     */
    private $paquete;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set cutomerId
     *
     * @param integer $cutomerId
     * @return Paqueteporcliente
     */
    public function setCutomerId($cutomerId)
    {
        $this->cutomerId = $cutomerId;

        return $this;
    }

    /**
     * Get cutomerId
     *
     * @return integer 
     */
    public function getCutomerId()
    {
        return $this->cutomerId;
    }

    /**
     * Set paquete
     *
     * @param \alex\yamBundle\Entity\Paquete $paquete
     * @return Paqueteporcliente
     */
    public function setPaquete(\alex\yamBundle\Entity\Paquete $paquete = null)
    {
        $this->paquete = $paquete;

        return $this;
    }

    /**
     * Get paquete
     *
     * @return \alex\yamBundle\Entity\Paquete 
     */
    public function getPaquete()
    {
        return $this->paquete;
    }
}
