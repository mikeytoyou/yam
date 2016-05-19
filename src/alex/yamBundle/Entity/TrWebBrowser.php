<?php

namespace alex\yamBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TrWebBrowser
 */
class TrWebBrowser
{
    /**
     * @var integer
     */
    private $idWebBrowser;

    /**
     * @var string
     */
    private $name;


    /**
     * Get idWebBrowser
     *
     * @return integer 
     */
    public function getIdWebBrowser()
    {
        return $this->idWebBrowser;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return TrWebBrowser
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }
}
