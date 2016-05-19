<?php

namespace alex\yamBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TrCustomerMessage
 */
class TrCustomerMessage
{
    /**
     * @var integer
     */
    private $idCustomerMessage;

    /**
     * @var integer
     */
    private $idCustomerThread;

    /**
     * @var integer
     */
    private $idEmployee;

    /**
     * @var string
     */
    private $message;

    /**
     * @var string
     */
    private $fileName;

    /**
     * @var string
     */
    private $ipAddress;

    /**
     * @var string
     */
    private $userAgent;

    /**
     * @var \DateTime
     */
    private $dateAdd;

    /**
     * @var \DateTime
     */
    private $dateUpd;

    /**
     * @var boolean
     */
    private $private;

    /**
     * @var boolean
     */
    private $read;


    /**
     * Get idCustomerMessage
     *
     * @return integer 
     */
    public function getIdCustomerMessage()
    {
        return $this->idCustomerMessage;
    }

    /**
     * Set idCustomerThread
     *
     * @param integer $idCustomerThread
     * @return TrCustomerMessage
     */
    public function setIdCustomerThread($idCustomerThread)
    {
        $this->idCustomerThread = $idCustomerThread;

        return $this;
    }

    /**
     * Get idCustomerThread
     *
     * @return integer 
     */
    public function getIdCustomerThread()
    {
        return $this->idCustomerThread;
    }

    /**
     * Set idEmployee
     *
     * @param integer $idEmployee
     * @return TrCustomerMessage
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
     * Set message
     *
     * @param string $message
     * @return TrCustomerMessage
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
     * Set fileName
     *
     * @param string $fileName
     * @return TrCustomerMessage
     */
    public function setFileName($fileName)
    {
        $this->fileName = $fileName;

        return $this;
    }

    /**
     * Get fileName
     *
     * @return string 
     */
    public function getFileName()
    {
        return $this->fileName;
    }

    /**
     * Set ipAddress
     *
     * @param string $ipAddress
     * @return TrCustomerMessage
     */
    public function setIpAddress($ipAddress)
    {
        $this->ipAddress = $ipAddress;

        return $this;
    }

    /**
     * Get ipAddress
     *
     * @return string 
     */
    public function getIpAddress()
    {
        return $this->ipAddress;
    }

    /**
     * Set userAgent
     *
     * @param string $userAgent
     * @return TrCustomerMessage
     */
    public function setUserAgent($userAgent)
    {
        $this->userAgent = $userAgent;

        return $this;
    }

    /**
     * Get userAgent
     *
     * @return string 
     */
    public function getUserAgent()
    {
        return $this->userAgent;
    }

    /**
     * Set dateAdd
     *
     * @param \DateTime $dateAdd
     * @return TrCustomerMessage
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
     * @return TrCustomerMessage
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

    /**
     * Set private
     *
     * @param boolean $private
     * @return TrCustomerMessage
     */
    public function setPrivate($private)
    {
        $this->private = $private;

        return $this;
    }

    /**
     * Get private
     *
     * @return boolean 
     */
    public function getPrivate()
    {
        return $this->private;
    }

    /**
     * Set read
     *
     * @param boolean $read
     * @return TrCustomerMessage
     */
    public function setRead($read)
    {
        $this->read = $read;

        return $this;
    }

    /**
     * Get read
     *
     * @return boolean 
     */
    public function getRead()
    {
        return $this->read;
    }
}
