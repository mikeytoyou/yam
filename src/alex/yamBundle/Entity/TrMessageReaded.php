<?php

namespace alex\yamBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TrMessageReaded
 */
class TrMessageReaded
{
    /**
     * @var integer
     */
    private $idMessage;

    /**
     * @var integer
     */
    private $idEmployee;

    /**
     * @var \DateTime
     */
    private $dateAdd;


    /**
     * Set idMessage
     *
     * @param integer $idMessage
     * @return TrMessageReaded
     */
    public function setIdMessage($idMessage)
    {
        $this->idMessage = $idMessage;

        return $this;
    }

    /**
     * Get idMessage
     *
     * @return integer 
     */
    public function getIdMessage()
    {
        return $this->idMessage;
    }

    /**
     * Set idEmployee
     *
     * @param integer $idEmployee
     * @return TrMessageReaded
     */
    public function setIdEmployee($idEmployee)
    {
        $this->idEmployee = $idEmployee;

        return $this;
    }

    /**
     * Get idEmployee
     *
     * @return integer 
     */
    public function getIdEmployee()
    {
        return $this->idEmployee;
    }

    /**
     * Set dateAdd
     *
     * @param \DateTime $dateAdd
     * @return TrMessageReaded
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
