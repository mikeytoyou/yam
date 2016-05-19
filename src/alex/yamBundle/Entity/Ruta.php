<?php

namespace alex\yamBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Ruta
 */
class Ruta
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var integer
     */
    private $idPaquete;

    /**
     * @var string
     */
    private $lugares;


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
     * Set idPaquete
     *
     * @param integer $idPaquete
     * @return Ruta
     */
    public function setIdPaquete($idPaquete)
    {
        $this->idPaquete = $idPaquete;

        return $this;
    }

    /**
     * Get idPaquete
     *
     * @return integer 
     */
    public function getIdPaquete()
    {
        return $this->idPaquete;
    }

    /**
     * Set lugares
     *
     * @param string $lugares
     * @return Ruta
     */
    public function setLugares($lugares)
    {
        $this->lugares = $lugares;

        return $this;
    }

    /**
     * Get lugares
     *
     * @return string 
     */
    public function getLugares()
    {
        return $this->lugares;
    }
    /**
     * @var \alex\yamBundle\Entity\Paquete
     */
    private $Paquete;


    /**
     * Set Paquete
     *
     * @param \alex\yamBundle\Entity\Paquete $paquete
     * @return Ruta
     */
    public function setPaquete(\alex\yamBundle\Entity\Paquete $paquete = null)
    {
        $this->Paquete = $paquete;

        return $this;
    }

    /**
     * Get Paquete
     *
     * @return \alex\yamBundle\Entity\Paquete 
     */
    public function getPaquete()
    {
        return $this->Paquete;
    }
}
