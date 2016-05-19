<?php

namespace alex\yamBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TrActualizaTabla
 */
class TrActualizaTabla
{
    /**
     * @var integer
     */
    private $idActualiza;

    /**
     * @var string
     */
    private $tabla;

    /**
     * @var string
     */
    private $estado;


    /**
     * Get idActualiza
     *
     * @return integer 
     */
    public function getIdActualiza()
    {
        return $this->idActualiza;
    }

    /**
     * Set tabla
     *
     * @param string $tabla
     * @return TrActualizaTabla
     */
    public function setTabla($tabla)
    {
        $this->tabla = $tabla;

        return $this;
    }

    /**
     * Get tabla
     *
     * @return string 
     */
    public function getTabla()
    {
        return $this->tabla;
    }

    /**
     * Set estado
     *
     * @param string $estado
     * @return TrActualizaTabla
     */
    public function setEstado($estado)
    {
        $this->estado = $estado;

        return $this;
    }

    /**
     * Get estado
     *
     * @return string 
     */
    public function getEstado()
    {
        return $this->estado;
    }
}
