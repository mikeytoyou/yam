<?php

namespace alex\yamBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TrImportMatch
 */
class TrImportMatch
{
    /**
     * @var integer
     */
    private $idImportMatch;

    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $match;

    /**
     * @var integer
     */
    private $skip;


    /**
     * Get idImportMatch
     *
     * @return integer 
     */
    public function getIdImportMatch()
    {
        return $this->idImportMatch;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return TrImportMatch
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

    /**
     * Set match
     *
     * @param string $match
     * @return TrImportMatch
     */
    public function setMatch($match)
    {
        $this->match = $match;

        return $this;
    }

    /**
     * Get match
     *
     * @return string 
     */
    public function getMatch()
    {
        return $this->match;
    }

    /**
     * Set skip
     *
     * @param integer $skip
     * @return TrImportMatch
     */
    public function setSkip($skip)
    {
        $this->skip = $skip;

        return $this;
    }

    /**
     * Get skip
     *
     * @return integer 
     */
    public function getSkip()
    {
        return $this->skip;
    }
}
