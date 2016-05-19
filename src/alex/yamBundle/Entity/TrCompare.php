<?php

namespace alex\yamBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TrCompare
 */
class TrCompare
{
    /**
     * @var integer
     */
    private $idCompare;

    /**
     * @var integer
     */
    private $idCustomer;


    /**
     * Get idCompare
     *
     * @return integer 
     */
    public function getIdCompare()
    {
        return $this->idCompare;
    }

    /**
     * Set idCustomer
     *
     * @param integer $idCustomer
     * @return TrCompare
     */
    public function setIdCustomer($idCustomer)
    {
        $this->idCustomer = $idCustomer;

        return $this;
    }

    /**
     * Get idCustomer
     *
     * @return integer 
     */
    public function getIdCustomer()
    {
        return $this->idCustomer;
    }
}
