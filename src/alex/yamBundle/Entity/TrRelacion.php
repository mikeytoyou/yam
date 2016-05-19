<?php

namespace alex\yamBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TrRelacion
 */
class TrRelacion
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var integer
     */
    private $idAnterior;


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
     * Set idAnterior
     *
     * @param integer $idAnterior
     * @return TrRelacion
     */
    public function setIdAnterior($idAnterior)
    {
        $this->idAnterior = $idAnterior;

        return $this;
    }

    /**
     * Get idAnterior
     *
     * @return integer 
     */
    public function getIdAnterior()
    {
        return $this->idAnterior;
    }
}
