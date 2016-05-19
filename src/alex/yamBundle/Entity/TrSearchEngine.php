<?php

namespace alex\yamBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TrSearchEngine
 */
class TrSearchEngine
{
    /**
     * @var integer
     */
    private $idSearchEngine;

    /**
     * @var string
     */
    private $server;

    /**
     * @var string
     */
    private $getvar;


    /**
     * Get idSearchEngine
     *
     * @return integer 
     */
    public function getIdSearchEngine()
    {
        return $this->idSearchEngine;
    }

    /**
     * Set server
     *
     * @param string $server
     * @return TrSearchEngine
     */
    public function setServer($server)
    {
        $this->server = $server;

        return $this;
    }

    /**
     * Get server
     *
     * @return string 
     */
    public function getServer()
    {
        return $this->server;
    }

    /**
     * Set getvar
     *
     * @param string $getvar
     * @return TrSearchEngine
     */
    public function setGetvar($getvar)
    {
        $this->getvar = $getvar;

        return $this;
    }

    /**
     * Get getvar
     *
     * @return string 
     */
    public function getGetvar()
    {
        return $this->getvar;
    }
}
