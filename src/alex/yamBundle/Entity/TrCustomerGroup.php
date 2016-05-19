<?php

namespace alex\yamBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TrCustomerGroup
 */
class TrCustomerGroup
{
    /**
     * @var integer
     */
    private $idCustomer;

    /**
     * @var integer
     */
    private $idGroup;


    /**
     * Set idCustomer
     *
     * @param integer $idCustomer
     * @return TrCustomerGroup
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

    /**
     * Set idGroup
     *
     * @param integer $idGroup
     * @return TrCustomerGroup
     */
    public function setIdGroup($idGroup)
    {
        $this->idGroup = $idGroup;

        return $this;
    }

    /**
     * Get idGroup
     *
     * @return integer 
     */
    public function getIdGroup()
    {
        return $this->idGroup;
    }
}
