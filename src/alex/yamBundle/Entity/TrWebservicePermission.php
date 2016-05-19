<?php

namespace alex\yamBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TrWebservicePermission
 */
class TrWebservicePermission
{
    /**
     * @var integer
     */
    private $idWebservicePermission;

    /**
     * @var string
     */
    private $resource;

    /**
     * @var string
     */
    private $method;

    /**
     * @var integer
     */
    private $idWebserviceAccount;


    /**
     * Get idWebservicePermission
     *
     * @return integer 
     */
    public function getIdWebservicePermission()
    {
        return $this->idWebservicePermission;
    }

    /**
     * Set resource
     *
     * @param string $resource
     * @return TrWebservicePermission
     */
    public function setResource($resource)
    {
        $this->resource = $resource;

        return $this;
    }

    /**
     * Get resource
     *
     * @return string 
     */
    public function getResource()
    {
        return $this->resource;
    }

    /**
     * Set method
     *
     * @param string $method
     * @return TrWebservicePermission
     */
    public function setMethod($method)
    {
        $this->method = $method;

        return $this;
    }

    /**
     * Get method
     *
     * @return string 
     */
    public function getMethod()
    {
        return $this->method;
    }

    /**
     * Set idWebserviceAccount
     *
     * @param integer $idWebserviceAccount
     * @return TrWebservicePermission
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
}
