<?php

namespace alex\yamBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TrContactShop
 */
class TrContactShop
{
    /**
     * @var integer
     */
    private $idContact;

    /**
     * @var integer
     */
    private $idShop;


    /**
     * Set idContact
     *
     * @param integer $idContact
     * @return TrContactShop
     */
    public function setIdContact($idContact)
    {
        $this->idContact = $idContact;

        return $this;
    }

    /**
     * Get idContact
     *
     * @return integer 
     */
    public function getIdContact()
    {
        return $this->idContact;
    }

    /**
     * Set idShop
     *
     * @param integer $idShop
     * @return TrContactShop
     */
    public function setIdShop($idShop)
    {
        $this->idShop = $idShop;

        return $this;
    }

    /**
     * Get idShop
     *
     * @return integer 
     */
    public function getIdShop()
    {
        return $this->idShop;
    }
}
