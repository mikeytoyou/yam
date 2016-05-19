<?php

namespace alex\yamBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TrContact
 */
class TrContact
{
    /**
     * @var integer
     */
    private $idContact;

    /**
     * @var string
     */
    private $email;

    /**
     * @var boolean
     */
    private $customerService;

    /**
     * @var boolean
     */
    private $position;


    /**
     * Get idContact
     *
     * @return integer 
     */
    public function getIdContact()
    {
        return $this->idContact;
    }

    /**
     * Set email
     *
     * @param string $email
     * @return TrContact
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string 
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set customerService
     *
     * @param boolean $customerService
     * @return TrContact
     */
    public function setCustomerService($customerService)
    {
        $this->customerService = $customerService;

        return $this;
    }

    /**
     * Get customerService
     *
     * @return boolean 
     */
    public function getCustomerService()
    {
        return $this->customerService;
    }

    /**
     * Set position
     *
     * @param boolean $position
     * @return TrContact
     */
    public function setPosition($position)
    {
        $this->position = $position;

        return $this;
    }

    /**
     * Get position
     *
     * @return boolean 
     */
    public function getPosition()
    {
        return $this->position;
    }
}
