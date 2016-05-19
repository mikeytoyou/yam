<?php

namespace alex\yamBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TrProductAttachment
 */
class TrProductAttachment
{
    /**
     * @var integer
     */
    private $idProduct;

    /**
     * @var integer
     */
    private $idAttachment;


    /**
     * Set idProduct
     *
     * @param integer $idProduct
     * @return TrProductAttachment
     */
    public function setIdProduct($idProduct)
    {
        $this->idProduct = $idProduct;

        return $this;
    }

    /**
     * Get idProduct
     *
     * @return integer 
     */
    public function getIdProduct()
    {
        return $this->idProduct;
    }

    /**
     * Set idAttachment
     *
     * @param integer $idAttachment
     * @return TrProductAttachment
     */
    public function setIdAttachment($idAttachment)
    {
        $this->idAttachment = $idAttachment;

        return $this;
    }

    /**
     * Get idAttachment
     *
     * @return integer 
     */
    public function getIdAttachment()
    {
        return $this->idAttachment;
    }
}
