<?php

namespace alex\yamBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TrCustomerMessageSyncImap
 */
class TrCustomerMessageSyncImap
{
    /**
     * @var string
     */
    private $md5Header;


    /**
     * Get md5Header
     *
     * @return string 
     */
    public function getMd5Header()
    {
        return $this->md5Header;
    }
}
