<?php

namespace alex\yamBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TrConnectionsSource
 */
class TrConnectionsSource
{
    /**
     * @var integer
     */
    private $idConnectionsSource;

    /**
     * @var integer
     */
    private $idConnections;

    /**
     * @var string
     */
    private $httpReferer;

    /**
     * @var string
     */
    private $requestUri;

    /**
     * @var string
     */
    private $keywords;

    /**
     * @var \DateTime
     */
    private $dateAdd;


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
     * Set idConnections
     *
     * @param integer $idConnections
     * @return TrConnectionsSource
     */
    public function setIdConnections($idConnections)
    {
        $this->idConnections = $idConnections;

        return $this;
    }

    /**
     * Get idConnections
     *
     * @return integer 
     */
    public function getIdConnections()
    {
        return $this->idConnections;
    }

    /**
     * Set httpReferer
     *
     * @param string $httpReferer
     * @return TrConnectionsSource
     */
    public function setHttpReferer($httpReferer)
    {
        $this->httpReferer = $httpReferer;

        return $this;
    }

    /**
     * Get httpReferer
     *
     * @return string 
     */
    public function getHttpReferer()
    {
        return $this->httpReferer;
    }

    /**
     * Set requestUri
     *
     * @param string $requestUri
     * @return TrConnectionsSource
     */
    public function setRequestUri($requestUri)
    {
        $this->requestUri = $requestUri;

        return $this;
    }

    /**
     * Get requestUri
     *
     * @return string 
     */
    public function getRequestUri()
    {
        return $this->requestUri;
    }

    /**
     * Set keywords
     *
     * @param string $keywords
     * @return TrConnectionsSource
     */
    public function setKeywords($keywords)
    {
        $this->keywords = $keywords;

        return $this;
    }

    /**
     * Get keywords
     *
     * @return string 
     */
    public function getKeywords()
    {
        return $this->keywords;
    }

    /**
     * Set dateAdd
     *
     * @param \DateTime $dateAdd
     * @return TrConnectionsSource
     */
    public function setDateAdd($dateAdd)
    {
        $this->dateAdd = $dateAdd;

        return $this;
    }

    /**
     * Get dateAdd
     *
     * @return \DateTime 
     */
    public function getDateAdd()
    {
        return $this->dateAdd;
    }
}
