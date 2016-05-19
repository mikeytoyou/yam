<?php

namespace alex\yamBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TrGasto
 */
class TrGasto
{
    /**
     * @var integer
     */
    private $idGasto;

    /**
     * @var integer
     */
    private $idCircuito;

    /**
     * @var string
     */
    private $descripcion;

    /**
     * @var float
     */
    private $monto;


    /**
     * Set idGasto
     *
     * @param integer $idGasto
     * @return TrGasto
     */
    public function setIdGasto($idGasto)
    {
        $this->idGasto = $idGasto;

        return $this;
    }

    /**
     * Get idGasto
     *
     * @return integer 
     */
    public function getIdGasto()
    {
        return $this->idGasto;
    }

    /**
     * Set idCircuito
     *
     * @param integer $idCircuito
     * @return TrGasto
     */
    public function setIdCircuito($idCircuito)
    {
        $this->idCircuito = $idCircuito;

        return $this;
    }

    /**
     * Get idCircuito
     *
     * @return integer 
     */
    public function getIdCircuito()
    {
        return $this->idCircuito;
    }

    /**
     * Set descripcion
     *
     * @param string $descripcion
     * @return TrGasto
     */
    public function setDescripcion($descripcion)
    {
        $this->descripcion = $descripcion;

        return $this;
    }

    /**
     * Get descripcion
     *
     * @return string 
     */
    public function getDescripcion()
    {
        return $this->descripcion;
    }

    /**
     * Set monto
     *
     * @param float $monto
     * @return TrGasto
     */
    public function setMonto($monto)
    {
        $this->monto = $monto;

        return $this;
    }

    /**
     * Get monto
     *
     * @return float 
     */
    public function getMonto()
    {
        return $this->monto;
    }
}
