<?php

namespace alex\yamBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TrAttachment
 */
class TrAttachment
{
    /**
     * @var integer
     */
    private $idAttachment;

    /**
     * @var string
     */
    private $file;

    /**
     * @var string
     */
    private $fileName;

    /**
     * @var integer
     */
    private $fileSize;

    /**
     * @var string
     */
    private $mime;


    /**
     * Get idAttachment
     *
     * @return integer 
     */
    public function getIdAttachment()
    {
        return $this->idAttachment;
    }

    /**
     * Set file
     *
     * @param string $file
     * @return TrAttachment
     */
    public function setFile($file)
    {
        $this->file = $file;

        return $this;
    }

    /**
     * Get file
     *
     * @return string 
     */
    public function getFile()
    {
        return $this->file;
    }

    /**
     * Set fileName
     *
     * @param string $fileName
     * @return TrAttachment
     */
    public function setFileName($fileName)
    {
        $this->fileName = $fileName;

        return $this;
    }

    /**
     * Get fileName
     *
     * @return string 
     */
    public function getFileName()
    {
        return $this->fileName;
    }

    /**
     * Set fileSize
     *
     * @param integer $fileSize
     * @return TrAttachment
     */
    public function setFileSize($fileSize)
    {
        $this->fileSize = $fileSize;

        return $this;
    }

    /**
     * Get fileSize
     *
     * @return integer 
     */
    public function getFileSize()
    {
        return $this->fileSize;
    }

    /**
     * Set mime
     *
     * @param string $mime
     * @return TrAttachment
     */
    public function setMime($mime)
    {
        $this->mime = $mime;

        return $this;
    }

    /**
     * Get mime
     *
     * @return string 
     */
    public function getMime()
    {
        return $this->mime;
    }
}
