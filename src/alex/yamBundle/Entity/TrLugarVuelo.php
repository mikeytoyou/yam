<?php

namespace alex\yamBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TrLugarVuelo
 */
class TrLugarVuelo
{
    /**
     * @var integer
     */
    private $idLugares;

    /**
     * @var integer
     */
    private $idDetalleCoti;

    /**
     * @var string
     */
    private $fechaVuelo;

    /**
     * @var string
     */
    private $numVuelo;

    /**
     * @var string
     */
    private $lPartida;

    /**
     * @var string
     */
    private $lLlegada;

    /**
     * @var \DateTime
     */
    private $hSalida;

    /**
     * @var \DateTime
     */
    private $hLlegada;

    /**
     * @var \DateTime
     */
    private $dateAdd;

    /**
     * @var \DateTime
     */
    private $dateUpd;


    /**
     * Get idLugares
     *
     * @return integer 
     */
    public function getIdLugares()
    {
        return $this->idLugares;
    }

    /**
     * Set idDetalleCoti
     *
     * @param integer $idDetalleCoti
     * @return TrLugarVuelo
     */
    public function setIdDetalleCoti($idDetalleCoti)
    {
        $this->idDetalleCoti = $idDetalleCoti;

        return $this;
    }

    /**
     * Get idDetalleCoti
     *
     * @return integer 
     */
    public function getIdDetalleCoti()
    {
        return $this->idDetalleCoti;
    }

    /**
     * Set fechaVuelo
     *
     * @param string $fechaVuelo
     * @return TrLugarVuelo
     */
    public function setFechaVuelo($fechaVuelo)
    {
        $this->fechaVuelo = $fechaVuelo;

        return $this;
    }

    /**
     * Get fechaVuelo
     *
     * @return string 
     */
    public function getFechaVuelo()
    {
        return $this->fechaVuelo;
    }

    /**
     * Set numVuelo
     *
     * @param string $numVuelo
     * @return TrLugarVuelo
     */
    public function setNumVuelo($numVuelo)
    {
        $this->numVuelo = $numVuelo;

        return $this;
    }

    /**
     * Get numVuelo
     *
     * @return string 
     */
    public function getNumVuelo()
    {
        return $this->numVuelo;
    }

    /**
     * Set lPartida
     *
     * @param string $lPartida
     * @return TrLugarVuelo
     */
    public function setLPartida($lPartida)
    {
        $this->lPartida = $lPartida;

        return $this;
    }

    /**
     * Get lPartida
     *
     * @return string 
     */
    public function getLPartida()
    {
        return $this->lPartida;
    }

    /**
     * Set lLlegada
     *
     * @param string $lLlegada
     * @return TrLugarVuelo
     */
    public function setLLlegada($lLlegada)
    {
        $this->lLlegada = $lLlegada;

        return $this;
    }

    /**
     * Get lLlegada
     *
     * @return string 
     */
    public function getLLlegada()
    {
        return $this->lLlegada;
    }

    /**
     * Set hSalida
     *
     * @param \DateTime $hSalida
     * @return TrLugarVuelo
     */
    public function setHSalida($hSalida)
    {
        $this->hSalida = $hSalida;

        return $this;
    }

    /**
     * Get hSalida
     *
     * @return \DateTime 
     */
    public function getHSalida()
    {
        return $this->hSalida;
    }

    /**
     * Set hLlegada
     *
     * @param \DateTime $hLlegada
     * @return TrLugarVuelo
     */
    public function setHLlegada($hLlegada)
    {
        $this->hLlegada = $hLlegada;

        return $this;
    }

    /**
     * Get hLlegada
     *
     * @return \DateTime 
     */
    public function getHLlegada()
    {
        return $this->hLlegada;
    }

    /**
     * Set dateAdd
     *
     * @param \DateTime $dateAdd
     * @return TrLugarVuelo
     */
    public function setDateAdd($dateAdd)
    {
        $this->dateAdd = $dateAdd;

        return $this;
    }

    /**
     * Get dateAdd
     *
     * @return \DateTime 
     */
    public function getDateAdd()
    {
        return $this->dateAdd;
    }

    /**
     * Set dateUpd
     *
     * @param \DateTime $dateUpd
     * @return TrLugarVuelo
     */
    public function setDateUpd($dateUpd)
    {
        $this->dateUpd = $dateUpd;

        return $this;
    }

    /**
     * Get dateUpd
     *
     * @return \DateTime 
     */
    public function getDateUpd()
    {
        return $this->dateUpd;
    }
}
