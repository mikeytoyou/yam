<?php

namespace alex\yamBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TrRequiredField
 */
class TrRequiredField
{
    /**
     * @var integer
     */
    private $idRequiredField;

    /**
     * @var string
     */
    private $objectName;

    /**
     * @var string
     */
    private $fieldName;


    /**
     * Get idRequiredField
     *
     * @return integer 
     */
    public function getIdRequiredField()
    {
        return $this->idRequiredField;
    }

    /**
     * Set objectName
     *
     * @param string $objectName
     * @return TrRequiredField
     */
    public function setObjectName($objectName)
    {
        $this->objectName = $objectName;

        return $this;
    }

    /**
     * Get objectName
     *
     * @return string 
     */
    public function getObjectName()
    {
        return $this->objectName;
    }

    /**
     * Set fieldName
     *
     * @param string $fieldName
     * @return TrRequiredField
     */
    public function setFieldName($fieldName)
    {
        $this->fieldName = $fieldName;

        return $this;
    }

    /**
     * Get fieldName
     *
     * @return string 
     */
    public function getFieldName()
    {
        return $this->fieldName;
    }
}
