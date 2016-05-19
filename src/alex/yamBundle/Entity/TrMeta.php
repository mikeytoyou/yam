<?php

namespace alex\yamBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TrMeta
 */
class TrMeta
{
    /**
     * @var integer
     */
    private $idMeta;

    /**
     * @var string
     */
    private $page;

    /**
     * @var boolean
     */
    private $configurable;


    /**
     * Get idMeta
     *
     * @return integer 
     */
    public function getIdMeta()
    {
        return $this->idMeta;
    }

    /**
     * Set page
     *
     * @param string $page
     * @return TrMeta
     */
    public function setPage($page)
    {
        $this->page = $page;

        return $this;
    }

    /**
     * Get page
     *
     * @return string 
     */
    public function getPage()
    {
        return $this->page;
    }

    /**
     * Set configurable
     *
     * @param boolean $configurable
     * @return TrMeta
     */
    public function setConfigurable($configurable)
    {
        $this->configurable = $configurable;

        return $this;
    }

    /**
     * Get configurable
     *
     * @return boolean 
     */
    public function getConfigurable()
    {
        return $this->configurable;
    }
}
