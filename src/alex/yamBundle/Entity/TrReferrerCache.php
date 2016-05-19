<?php

namespace alex\yamBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TrReferrerCache
 */
class TrReferrerCache
{
    /**
     * @var integer
     */
    private $idConnectionsSource;

    /**
     * @var integer
     */
    private $idReferrer;


    /**
     * Set idConnectionsSource
     *
     * @param integer $idConnectionsSource
     * @return TrReferrerCache
     */
    public function setIdConnectionsSource($idConnectionsSource)
    {
        $this->idConnectionsSource = $idConnectionsSource;

        return $this;
    }

    /**
     * Get idConnectionsSource
     *
     * @return integer 
     */
    public function getIdConnectionsSource()
    {
        return $this->idConnectionsSource;
    }

    /**
     * Set idReferrer
     *
     * @param integer $idReferrer
     * @return TrReferrerCache
     */
    public function setIdReferrer($idReferrer)
    {
        $this->idReferrer = $idReferrer;

        return $this;
    }

    /**
     * Get idReferrer
     *
     * @return integer 
     */
    public function getIdReferrer()
    {
        return $this->idReferrer;
    }
}
