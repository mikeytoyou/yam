<?php

namespace alex\yamBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Estancia
 */
class Estancia
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $diasdepermanencia;

    /**
     * @var \alex\yamBundle\Entity\Hotel
     */
    private $idHotel;

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
     * Set diasdepermanencia
     *
     * @param string $diasdepermanencia
     * @return Estancia
     */
    public function setDiasdepermanencia($diasdepermanencia)
    {
        $this->diasdepermanencia = $diasdepermanencia;

        return $this;
    }

    /**
     * Get diasdepermanencia
     *
     * @return string 
     */
    public function getDiasdepermanencia()
    {
        return $this->diasdepermanencia;
    }

    /**
     * Set idHotel
     *
     * @param \alex\yamBundle\Entity\Hotel $idHotel
     * @return Estancia
     */
    public function setIdHotel(\alex\yamBundle\Entity\Hotel $idHotel = null)
    {
        $this->idHotel = $idHotel;

        return $this;
    }

    /**
     * Get idHotel
     *
     * @return \alex\yamBundle\Entity\Hotel 
     */
    public function getIdHotel()
    {
        return $this->idHotel;
    }

    /**
     * Set paquete
     *
     * @param \alex\yamBundle\Entity\Paquete $paquete
     * @return Estancia
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
