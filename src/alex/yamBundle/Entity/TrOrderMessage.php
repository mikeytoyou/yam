<?php

namespace alex\yamBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TrOrderMessage
 */
class TrOrderMessage
{
    /**
     * @var integer
     */
    private $idOrderMessage;

    /**
     * @var \DateTime
     */
    private $dateAdd;


    /**
     * Get idOrderMessage
     *
     * @return integer 
     */
    public function getIdOrderMessage()
    {
        return $this->idOrderMessage;
    }

    /**
     * Set dateAdd
     *
     * @param \DateTime $dateAdd
     * @return TrOrderMessage
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
