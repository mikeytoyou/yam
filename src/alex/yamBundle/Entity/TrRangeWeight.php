<?php

namespace alex\yamBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TrRangeWeight
 */
class TrRangeWeight
{
    /**
     * @var integer
     */
    private $idRangeWeight;

    /**
     * @var integer
     */
    private $idCarrier;

    /**
     * @var string
     */
    private $delimiter1;

    /**
     * @var string
     */
    private $delimiter2;


    /**
     * Get idRangeWeight
     *
     * @return integer 
     */
    public function getIdRangeWeight()
    {
        return $this->idRangeWeight;
    }

    /**
     * Set idCarrier
     *
     * @param integer $idCarrier
     * @return TrRangeWeight
     */
    public function setIdCarrier($idCarrier)
    {
        $this->idCarrier = $idCarrier;

        return $this;
    }

    /**
     * Get idCarrier
     *
     * @return integer 
     */
    public function getIdCarrier()
    {
        return $this->idCarrier;
    }

    /**
     * Set delimiter1
     *
     * @param string $delimiter1
     * @return TrRangeWeight
     */
    public function setDelimiter1($delimiter1)
    {
        $this->delimiter1 = $delimiter1;

        return $this;
    }

    /**
     * Get delimiter1
     *
     * @return string 
     */
    public function getDelimiter1()
    {
        return $this->delimiter1;
    }

    /**
     * Set delimiter2
     *
     * @param string $delimiter2
     * @return TrRangeWeight
     */
    public function setDelimiter2($delimiter2)
    {
        $this->delimiter2 = $delimiter2;

        return $this;
    }

    /**
     * Get delimiter2
     *
     * @return string 
     */
    public function getDelimiter2()
    {
        return $this->delimiter2;
    }
}
