<?php

namespace alex\yamBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TrLugarTuristico
 */
class TrLugarTuristico
{
    /**
     * @var integer
     */
    private $idLugarTuristico;

    /**
     * @var integer
     */
    private $idEmployee;

    /**
     * @var string
     */
    private $nombre;

    /**
     * @var string
     */
    private $descripcionCorta;

    /**
     * @var string
     */
    private $descripcionDetallada;

    /**
     * @var string
     */
    private $leyendaCorta;

    /**
     * @var string
     */
    private $leyendaDetallada;

    /**
     * @var string
     */
    private $ubicacionExacta;

    /**
     * @var \DateTime
     */
    private $dateAdd;

    /**
     * @var \DateTime
     */
    private $dateUpd;

    /**
     * @var boolean
     */
    private $active;


    /**
     * Set idLugarTuristico
     *
     * @param integer $idLugarTuristico
     * @return TrLugarTuristico
     */
    public function setIdLugarTuristico($idLugarTuristico)
    {
        $this->idLugarTuristico = $idLugarTuristico;

        return $this;
    }

    /**
     * Get idLugarTuristico
     *
     * @return integer 
     */
    public function getIdLugarTuristico()
    {
        return $this->idLugarTuristico;
    }

    /**
     * Set idEmployee
     *
     * @param integer $idEmployee
     * @return TrLugarTuristico
     */
    public function setIdEmployee($idEmployee)
    {
        $this->idEmployee = $idEmployee;

        return $this;
    }

    /**
     * Get idEmployee
     *
     * @return integer 
     */
    public function getIdEmployee()
    {
        return $this->idEmployee;
    }

    /**
     * Set nombre
     *
     * @param string $nombre
     * @return TrLugarTuristico
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Get nombre
     *
     * @return string 
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set descripcionCorta
     *
     * @param string $descripcionCorta
     * @return TrLugarTuristico
     */
    public function setDescripcionCorta($descripcionCorta)
    {
        $this->descripcionCorta = $descripcionCorta;

        return $this;
    }

    /**
     * Get descripcionCorta
     *
     * @return string 
     */
    public function getDescripcionCorta()
    {
        return $this->descripcionCorta;
    }

    /**
     * Set descripcionDetallada
     *
     * @param string $descripcionDetallada
     * @return TrLugarTuristico
     */
    public function setDescripcionDetallada($descripcionDetallada)
    {
        $this->descripcionDetallada = $descripcionDetallada;

        return $this;
    }

    /**
     * Get descripcionDetallada
     *
     * @return string 
     */
    public function getDescripcionDetallada()
    {
        return $this->descripcionDetallada;
    }

    /**
     * Set leyendaCorta
     *
     * @param string $leyendaCorta
     * @return TrLugarTuristico
     */
    public function setLeyendaCorta($leyendaCorta)
    {
        $this->leyendaCorta = $leyendaCorta;

        return $this;
    }

    /**
     * Get leyendaCorta
     *
     * @return string 
     */
    public function getLeyendaCorta()
    {
        return $this->leyendaCorta;
    }

    /**
     * Set leyendaDetallada
     *
     * @param string $leyendaDetallada
     * @return TrLugarTuristico
     */
    public function setLeyendaDetallada($leyendaDetallada)
    {
        $this->leyendaDetallada = $leyendaDetallada;

        return $this;
    }

    /**
     * Get leyendaDetallada
     *
     * @return string 
     */
    public function getLeyendaDetallada()
    {
        return $this->leyendaDetallada;
    }

    /**
     * Set ubicacionExacta
     *
     * @param string $ubicacionExacta
     * @return TrLugarTuristico
     */
    public function setUbicacionExacta($ubicacionExacta)
    {
        $this->ubicacionExacta = $ubicacionExacta;

        return $this;
    }

    /**
     * Get ubicacionExacta
     *
     * @return string 
     */
    public function getUbicacionExacta()
    {
        return $this->ubicacionExacta;
    }

    /**
     * Set dateAdd
     *
     * @param \DateTime $dateAdd
     * @return TrLugarTuristico
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
     * @return TrLugarTuristico
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
     * Set active
     *
     * @param boolean $active
     * @return TrLugarTuristico
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
