<?php

namespace alex\yamBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * duracion
 */
class duracion
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var int
     */
    private $numerodedias;

    /**
     * @var int
     */
    private $numerodenoches;

    /**
     * @var \DateTime
     */
    private $fechainicio;

    /**
     * @var \DateTime
     */
    private $fechafin;

    /**
     * @var string
     */
    private $duraciondias;


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
     * Set numerodedias
     *
     * @param integer $numerodedias
     * @return duracion
     */
    public function setNumerodedias($numerodedias)
    {
        $this->numerodedias = $numerodedias;

        return $this;
    }

    /**
     * Get numerodedias
     *
     * @return integer 
     */
    public function getNumerodedias()
    {
        return $this->numerodedias;
    }

    /**
     * Set numerodenoches
     *
     * @param integer $numerodenoches
     * @return duracion
     */
    public function setNumerodenoches($numerodenoches)
    {
        $this->numerodenoches = $numerodenoches;

        return $this;
    }

    /**
     * Get numerodenoches
     *
     * @return integer 
     */
    public function getNumerodenoches()
    {
        return $this->numerodenoches;
    }

    /**
     * Set fechainicio
     *
     * @param \DateTime $fechainicio
     * @return duracion
     */
    public function setFechainicio($fechainicio)
    {
        $this->fechainicio = $fechainicio;

        return $this;
    }

    /**
     * Get fechainicio
     *
     * @return \DateTime 
     */
    public function getFechainicio()
    {
        return $this->fechainicio;
    }

    /**
     * Set fechafin
     *
     * @param \DateTime $fechafin
     * @return duracion
     */
    public function setFechafin($fechafin)
    {
        $this->fechafin = $fechafin;

        return $this;
    }

    /**
     * Get fechafin
     *
     * @return \DateTime 
     */
    public function getFechafin()
    {
        return $this->fechafin;
    }

    /**
     * Set duraciondias
     *
     * @param string $duraciondias
     * @return duracion
     */
    public function setDuraciondias($duraciondias)
    {
        $this->duraciondias = $duraciondias;

        return $this;
    }

    /**
     * Get duraciondias
     *
     * @return string 
     */
    public function getDuraciondias()
    {
        return $this->duraciondias;
    }
    /**
     * @var \alex\yamBundle\Entity\Paquete
     */
    private $paquete;


    /**
     * Set paquete
     *
     * @param \alex\yamBundle\Entity\Paquete $paquete
     * @return duracion
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
