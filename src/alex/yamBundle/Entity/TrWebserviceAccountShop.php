<?php

namespace alex\yamBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TrWebserviceAccountShop
 */
class TrWebserviceAccountShop
{
    /**
     * @var integer
     */
    private $idWebserviceAccount;

    /**
     * @var integer
     */
    private $idShop;


    /**
     * Set idWebserviceAccount
     *
     * @param integer $idWebserviceAccount
     * @return TrWebserviceAccountShop
     */
    public function setIdWebserviceAccount($idWebserviceAccount)
    {
        $this->idWebserviceAccount = $idWebserviceAccount;

        return $this;
    }

    /**
     * Get idWebserviceAccount
     *
     * @return integer 
     */
    public function getIdWebserviceAccount()
    {
        return $this->idWebserviceAccount;
    }

    /**
     * Set idShop
     *
     * @param integer $idShop
     * @return TrWebserviceAccountShop
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
