<?php

namespace alex\yamBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TrStockMvtReason
 */
class TrStockMvtReason
{
    /**
     * @var integer
     */
    private $idStockMvtReason;

    /**
     * @var boolean
     */
    private $sign;

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
    private $deleted;


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
     * Set sign
     *
     * @param boolean $sign
     * @return TrStockMvtReason
     */
    public function setSign($sign)
    {
        $this->sign = $sign;

        return $this;
    }

    /**
     * Get sign
     *
     * @return boolean 
     */
    public function getSign()
    {
        return $this->sign;
    }

    /**
     * Set dateAdd
     *
     * @param \DateTime $dateAdd
     * @return TrStockMvtReason
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
     * @return TrStockMvtReason
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
     * Set deleted
     *
     * @param boolean $deleted
     * @return TrStockMvtReason
     */
    public function setDeleted($deleted)
    {
        $this->deleted = $deleted;

        return $this;
    }

    /**
     * Get deleted
     *
     * @return boolean 
     */
    public function getDeleted()
    {
        return $this->deleted;
    }
}
