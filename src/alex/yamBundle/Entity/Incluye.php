<?php

namespace alex\yamBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Incluye
 */
class Incluye
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $nombre;

    /**
     * @var string
     */
    private $valor;

    /**
     * @var \alex\yamBundle\Entity\Paquete
     */
    private $paquete;


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
     * Set nombre
     *
     * @param string $nombre
     * @return Incluye
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
     * Set valor
     *
     * @param string $valor
     * @return Incluye
     */
    public function setValor($valor)
    {
        $this->valor = $valor;

        return $this;
    }

    /**
     * Get valor
     *
     * @return string 
     */
    public function getValor()
    {
        return $this->valor;
    }

    /**
     * Set paquete
     *
     * @param \alex\yamBundle\Entity\Paquete $paquete
     * @return Incluye
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
