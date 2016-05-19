<?php

namespace alex\yamBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TrTipodocumento
 */
class TrTipodocumento
{
    /**
     * @var integer
     */
    private $idTipodocumento;

    /**
     * @var string
     */
    private $nombre;

    /**
     * @var string
     */
    private $descripcion;


    /**
     * Get idTipodocumento
     *
     * @return integer 
     */
    public function getIdTipodocumento()
    {
        return $this->idTipodocumento;
    }

    /**
     * Set nombre
     *
     * @param string $nombre
     * @return TrTipodocumento
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
     * Set descripcion
     *
     * @param string $descripcion
     * @return TrTipodocumento
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
}
