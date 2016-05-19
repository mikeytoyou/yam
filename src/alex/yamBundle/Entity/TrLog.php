<?php

namespace alex\yamBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TrLog
 */
class TrLog
{
    /**
     * @var integer
     */
    private $idLog;

    /**
     * @var boolean
     */
    private $severity;

    /**
     * @var integer
     */
    private $errorCode;

    /**
     * @var string
     */
    private $message;

    /**
     * @var string
     */
    private $objectType;

    /**
     * @var integer
     */
    private $objectId;

    /**
     * @var integer
     */
    private $idEmployee;

    /**
     * @var \DateTime
     */
    private $dateAdd;

    /**
     * @var \DateTime
     */
    private $dateUpd;


    /**
     * Get idLog
     *
     * @return integer 
     */
    public function getIdLog()
    {
        return $this->idLog;
    }

    /**
     * Set severity
     *
     * @param boolean $severity
     * @return TrLog
     */
    public function setSeverity($severity)
    {
        $this->severity = $severity;

        return $this;
    }

    /**
     * Get severity
     *
     * @return boolean 
     */
    public function getSeverity()
    {
        return $this->severity;
    }

    /**
     * Set errorCode
     *
     * @param integer $errorCode
     * @return TrLog
     */
    public function setErrorCode($errorCode)
    {
        $this->errorCode = $errorCode;

        return $this;
    }

    /**
     * Get errorCode
     *
     * @return integer 
     */
    public function getErrorCode()
    {
        return $this->errorCode;
    }

    /**
     * Set message
     *
     * @param string $message
     * @return TrLog
     */
    public function setMessage($message)
    {
        $this->message = $message;

        return $this;
    }

    /**
     * Get message
     *
     * @return string 
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * Set objectType
     *
     * @param string $objectType
     * @return TrLog
     */
    public function setObjectType($objectType)
    {
        $this->objectType = $objectType;

        return $this;
    }

    /**
     * Get objectType
     *
     * @return string 
     */
    public function getObjectType()
    {
        return $this->objectType;
    }

    /**
     * Set objectId
     *
     * @param integer $objectId
     * @return TrLog
     */
    public function setObjectId($objectId)
    {
        $this->objectId = $objectId;

        return $this;
    }

    /**
     * Get objectId
     *
     * @return integer 
     */
    public function getObjectId()
    {
        return $this->objectId;
    }

    /**
     * Set idEmployee
     *
     * @param integer $idEmployee
     * @return TrLog
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
     * @return TrLog
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

    /**
     * Set dateUpd
     *
     * @param \DateTime $dateUpd
     * @return TrLog
     */
    public function setDateUpd($dateUpd)
    {
        $this->dateUpd = $dateUpd;

        return $this;
    }

    /**
     * Get dateUpd
     *
     * @return \DateTime 
     */
    public function getDateUpd()
    {
        return $this->dateUpd;
    }
}
