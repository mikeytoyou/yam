<?php

namespace alex\yamBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TrCaja
 */
class TrCaja
{
    /**
     * @var integer
     */
    private $idCaja;

    /**
     * @var integer
     */
    private $idEmpleado;

    /**
     * @var integer
     */
    private $idTienda;

    /**
     * @var string
     */
    private $nombreCaja;

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
     * Get idCaja
     *
     * @return integer 
     */
    public function getIdCaja()
    {
        return $this->idCaja;
    }

    /**
     * Set idEmpleado
     *
     * @param integer $idEmpleado
     * @return TrCaja
     */
    public function setIdEmpleado($idEmpleado)
    {
        $this->idEmpleado = $idEmpleado;

        return $this;
    }

    /**
     * Get idEmpleado
     *
     * @return integer 
     */
    public function getIdEmpleado()
    {
        return $this->idEmpleado;
    }

    /**
     * Set idTienda
     *
     * @param integer $idTienda
     * @return TrCaja
     */
    public function setIdTienda($idTienda)
    {
        $this->idTienda = $idTienda;

        return $this;
    }

    /**
     * Get idTienda
     *
     * @return integer 
     */
    public function getIdTienda()
    {
        return $this->idTienda;
    }

    /**
     * Set nombreCaja
     *
     * @param string $nombreCaja
     * @return TrCaja
     */
    public function setNombreCaja($nombreCaja)
    {
        $this->nombreCaja = $nombreCaja;

        return $this;
    }

    /**
     * Get nombreCaja
     *
     * @return string 
     */
    public function getNombreCaja()
    {
        return $this->nombreCaja;
    }

    /**
     * Set dateAdd
     *
     * @param \DateTime $dateAdd
     * @return TrCaja
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
     * @return TrCaja
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
     * @return TrCaja
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
