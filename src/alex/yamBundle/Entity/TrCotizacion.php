<?php

namespace alex\yamBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TrCotizacion
 */
class TrCotizacion
{
    /**
     * @var integer
     */
    private $idCotizacion;

    /**
     * @var string
     */
    private $numAdultos;

    /**
     * @var string
     */
    private $numNinios;

    /**
     * @var integer
     */
    private $idEstado;

    /**
     * @var integer
     */
    private $idPlantilla;

    /**
     * @var \DateTime
     */
    private $dateAdd;

    /**
     * @var \DateTime
     */
    private $dateUpd;

    /**
     * @var string
     */
    private $tipoVuelo;


    /**
     * Get idCotizacion
     *
     * @return integer 
     */
    public function getIdCotizacion()
    {
        return $this->idCotizacion;
    }

    /**
     * Set numAdultos
     *
     * @param string $numAdultos
     * @return TrCotizacion
     */
    public function setNumAdultos($numAdultos)
    {
        $this->numAdultos = $numAdultos;

        return $this;
    }

    /**
     * Get numAdultos
     *
     * @return string 
     */
    public function getNumAdultos()
    {
        return $this->numAdultos;
    }

    /**
     * Set numNinios
     *
     * @param string $numNinios
     * @return TrCotizacion
     */
    public function setNumNinios($numNinios)
    {
        $this->numNinios = $numNinios;

        return $this;
    }

    /**
     * Get numNinios
     *
     * @return string 
     */
    public function getNumNinios()
    {
        return $this->numNinios;
    }

    /**
     * Set idEstado
     *
     * @param integer $idEstado
     * @return TrCotizacion
     */
    public function setIdEstado($idEstado)
    {
        $this->idEstado = $idEstado;

        return $this;
    }

    /**
     * Get idEstado
     *
     * @return integer 
     */
    public function getIdEstado()
    {
        return $this->idEstado;
    }

    /**
     * Set idPlantilla
     *
     * @param integer $idPlantilla
     * @return TrCotizacion
     */
    public function setIdPlantilla($idPlantilla)
    {
        $this->idPlantilla = $idPlantilla;

        return $this;
    }

    /**
     * Get idPlantilla
     *
     * @return integer 
     */
    public function getIdPlantilla()
    {
        return $this->idPlantilla;
    }

    /**
     * Set dateAdd
     *
     * @param \DateTime $dateAdd
     * @return TrCotizacion
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
     * @return TrCotizacion
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

    /**
     * Set tipoVuelo
     *
     * @param string $tipoVuelo
     * @return TrCotizacion
     */
    public function setTipoVuelo($tipoVuelo)
    {
        $this->tipoVuelo = $tipoVuelo;

        return $this;
    }

    /**
     * Get tipoVuelo
     *
     * @return string 
     */
    public function getTipoVuelo()
    {
        return $this->tipoVuelo;
    }
}
