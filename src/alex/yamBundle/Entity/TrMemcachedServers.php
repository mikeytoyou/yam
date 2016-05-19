<?php

namespace alex\yamBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TrMemcachedServers
 */
class TrMemcachedServers
{
    /**
     * @var integer
     */
    private $idMemcachedServer;

    /**
     * @var string
     */
    private $ip;

    /**
     * @var integer
     */
    private $port;

    /**
     * @var integer
     */
    private $weight;


    /**
     * Get idMemcachedServer
     *
     * @return integer 
     */
    public function getIdMemcachedServer()
    {
        return $this->idMemcachedServer;
    }

    /**
     * Set ip
     *
     * @param string $ip
     * @return TrMemcachedServers
     */
    public function setIp($ip)
    {
        $this->ip = $ip;

        return $this;
    }

    /**
     * Get ip
     *
     * @return string 
     */
    public function getIp()
    {
        return $this->ip;
    }

    /**
     * Set port
     *
     * @param integer $port
     * @return TrMemcachedServers
     */
    public function setPort($port)
    {
        $this->port = $port;

        return $this;
    }

    /**
     * Get port
     *
     * @return integer 
     */
    public function getPort()
    {
        return $this->port;
    }

    /**
     * Set weight
     *
     * @param integer $weight
     * @return TrMemcachedServers
     */
    public function setWeight($weight)
    {
        $this->weight = $weight;

        return $this;
    }

    /**
     * Get weight
     *
     * @return integer 
     */
    public function getWeight()
    {
        return $this->weight;
    }
}
