<?php

namespace alex\yamBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TrConnectionsPage
 */
class TrConnectionsPage
{
    /**
     * @var integer
     */
    private $idConnections;

    /**
     * @var integer
     */
    private $idPage;

    /**
     * @var \DateTime
     */
    private $timeStart;

    /**
     * @var \DateTime
     */
    private $timeEnd;


    /**
     * Set idConnections
     *
     * @param integer $idConnections
     * @return TrConnectionsPage
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
     * Set idPage
     *
     * @param integer $idPage
     * @return TrConnectionsPage
     */
    public function setIdPage($idPage)
    {
        $this->idPage = $idPage;

        return $this;
    }

    /**
     * Get idPage
     *
     * @return integer 
     */
    public function getIdPage()
    {
        return $this->idPage;
    }

    /**
     * Set timeStart
     *
     * @param \DateTime $timeStart
     * @return TrConnectionsPage
     */
    public function setTimeStart($timeStart)
    {
        $this->timeStart = $timeStart;

        return $this;
    }

    /**
     * Get timeStart
     *
     * @return \DateTime 
     */
    public function getTimeStart()
    {
        return $this->timeStart;
    }

    /**
     * Set timeEnd
     *
     * @param \DateTime $timeEnd
     * @return TrConnectionsPage
     */
    public function setTimeEnd($timeEnd)
    {
        $this->timeEnd = $timeEnd;

        return $this;
    }

    /**
     * Get timeEnd
     *
     * @return \DateTime 
     */
    public function getTimeEnd()
    {
        return $this->timeEnd;
    }
}
