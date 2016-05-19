<?php

namespace alex\yamBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TrAddressFormat
 */
class TrAddressFormat
{
    /**
     * @var integer
     */
    private $idCountry;

    /**
     * @var string
     */
    private $format;


    /**
     * Get idCountry
     *
     * @return integer 
     */
    public function getIdCountry()
    {
        return $this->idCountry;
    }

    /**
     * Set format
     *
     * @param string $format
     * @return TrAddressFormat
     */
    public function setFormat($format)
    {
        $this->format = $format;

        return $this;
    }

    /**
     * Get format
     *
     * @return string 
     */
    public function getFormat()
    {
        return $this->format;
    }
}
