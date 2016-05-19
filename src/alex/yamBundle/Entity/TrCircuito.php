<?php

namespace alex\yamBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TrCircuito
 */
class TrCircuito
{
    /**
     * @var integer
     */
    private $idCircuito;

    /**
     * @var integer
     */
    private $idEmployee;

    /**
     * @var integer
     */
    private $idDepartamento;

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
     * @var boolean
     */
    private $active;

    /**
     * @var string
     */
    private $recorrido;

    /**
     * @var \DateTime
     */
    private $dateAdd;

    /**
     * @var \DateTime
     */
    private $dateUpd;


    /**
     * Set idCircuito
     *
     * @param integer $idCircuito
     * @return TrCircuito
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
     * Set idEmployee
     *
     * @param integer $idEmployee
     * @return TrCircuito
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
     * Set idDepartamento
     *
     * @param integer $idDepartamento
     * @return TrCircuito
     */
    public function setIdDepartamento($idDepartamento)
    {
        $this->idDepartamento = $idDepartamento;

        return $this;
    }

    /**
     * Get idDepartamento
     *
     * @return integer 
     */
    public function getIdDepartamento()
    {
        return $this->idDepartamento;
    }

    /**
     * Set nombre
     *
     * @param string $nombre
     * @return TrCircuito
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
     * @return TrCircuito
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
     * @return TrCircuito
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
     * Set active
     *
     * @param boolean $active
     * @return TrCircuito
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

    /**
     * Set recorrido
     *
     * @param string $recorrido
     * @return TrCircuito
     */
    public function setRecorrido($recorrido)
    {
        $this->recorrido = $recorrido;

        return $this;
    }

    /**
     * Get recorrido
     *
     * @return string 
     */
    public function getRecorrido()
    {
        return $this->recorrido;
    }

    /**
     * Set dateAdd
     *
     * @param \DateTime $dateAdd
     * @return TrCircuito
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
     * @return TrCircuito
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
