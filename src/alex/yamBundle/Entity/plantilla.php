<?php

namespace alex\yamBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * plantilla
 */
class plantilla
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $textoenriquecido;

    /**
     * @var \DateTime
     */
    private $fechacreada;

    /**
     * @var string
     */
    private $tipo;


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
     * Set textoenriquecido
     *
     * @param string $textoenriquecido
     * @return plantilla
     */
    public function setTextoenriquecido($textoenriquecido)
    {
        $this->textoenriquecido = $textoenriquecido;

        return $this;
    }

    /**
     * Get textoenriquecido
     *
     * @return string 
     */
    public function getTextoenriquecido()
    {
        return $this->textoenriquecido;
    }

    /**
     * Set fechacreada
     *
     * @param \DateTime $fechacreada
     * @return plantilla
     */
    public function setFechacreada($fechacreada)
    {
        $this->fechacreada = $fechacreada;

        return $this;
    }

    /**
     * Get fechacreada
     *
     * @return \DateTime 
     */
    public function getFechacreada()
    {
        return $this->fechacreada;
    }

    /**
     * Set tipo
     *
     * @param string $tipo
     * @return plantilla
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
     * @var string
     */
    private $nombre;


    /**
     * Set nombre
     *
     * @param string $nombre
     * @return plantilla
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
}
