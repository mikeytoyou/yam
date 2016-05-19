<?php

namespace alex\yamBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TrCotixcliente
 */
class TrCotixcliente
{
    /**
     * @var integer
     */
    private $idCotixcliente;

    /**
     * @var integer
     */
    private $idCotizacion;

    /**
     * @var integer
     */
    private $idCliente;

    /**
     * @var string
     */
    private $tipo;

    /**
     * @var \DateTime
     */
    private $dateAdd;

    /**
     * @var \DateTime
     */
    private $dateUpd;


    /**
     * Get idCotixcliente
     *
     * @return integer 
     */
    public function getIdCotixcliente()
    {
        return $this->idCotixcliente;
    }

    /**
     * Set idCotizacion
     *
     * @param integer $idCotizacion
     * @return TrCotixcliente
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

    /**
     * Set idCliente
     *
     * @param integer $idCliente
     * @return TrCotixcliente
     */
    public function setIdCliente($idCliente)
    {
        $this->idCliente = $idCliente;

        return $this;
    }

    /**
     * Get idCliente
     *
     * @return integer 
     */
    public function getIdCliente()
    {
        return $this->idCliente;
    }

    /**
     * Set tipo
     *
     * @param string $tipo
     * @return TrCotixcliente
     */
    public function setTipo($tipo)
    {
        $this->tipo = $tipo;

        return $this;
    }

    /**
     * Get tipo
     *
     * @return string 
     */
    public function getTipo()
    {
        return $this->tipo;
    }

    /**
     * Set dateAdd
     *
     * @param \DateTime $dateAdd
     * @return TrCotixcliente
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
     * @return TrCotixcliente
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
