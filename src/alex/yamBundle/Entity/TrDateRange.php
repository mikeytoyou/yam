<?php

namespace alex\yamBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TrDateRange
 */
class TrDateRange
{
    /**
     * @var integer
     */
    private $idDateRange;

    /**
     * @var \DateTime
     */
    private $timeStart;

    /**
     * @var \DateTime
     */
    private $timeEnd;


    /**
     * Get idDateRange
     *
     * @return integer 
     */
    public function getIdDateRange()
    {
        return $this->idDateRange;
    }

    /**
     * Set timeStart
     *
     * @param \DateTime $timeStart
     * @return TrDateRange
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
     * @return TrDateRange
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
