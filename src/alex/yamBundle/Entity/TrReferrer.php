<?php

namespace alex\yamBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TrReferrer
 */
class TrReferrer
{
    /**
     * @var integer
     */
    private $idReferrer;

    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $passwd;

    /**
     * @var string
     */
    private $httpRefererRegexp;

    /**
     * @var string
     */
    private $httpRefererLike;

    /**
     * @var string
     */
    private $requestUriRegexp;

    /**
     * @var string
     */
    private $requestUriLike;

    /**
     * @var string
     */
    private $httpRefererRegexpNot;

    /**
     * @var string
     */
    private $httpRefererLikeNot;

    /**
     * @var string
     */
    private $requestUriRegexpNot;

    /**
     * @var string
     */
    private $requestUriLikeNot;

    /**
     * @var string
     */
    private $baseFee;

    /**
     * @var string
     */
    private $percentFee;

    /**
     * @var string
     */
    private $clickFee;

    /**
     * @var \DateTime
     */
    private $dateAdd;


    /**
     * Get idReferrer
     *
     * @return integer 
     */
    public function getIdReferrer()
    {
        return $this->idReferrer;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return TrReferrer
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
     * Set passwd
     *
     * @param string $passwd
     * @return TrReferrer
     */
    public function setPasswd($passwd)
    {
        $this->passwd = $passwd;

        return $this;
    }

    /**
     * Get passwd
     *
     * @return string 
     */
    public function getPasswd()
    {
        return $this->passwd;
    }

    /**
     * Set httpRefererRegexp
     *
     * @param string $httpRefererRegexp
     * @return TrReferrer
     */
    public function setHttpRefererRegexp($httpRefererRegexp)
    {
        $this->httpRefererRegexp = $httpRefererRegexp;

        return $this;
    }

    /**
     * Get httpRefererRegexp
     *
     * @return string 
     */
    public function getHttpRefererRegexp()
    {
        return $this->httpRefererRegexp;
    }

    /**
     * Set httpRefererLike
     *
     * @param string $httpRefererLike
     * @return TrReferrer
     */
    public function setHttpRefererLike($httpRefererLike)
    {
        $this->httpRefererLike = $httpRefererLike;

        return $this;
    }

    /**
     * Get httpRefererLike
     *
     * @return string 
     */
    public function getHttpRefererLike()
    {
        return $this->httpRefererLike;
    }

    /**
     * Set requestUriRegexp
     *
     * @param string $requestUriRegexp
     * @return TrReferrer
     */
    public function setRequestUriRegexp($requestUriRegexp)
    {
        $this->requestUriRegexp = $requestUriRegexp;

        return $this;
    }

    /**
     * Get requestUriRegexp
     *
     * @return string 
     */
    public function getRequestUriRegexp()
    {
        return $this->requestUriRegexp;
    }

    /**
     * Set requestUriLike
     *
     * @param string $requestUriLike
     * @return TrReferrer
     */
    public function setRequestUriLike($requestUriLike)
    {
        $this->requestUriLike = $requestUriLike;

        return $this;
    }

    /**
     * Get requestUriLike
     *
     * @return string 
     */
    public function getRequestUriLike()
    {
        return $this->requestUriLike;
    }

    /**
     * Set httpRefererRegexpNot
     *
     * @param string $httpRefererRegexpNot
     * @return TrReferrer
     */
    public function setHttpRefererRegexpNot($httpRefererRegexpNot)
    {
        $this->httpRefererRegexpNot = $httpRefererRegexpNot;

        return $this;
    }

    /**
     * Get httpRefererRegexpNot
     *
     * @return string 
     */
    public function getHttpRefererRegexpNot()
    {
        return $this->httpRefererRegexpNot;
    }

    /**
     * Set httpRefererLikeNot
     *
     * @param string $httpRefererLikeNot
     * @return TrReferrer
     */
    public function setHttpRefererLikeNot($httpRefererLikeNot)
    {
        $this->httpRefererLikeNot = $httpRefererLikeNot;

        return $this;
    }

    /**
     * Get httpRefererLikeNot
     *
     * @return string 
     */
    public function getHttpRefererLikeNot()
    {
        return $this->httpRefererLikeNot;
    }

    /**
     * Set requestUriRegexpNot
     *
     * @param string $requestUriRegexpNot
     * @return TrReferrer
     */
    public function setRequestUriRegexpNot($requestUriRegexpNot)
    {
        $this->requestUriRegexpNot = $requestUriRegexpNot;

        return $this;
    }

    /**
     * Get requestUriRegexpNot
     *
     * @return string 
     */
    public function getRequestUriRegexpNot()
    {
        return $this->requestUriRegexpNot;
    }

    /**
     * Set requestUriLikeNot
     *
     * @param string $requestUriLikeNot
     * @return TrReferrer
     */
    public function setRequestUriLikeNot($requestUriLikeNot)
    {
        $this->requestUriLikeNot = $requestUriLikeNot;

        return $this;
    }

    /**
     * Get requestUriLikeNot
     *
     * @return string 
     */
    public function getRequestUriLikeNot()
    {
        return $this->requestUriLikeNot;
    }

    /**
     * Set baseFee
     *
     * @param string $baseFee
     * @return TrReferrer
     */
    public function setBaseFee($baseFee)
    {
        $this->baseFee = $baseFee;

        return $this;
    }

    /**
     * Get baseFee
     *
     * @return string 
     */
    public function getBaseFee()
    {
        return $this->baseFee;
    }

    /**
     * Set percentFee
     *
     * @param string $percentFee
     * @return TrReferrer
     */
    public function setPercentFee($percentFee)
    {
        $this->percentFee = $percentFee;

        return $this;
    }

    /**
     * Get percentFee
     *
     * @return string 
     */
    public function getPercentFee()
    {
        return $this->percentFee;
    }

    /**
     * Set clickFee
     *
     * @param string $clickFee
     * @return TrReferrer
     */
    public function setClickFee($clickFee)
    {
        $this->clickFee = $clickFee;

        return $this;
    }

    /**
     * Get clickFee
     *
     * @return string 
     */
    public function getClickFee()
    {
        return $this->clickFee;
    }

    /**
     * Set dateAdd
     *
     * @param \DateTime $dateAdd
     * @return TrReferrer
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
