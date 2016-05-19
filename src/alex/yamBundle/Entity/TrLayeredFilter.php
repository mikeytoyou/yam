<?php

namespace alex\yamBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TrLayeredFilter
 */
class TrLayeredFilter
{
    /**
     * @var integer
     */
    private $idLayeredFilter;

    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $filters;

    /**
     * @var integer
     */
    private $nCategories;

    /**
     * @var \DateTime
     */
    private $dateAdd;


    /**
     * Get idLayeredFilter
     *
     * @return integer 
     */
    public function getIdLayeredFilter()
    {
        return $this->idLayeredFilter;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return TrLayeredFilter
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
     * Set filters
     *
     * @param string $filters
     * @return TrLayeredFilter
     */
    public function setFilters($filters)
    {
        $this->filters = $filters;

        return $this;
    }

    /**
     * Get filters
     *
     * @return string 
     */
    public function getFilters()
    {
        return $this->filters;
    }

    /**
     * Set nCategories
     *
     * @param integer $nCategories
     * @return TrLayeredFilter
     */
    public function setNCategories($nCategories)
    {
        $this->nCategories = $nCategories;

        return $this;
    }

    /**
     * Get nCategories
     *
     * @return integer 
     */
    public function getNCategories()
    {
        return $this->nCategories;
    }

    /**
     * Set dateAdd
     *
     * @param \DateTime $dateAdd
     * @return TrLayeredFilter
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
