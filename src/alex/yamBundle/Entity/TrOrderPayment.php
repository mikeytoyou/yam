<?php

namespace alex\yamBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TrOrderPayment
 */
class TrOrderPayment
{
    /**
     * @var integer
     */
    private $idOrderPayment;

    /**
     * @var string
     */
    private $orderReference;

    /**
     * @var integer
     */
    private $idCurrency;

    /**
     * @var string
     */
    private $amount;

    /**
     * @var string
     */
    private $paymentMethod;

    /**
     * @var string
     */
    private $conversionRate;

    /**
     * @var string
     */
    private $transactionId;

    /**
     * @var string
     */
    private $cardNumber;

    /**
     * @var string
     */
    private $cardBrand;

    /**
     * @var string
     */
    private $cardExpiration;

    /**
     * @var string
     */
    private $cardHolder;

    /**
     * @var \DateTime
     */
    private $dateAdd;


    /**
     * Get idOrderPayment
     *
     * @return integer 
     */
    public function getIdOrderPayment()
    {
        return $this->idOrderPayment;
    }

    /**
     * Set orderReference
     *
     * @param string $orderReference
     * @return TrOrderPayment
     */
    public function setOrderReference($orderReference)
    {
        $this->orderReference = $orderReference;

        return $this;
    }

    /**
     * Get orderReference
     *
     * @return string 
     */
    public function getOrderReference()
    {
        return $this->orderReference;
    }

    /**
     * Set idCurrency
     *
     * @param integer $idCurrency
     * @return TrOrderPayment
     */
    public function setIdCurrency($idCurrency)
    {
        $this->idCurrency = $idCurrency;

        return $this;
    }

    /**
     * Get idCurrency
     *
     * @return integer 
     */
    public function getIdCurrency()
    {
        return $this->idCurrency;
    }

    /**
     * Set amount
     *
     * @param string $amount
     * @return TrOrderPayment
     */
    public function setAmount($amount)
    {
        $this->amount = $amount;

        return $this;
    }

    /**
     * Get amount
     *
     * @return string 
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * Set paymentMethod
     *
     * @param string $paymentMethod
     * @return TrOrderPayment
     */
    public function setPaymentMethod($paymentMethod)
    {
        $this->paymentMethod = $paymentMethod;

        return $this;
    }

    /**
     * Get paymentMethod
     *
     * @return string 
     */
    public function getPaymentMethod()
    {
        return $this->paymentMethod;
    }

    /**
     * Set conversionRate
     *
     * @param string $conversionRate
     * @return TrOrderPayment
     */
    public function setConversionRate($conversionRate)
    {
        $this->conversionRate = $conversionRate;

        return $this;
    }

    /**
     * Get conversionRate
     *
     * @return string 
     */
    public function getConversionRate()
    {
        return $this->conversionRate;
    }

    /**
     * Set transactionId
     *
     * @param string $transactionId
     * @return TrOrderPayment
     */
    public function setTransactionId($transactionId)
    {
        $this->transactionId = $transactionId;

        return $this;
    }

    /**
     * Get transactionId
     *
     * @return string 
     */
    public function getTransactionId()
    {
        return $this->transactionId;
    }

    /**
     * Set cardNumber
     *
     * @param string $cardNumber
     * @return TrOrderPayment
     */
    public function setCardNumber($cardNumber)
    {
        $this->cardNumber = $cardNumber;

        return $this;
    }

    /**
     * Get cardNumber
     *
     * @return string 
     */
    public function getCardNumber()
    {
        return $this->cardNumber;
    }

    /**
     * Set cardBrand
     *
     * @param string $cardBrand
     * @return TrOrderPayment
     */
    public function setCardBrand($cardBrand)
    {
        $this->cardBrand = $cardBrand;

        return $this;
    }

    /**
     * Get cardBrand
     *
     * @return string 
     */
    public function getCardBrand()
    {
        return $this->cardBrand;
    }

    /**
     * Set cardExpiration
     *
     * @param string $cardExpiration
     * @return TrOrderPayment
     */
    public function setCardExpiration($cardExpiration)
    {
        $this->cardExpiration = $cardExpiration;

        return $this;
    }

    /**
     * Get cardExpiration
     *
     * @return string 
     */
    public function getCardExpiration()
    {
        return $this->cardExpiration;
    }

    /**
     * Set cardHolder
     *
     * @param string $cardHolder
     * @return TrOrderPayment
     */
    public function setCardHolder($cardHolder)
    {
        $this->cardHolder = $cardHolder;

        return $this;
    }

    /**
     * Get cardHolder
     *
     * @return string 
     */
    public function getCardHolder()
    {
        return $this->cardHolder;
    }

    /**
     * Set dateAdd
     *
     * @param \DateTime $dateAdd
     * @return TrOrderPayment
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
