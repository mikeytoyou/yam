<?php

namespace alex\yamBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TrRequestSql
 */
class TrRequestSql
{
    /**
     * @var integer
     */
    private $idRequestSql;

    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $sql;


    /**
     * Get idRequestSql
     *
     * @return integer 
     */
    public function getIdRequestSql()
    {
        return $this->idRequestSql;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return TrRequestSql
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
     * Set sql
     *
     * @param string $sql
     * @return TrRequestSql
     */
    public function setSql($sql)
    {
        $this->sql = $sql;

        return $this;
    }

    /**
     * Get sql
     *
     * @return string 
     */
    public function getSql()
    {
        return $this->sql;
    }
}
