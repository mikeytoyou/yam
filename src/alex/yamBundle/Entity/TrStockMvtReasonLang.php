<?php

namespace alex\yamBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TrStockMvtReasonLang
 */
class TrStockMvtReasonLang
{
    /**
     * @var integer
     */
    private $idStockMvtReason;

    /**
     * @var integer
     */
    private $idLang;

    /**
     * @var string
     */
    private $name;


    /**
     * Set idStockMvtReason
     *
     * @param integer $idStockMvtReason
     * @return TrStockMvtReasonLang
     */
    public function setIdStockMvtReason($idStockMvtReason)
    {
        $this->idStockMvtReason = $idStockMvtReason;

        return $this;
    }

    /**
     * Get idStockMvtReason
     *
     * @return integer 
     */
    public function getIdStockMvtReason()
    {
        return $this->idStockMvtReason;
    }

    /**
     * Set idLang
     *
     * @param integer $idLang
     * @return TrStockMvtReasonLang
     */
    public function setIdLang($idLang)
    {
        $this->idLang = $idLang;

        return $this;
    }

    /**
     * Get idLang
     *
     * @return integer 
     */
    public function getIdLang()
    {
        return $this->idLang;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return TrStockMvtReasonLang
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
