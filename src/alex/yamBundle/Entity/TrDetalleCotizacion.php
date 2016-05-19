<?php

namespace alex\yamBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TrDetalleCotizacion
 */
class TrDetalleCotizacion
{
    /**
     * @var integer
     */
    private $idDetalCotizacion;

    /**
     * @var string
     */
    private $titulo;

    /**
     * @var string
     */
    private $precioAdulto;

    /**
     * @var string
     */
    private $precioNinio;

    /**
     * @var integer
     */
    private $idMoneda;

    /**
     * @var float
     */
    private $totalConImpuesto;

    /**
     * @var float
     */
    private $totalSinImpuesto;

    /**
     * @var float
     */
    private $totalTasaCambio;

    /**
     * @var string
     */
    private $tasaCambio;

    /**
     * @var \DateTime
     */
    private $dateAdd;

    /**
     * @var \DateTime
     */
    private $dateUpd;

    /**
     * @var integer
     */
    private $idCotizacion;


    /**
     * Get idDetalCotizacion
     *
     * @return integer 
     */
    public function getIdDetalCotizacion()
    {
        return $this->idDetalCotizacion;
    }

    /**
     * Set titulo
     *
     * @param string $titulo
     * @return TrDetalleCotizacion
     */
    public function setTitulo($titulo)
    {
        $this->titulo = $titulo;

        return $this;
    }

    /**
     * Get titulo
     *
     * @return string 
     */
    public function getTitulo()
    {
        return $this->titulo;
    }

    /**
     * Set precioAdulto
     *
     * @param string $precioAdulto
     * @return TrDetalleCotizacion
     */
    public function setPrecioAdulto($precioAdulto)
    {
        $this->precioAdulto = $precioAdulto;

        return $this;
    }

    /**
     * Get precioAdulto
     *
     * @return string 
     */
    public function getPrecioAdulto()
    {
        return $this->precioAdulto;
    }

    /**
     * Set precioNinio
     *
     * @param string $precioNinio
     * @return TrDetalleCotizacion
     */
    public function setPrecioNinio($precioNinio)
    {
        $this->precioNinio = $precioNinio;

        return $this;
    }

    /**
     * Get precioNinio
     *
     * @return string 
     */
    public function getPrecioNinio()
    {
        return $this->precioNinio;
    }

    /**
     * Set idMoneda
     *
     * @param integer $idMoneda
     * @return TrDetalleCotizacion
     */
    public function setIdMoneda($idMoneda)
    {
        $this->idMoneda = $idMoneda;

        return $this;
    }

    /**
     * Get idMoneda
     *
     * @return integer 
     */
    public function getIdMoneda()
    {
        return $this->idMoneda;
    }

    /**
     * Set totalConImpuesto
     *
     * @param float $totalConImpuesto
     * @return TrDetalleCotizacion
     */
    public function setTotalConImpuesto($totalConImpuesto)
    {
        $this->totalConImpuesto = $totalConImpuesto;

        return $this;
    }

    /**
     * Get totalConImpuesto
     *
     * @return float 
     */
    public function getTotalConImpuesto()
    {
        return $this->totalConImpuesto;
    }

    /**
     * Set totalSinImpuesto
     *
     * @param float $totalSinImpuesto
     * @return TrDetalleCotizacion
     */
    public function setTotalSinImpuesto($totalSinImpuesto)
    {
        $this->totalSinImpuesto = $totalSinImpuesto;

        return $this;
    }

    /**
     * Get totalSinImpuesto
     *
     * @return float 
     */
    public function getTotalSinImpuesto()
    {
        return $this->totalSinImpuesto;
    }

    /**
     * Set totalTasaCambio
     *
     * @param float $totalTasaCambio
     * @return TrDetalleCotizacion
     */
    public function setTotalTasaCambio($totalTasaCambio)
    {
        $this->totalTasaCambio = $totalTasaCambio;

        return $this;
    }

    /**
     * Get totalTasaCambio
     *
     * @return float 
     */
    public function getTotalTasaCambio()
    {
        return $this->totalTasaCambio;
    }

    /**
     * Set tasaCambio
     *
     * @param string $tasaCambio
     * @return TrDetalleCotizacion
     */
    public function setTasaCambio($tasaCambio)
    {
        $this->tasaCambio = $tasaCambio;

        return $this;
    }

    /**
     * Get tasaCambio
     *
     * @return string 
     */
    public function getTasaCambio()
    {
        return $this->tasaCambio;
    }

    /**
     * Set dateAdd
     *
     * @param \DateTime $dateAdd
     * @return TrDetalleCotizacion
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
     * @return TrDetalleCotizacion
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
     * Set idCotizacion
     *
     * @param integer $idCotizacion
     * @return TrDetalleCotizacion
     */
    public function setIdCotizacion($idCotizacion)
    {
        $this->idCotizacion = $idCotizacion;

        return $this;
    }

    /**
     * Get idCotizacion
     *
     * @return integer 
     */
    public function getIdCotizacion()
    {
        return $this->idCotizacion;
    }
}
