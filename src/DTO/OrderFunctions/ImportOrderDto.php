<?php

namespace LE\KonnektiveCrmApi\DTO\OrderFunctions;

use LE\KonnektiveCrmApi\DTO\AbstractKonnektiveDto;

/**
 * Class ImportOrderDto
 * @package LE\KonnektiveCrmApi\DTO\OrderFunctions
 */
class ImportOrderDto extends AbstractKonnektiveDto
{
    const PAYSOURCE_CREDITCARD = 'CREDITCARD';
    const PAYSOURCE_CHECK = 'CHECK';
    const PAYSOURCE_ACCTONFILE = 'ACCTONFILE';
    const PAYSOURCE_PREPAID = 'PREPAID';

    /**
     * @var string
     */
    private $orderId = '';
    /**
     * @var string
     */
    private $sessionId = '';
    /**
     * @var string
     */
    private $customerId = '';
    /**
     * @var string
     */
    private $firstName = '';
    /**
     * @var string
     */
    private $lastName = '';
    /**
     * @var string
     */
    private $companyName = '';
    /**
     * @var string
     */
    private $address1 = '';
    /**
     * @var string
     */
    private $address2 = '';
    /**
     * @var string
     */
    private $postalCode = '';
    /**
     * @var string
     */
    private $city = '';
    /**
     * @var string
     */
    private $state = '';
    /**
     * @var string
     */
    private $country = '';
    /**
     * @var string
     */
    private $emailAddress = '';
    /**
     * @var string
     */
    private $phoneNumber = '';
    /**
     * @var string
     */
    private $ipAddress = '';
    /**
     * @var boolean
     */
    private $billShipSame = 1;
    /**
     * @var string
     */
    private $shipFirstName = '';
    /**
     * @var string
     */
    private $shipLastName = '';
    /**
     * @var string
     */
    private $shipCompanyName = '';
    /**
     * @var string
     */
    private $shipAddress1 = '';
    /**
     * @var string
     */
    private $shipAddress2 = '';
    /**
     * @var string
     */
    private $shipPostalCode = '';
    /**
     * @var string
     */
    private $shipCity = '';
    /**
     * @var string
     */
    private $shipState = '';
    /**
     * @var string
     */
    private $shipCountry = '';
    /**
     * @var string
     */
    private $paySource = '';

    /**
     * @var string
     */
    private $cardNumber = '';
    /**
     * @var string
     */
    private $cardMonth = '';
    /**
     * @var string
     */
    private $cardYear = '';
    /**
     * @var string
     */
    private $cardSecurityCode = '';
    /**
     * @var integer
     */
    private $forceMerchantId = 0;
    /**
     * @var integer
     */
    private $preAuthBillerId = 0;
    /**
     * @var string
     */
    private $preAuthMerchantTxnId = 0;
    /**
     * @var float
     */
    private $salesTax = 0.00;
    /**
     * @var integer
     */
    private $achAccountType = 0;
    /**
     * @var integer
     */
    private $achRoutingNumber = 0;
    /**
     * @var integer
     */
    private $achAccountNumber = 0;
    /**
     * @var integer
     */
    private $campaignId = 0;
    /**
     * @var boolean
     */
    private $forceQA = 0;
    /**
     * @var boolean
     */
    private $insureShipment = 0;
    /**
     * @var string
     */
    private $couponCode = '';
    /**
     * @var integer
     */
    private $shipProfileId = 0;
    /**
     * @var string
     */
    private $salesUrl = '';
    /**
     * @var string
     */
    private $affId = '';
    /**
     * @var string
     */
    private $sourceValue1 = '';
    /**
     * @var string
     */
    private $sourceValue2 = '';
    /**
     * @var string
     */
    private $sourceValue3 = '';
    /**
     * @var string
     */
    private $sourceValue4 = '';
    /**
     * @var string
     */
    private $sourceValue5 = '';
    /**
     * @var string
     */
    private $custom1 = '';
    /**
     * @var string
     */
    private $custom2 = '';
    /**
     * @var string
     */
    private $custom3 = '';
    /**
     * @var string
     */
    private $custom4 = '';
    /**
     * @var string
     */
    private $custom5 = '';
    /**
     * @var string
     */
    private $redirectsTo = '';
    /**
     * @var string
     */
    private $errorRedirectsTo = '';
    /**
     * @var string
     */
    private $eci = '';
    /**
     * @var string
     */
    private $xid = '';
    /**
     * @var string
     */
    private $cavv = '';
    /**
     * @var string
     */
    private $rebill_eci = '';
    /**
     * @var string
     */
    private $rebill_xid = '';
    /**
     * @var string
     */
    private $rebill_cavv = '';
    /**
     * @var boolean
     */
    private $disableCustomerDedup = 0;

    /**
     * @var array
     */
    private $products = [];

    public function toArray()
    {
        $ret = parent::toArray();
        unset($ret['products']);

        $currentProduct = 1;
        foreach ($this->products as $product) {
            $keyPrep = "product" . $currentProduct . "_";

            $ret[$keyPrep . "id"] = $product['id'];
            $ret[$keyPrep . "qty"] = $product['qty'];
            if ($product['price']) {
                $ret[$keyPrep . "price"] = $product['price'];
            }
            if ($product['shipPrice']) {
                $ret[$keyPrep . "shipPrice"] = $product['price'];
            }
        }

        return $ret;
    }


    /**
     * @return string
     */
    public function getOrderId()
    {
        return $this->orderId;
    }

    /**
     * @param string $orderId
     * @return ImportOrderDto
     */
    public function setOrderId( $orderId)
    {
        $this->orderId = $orderId;

        return $this;
    }

    /**
     * @return string
     */
    public function getSessionId()
    {
        return $this->sessionId;
    }

    /**
     * @param string $sessionId
     * @return ImportOrderDto
     */
    public function setSessionId( $sessionId)
    {
        $this->sessionId = $sessionId;

        return $this;
    }

    /**
     * @return string
     */
    public function getCustomerId()
    {
        return $this->customerId;
    }

    /**
     * @param string $customerId
     * @return ImportOrderDto
     */
    public function setCustomerId( $customerId)
    {
        $this->customerId = $customerId;

        return $this;
    }

    /**
     * @return string
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * @param string $firstName
     * @return ImportOrderDto
     */
    public function setFirstName( $firstName)
    {
        $this->firstName = $firstName;

        return $this;
    }

    /**
     * @return string
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * @param string $lastName
     * @return ImportOrderDto
     */
    public function setLastName( $lastName)
    {
        $this->lastName = $lastName;

        return $this;
    }

    /**
     * @return string
     */
    public function getCompanyName()
    {
        return $this->companyName;
    }

    /**
     * @param string $companyName
     * @return ImportOrderDto
     */
    public function setCompanyName( $companyName)
    {
        $this->companyName = $companyName;

        return $this;
    }

    /**
     * @return string
     */
    public function getAddress1()
    {
        return $this->address1;
    }

    /**
     * @param string $address1
     * @return ImportOrderDto
     */
    public function setAddress1( $address1)
    {
        $this->address1 = $address1;

        return $this;
    }

    /**
     * @return string
     */
    public function getAddress2()
    {
        return $this->address2;
    }

    /**
     * @param string $address2
     * @return ImportOrderDto
     */
    public function setAddress2( $address2 = '')
    {
        $this->address2 = $address2;

        return $this;
    }

    /**
     * @return string
     */
    public function getPostalCode()
    {
        return $this->postalCode;
    }

    /**
     * @param string $postalCode
     * @return ImportOrderDto
     */
    public function setPostalCode( $postalCode)
    {
        $this->postalCode = $postalCode;

        return $this;
    }

    /**
     * @return string
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * @param string $city
     * @return ImportOrderDto
     */
    public function setCity( $city)
    {
        $this->city = $city;

        return $this;
    }

    /**
     * @return string
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * @param string $state
     * @return ImportOrderDto
     */
    public function setState( $state)
    {
        $this->state = $state;

        return $this;
    }

    /**
     * @return string
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * @param string $country
     * @return ImportOrderDto
     */
    public function setCountry( $country)
    {
        $this->country = $country;

        return $this;
    }

    /**
     * @return string
     */
    public function getEmailAddress()
    {
        return $this->emailAddress;
    }

    /**
     * @param string $emailAddress
     * @return ImportOrderDto
     */
    public function setEmailAddress( $emailAddress)
    {
        $this->emailAddress = $emailAddress;

        return $this;
    }

    /**
     * @return string
     */
    public function getPhoneNumber()
    {
        return $this->phoneNumber;
    }

    /**
     * @param string $phoneNumber
     * @return ImportOrderDto
     */
    public function setPhoneNumber( $phoneNumber)
    {
        $this->phoneNumber = $phoneNumber;

        return $this;
    }

    /**
     * @return string
     */
    public function getIpAddress()
    {
        return $this->ipAddress;
    }

    /**
     * @param string $ipAddress
     * @return ImportOrderDto
     */
    public function setIpAddress( $ipAddress)
    {
        $this->ipAddress = $ipAddress;

        return $this;
    }

    /**
     * @return bool
     */
    public function isBillShipSame()
    {
        return $this->billShipSame ? "1" : "0";
    }

    /**
     * @param bool $billShipSame
     * @return ImportOrderDto
     */
    public function setBillShipSame($billShipSame)
    {
        $this->billShipSame = $billShipSame;

        return $this;
    }

    /**
     * @return string
     */
    public function getShipFirstName()
    {
        return $this->shipFirstName;
    }

    /**
     * @param string $shipFirstName
     * @return ImportOrderDto
     */
    public function setShipFirstName( $shipFirstName)
    {
        $this->shipFirstName = $shipFirstName;

        return $this;
    }

    /**
     * @return string
     */
    public function getShipLastName()
    {
        return $this->shipLastName;
    }

    /**
     * @param string $shipLastName
     * @return ImportOrderDto
     */
    public function setShipLastName( $shipLastName)
    {
        $this->shipLastName = $shipLastName;

        return $this;
    }

    /**
     * @return string
     */
    public function getShipCompanyName()
    {
        return $this->shipCompanyName;
    }

    /**
     * @param string $shipCompanyName
     * @return ImportOrderDto
     */
    public function setShipCompanyName( $shipCompanyName)
    {
        $this->shipCompanyName = $shipCompanyName;

        return $this;
    }

    /**
     * @return string
     */
    public function getShipAddress1()
    {
        return $this->shipAddress1;
    }

    /**
     * @param string $shipAddress1
     * @return ImportOrderDto
     */
    public function setShipAddress1( $shipAddress1)
    {
        $this->shipAddress1 = $shipAddress1;

        return $this;
    }

    /**
     * @return string
     */
    public function getShipAddress2()
    {
        return $this->shipAddress2;
    }

    /**
     * @param string $shipAddress2
     * @return ImportOrderDto
     */
    public function setShipAddress2( $shipAddress2)
    {
        $this->shipAddress2 = $shipAddress2;

        return $this;
    }

    /**
     * @return string
     */
    public function getShipPostalCode()
    {
        return $this->shipPostalCode;
    }

    /**
     * @param string $shipPostalCode
     * @return ImportOrderDto
     */
    public function setShipPostalCode( $shipPostalCode)
    {
        $this->shipPostalCode = $shipPostalCode;

        return $this;
    }

    /**
     * @return string
     */
    public function getShipCity()
    {
        return $this->shipCity;
    }

    /**
     * @param string $shipCity
     * @return ImportOrderDto
     */
    public function setShipCity( $shipCity)
    {
        $this->shipCity = $shipCity;

        return $this;
    }

    /**
     * @return string
     */
    public function getShipState()
    {
        return $this->shipState;
    }

    /**
     * @param string $shipState
     * @return ImportOrderDto
     */
    public function setShipState( $shipState)
    {
        $this->shipState = $shipState;

        return $this;
    }

    /**
     * @return string
     */
    public function getShipCountry()
    {
        return $this->shipCountry;
    }

    /**
     * @param string $shipCountry
     * @return ImportOrderDto
     */
    public function setShipCountry( $shipCountry)
    {
        $this->shipCountry = $shipCountry;

        return $this;
    }

    /**
     * @return string
     */
    public function getPaySource()
    {
        return $this->paySource;
    }

    /**
     * @param string $paySource
     * @return ImportOrderDto
     */
    public function setPaySource( $paySource = self::PAYSOURCE_CREDITCARD)
    {
        switch ($paySource) {
            case self::PAYSOURCE_CREDITCARD:
            case self::PAYSOURCE_ACCTONFILE:
            case self::PAYSOURCE_CHECK:
            case self::PAYSOURCE_PREPAID:
                $this->paySource = $paySource;
                break;
            default:
                $this->paySource = null;
        }

        return $this;
    }

    /**
     * @return int
     */
    public function getCardNumber()
    {
        return $this->cardNumber;
    }

    /**
     * @param string $cardNumber
     * @return ImportOrderDto
     */
    public function setCardNumber( $cardNumber)
    {
        $this->cardNumber = $cardNumber;

        return $this;
    }

    /**
     * @return string
     */
    public function getCardMonth()
    {
        return $this->cardMonth;
    }

    /**
     * @param string $cardMonth
     * @return ImportOrderDto
     */
    public function setCardMonth( $cardMonth)
    {
        $this->cardMonth = $cardMonth;

        return $this;
    }

    /**
     * @return string
     */
    public function getCardYear()
    {
        return $this->cardYear;
    }

    /**
     * @param string $cardYear
     * @return ImportOrderDto
     */
    public function setCardYear( $cardYear)
    {
        $this->cardYear = $cardYear;

        return $this;
    }

    /**
     * @return int
     */
    public function getCardSecurityCode()
    {
        return $this->cardSecurityCode;
    }

    /**
     * @param string $cardSecurityCode
     * @return ImportOrderDto
     */
    public function setCardSecurityCode( $cardSecurityCode)
    {
        $this->cardSecurityCode = $cardSecurityCode;

        return $this;
    }

    /**
     * @return int
     */
    public function getForceMerchantId()
    {
        return $this->forceMerchantId;
    }

    /**
     * @param int $forceMerchantId
     * @return ImportOrderDto
     */
    public function setForceMerchantId($forceMerchantId)
    {
        $this->forceMerchantId = $forceMerchantId;

        return $this;
    }

    /**
     * @return int
     */
    public function getPreAuthBillerId()
    {
        return $this->preAuthBillerId;
    }

    /**
     * @param int $preAuthBillerId
     * @return ImportOrderDto
     */
    public function setPreAuthBillerId($preAuthBillerId)
    {
        $this->preAuthBillerId = $preAuthBillerId;

        return $this;
    }

    /**
     * @return string
     */
    public function getPreAuthMerchantTxnId()
    {
        return $this->preAuthMerchantTxnId;
    }

    /**
     * @param string $preAuthMerchantTxnId
     * @return ImportOrderDto
     */
    public function setPreAuthMerchantTxnId( $preAuthMerchantTxnId)
    {
        $this->preAuthMerchantTxnId = $preAuthMerchantTxnId;

        return $this;
    }

    /**
     * @return float
     */
    public function getSalesTax()
    {
        return $this->salesTax;
    }

    /**
     * @param float $salesTax
     * @return ImportOrderDto
     */
    public function setSalesTax( $salesTax)
    {
        $this->salesTax = $salesTax;

        return $this;
    }

    /**
     * @return int
     */
    public function getAchAccountType()
    {
        return $this->achAccountType;
    }

    /**
     * @param int $achAccountType
     * @return ImportOrderDto
     */
    public function setAchAccountType($achAccountType)
    {
        $this->achAccountType = $achAccountType;

        return $this;
    }

    /**
     * @return int
     */
    public function getAchRoutingNumber()
    {
        return $this->achRoutingNumber;
    }

    /**
     * @param int $achRoutingNumber
     * @return ImportOrderDto
     */
    public function setAchRoutingNumber($achRoutingNumber)
    {
        $this->achRoutingNumber = $achRoutingNumber;

        return $this;
    }

    /**
     * @return int
     */
    public function getAchAccountNumber()
    {
        return $this->achAccountNumber;
    }

    /**
     * @param int $achAccountNumber
     * @return ImportOrderDto
     */
    public function setAchAccountNumber($achAccountNumber)
    {
        $this->achAccountNumber = $achAccountNumber;

        return $this;
    }

    /**
     * @return int
     */
    public function getCampaignId()
    {
        return $this->campaignId;
    }

    /**
     * @param int $campaignId
     * @return ImportOrderDto
     */
    public function setCampaignId($campaignId)
    {
        $this->campaignId = $campaignId;

        return $this;
    }

    /**
     * @return bool
     */
    public function isForceQA()
    {
        return $this->forceQA ? "1" : "0";
    }

    /**
     * @param bool $forceQA
     * @return ImportOrderDto
     */
    public function setForceQA($forceQA)
    {
        $this->forceQA = $forceQA;

        return $this;
    }

    /**
     * @return bool
     */
    public function isInsureShipment()
    {
        return $this->insureShipment ? "1" : "0";
    }

    /**
     * @param bool $insureShipment
     * @return ImportOrderDto
     */
    public function setInsureShipment($insureShipment)
    {
        $this->insureShipment = $insureShipment;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getCouponCode()
    {
        return $this->couponCode;
    }

    /**
     * @param mixed $couponCode
     * @return ImportOrderDto
     */
    public function setCouponCode($couponCode)
    {
        $this->couponCode = $couponCode;

        return $this;
    }

    /**
     * @return int
     */
    public function getShipProfileId()
    {
        return $this->shipProfileId;
    }

    /**
     * @param int $shipProfileId
     * @return ImportOrderDto
     */
    public function setShipProfileId($shipProfileId)
    {
        $this->shipProfileId = $shipProfileId;

        return $this;
    }

    /**
     * @return string
     */
    public function getSalesUrl()
    {
        return $this->salesUrl;
    }

    /**
     * @param string $salesUrl
     * @return ImportOrderDto
     */
    public function setSalesUrl( $salesUrl)
    {
        $this->salesUrl = $salesUrl;

        return $this;
    }

    /**
     * @return string
     */
    public function getAffId()
    {
        return $this->affId;
    }

    /**
     * @param string $affId
     * @return ImportOrderDto
     */
    public function setAffId( $affId)
    {
        $this->affId = $affId;

        return $this;
    }

    /**
     * @return string
     */
    public function getSourceValue1()
    {
        return $this->sourceValue1;
    }

    /**
     * @param string $sourceValue1
     * @return ImportOrderDto
     */
    public function setSourceValue1( $sourceValue1)
    {
        $this->sourceValue1 = $sourceValue1;

        return $this;
    }

    /**
     * @return string
     */
    public function getSourceValue2()
    {
        return $this->sourceValue2;
    }

    /**
     * @param string $sourceValue2
     * @return ImportOrderDto
     */
    public function setSourceValue2( $sourceValue2)
    {
        $this->sourceValue2 = $sourceValue2;

        return $this;
    }

    /**
     * @return string
     */
    public function getSourceValue3()
    {
        return $this->sourceValue3;
    }

    /**
     * @param string $sourceValue3
     * @return ImportOrderDto
     */
    public function setSourceValue3( $sourceValue3)
    {
        $this->sourceValue3 = $sourceValue3;

        return $this;
    }

    /**
     * @return string
     */
    public function getSourceValue4()
    {
        return $this->sourceValue4;
    }

    /**
     * @param string $sourceValue4
     * @return ImportOrderDto
     */
    public function setSourceValue4( $sourceValue4)
    {
        $this->sourceValue4 = $sourceValue4;

        return $this;
    }

    /**
     * @return string
     */
    public function getSourceValue5()
    {
        return $this->sourceValue5;
    }

    /**
     * @param string $sourceValue5
     * @return ImportOrderDto
     */
    public function setSourceValue5( $sourceValue5)
    {
        $this->sourceValue5 = $sourceValue5;

        return $this;
    }

    /**
     * @return string
     */
    public function getCustom1()
    {
        return $this->custom1;
    }

    /**
     * @param string $custom1
     * @return ImportOrderDto
     */
    public function setCustom1( $custom1)
    {
        $this->custom1 = $custom1;

        return $this;
    }

    /**
     * @return string
     */
    public function getCustom2()
    {
        return $this->custom2;
    }

    /**
     * @param string $custom2
     * @return ImportOrderDto
     */
    public function setCustom2( $custom2)
    {
        $this->custom2 = $custom2;

        return $this;
    }

    /**
     * @return string
     */
    public function getCustom3()
    {
        return $this->custom3;
    }

    /**
     * @param string $custom3
     * @return ImportOrderDto
     */
    public function setCustom3( $custom3)
    {
        $this->custom3 = $custom3;

        return $this;
    }

    /**
     * @return string
     */
    public function getCustom4()
    {
        return $this->custom4;
    }

    /**
     * @param string $custom4
     * @return ImportOrderDto
     */
    public function setCustom4( $custom4)
    {
        $this->custom4 = $custom4;

        return $this;
    }

    /**
     * @return string
     */
    public function getCustom5()
    {
        return $this->custom5;
    }

    /**
     * @param string $custom5
     * @return ImportOrderDto
     */
    public function setCustom5( $custom5)
    {
        $this->custom5 = $custom5;

        return $this;
    }

    /**
     * @return string
     */
    public function getRedirectsTo()
    {
        return $this->redirectsTo;
    }

    /**
     * @param string $redirectsTo
     * @return ImportOrderDto
     */
    public function setRedirectsTo( $redirectsTo)
    {
        $this->redirectsTo = $redirectsTo;

        return $this;
    }

    /**
     * @return string
     */
    public function getErrorRedirectsTo()
    {
        return $this->errorRedirectsTo;
    }

    /**
     * @param string $errorRedirectsTo
     * @return ImportOrderDto
     */
    public function setErrorRedirectsTo( $errorRedirectsTo)
    {
        $this->errorRedirectsTo = $errorRedirectsTo;

        return $this;
    }

    /**
     * @return string
     */
    public function getEci()
    {
        return $this->eci;
    }

    /**
     * @param string $eci
     * @return ImportOrderDto
     */
    public function setEci( $eci)
    {
        $this->eci = $eci;

        return $this;
    }

    /**
     * @return string
     */
    public function getXid()
    {
        return $this->xid;
    }

    /**
     * @param string $xid
     * @return ImportOrderDto
     */
    public function setXid( $xid)
    {
        $this->xid = $xid;

        return $this;
    }

    /**
     * @return string
     */
    public function getCavv()
    {
        return $this->cavv;
    }

    /**
     * @param string $cavv
     * @return ImportOrderDto
     */
    public function setCavv( $cavv)
    {
        $this->cavv = $cavv;

        return $this;
    }

    /**
     * @return string
     */
    public function getRebillEci()
    {
        return $this->rebill_eci;
    }

    /**
     * @param string $rebill_eci
     * @return ImportOrderDto
     */
    public function setRebillEci( $rebill_eci)
    {
        $this->rebill_eci = $rebill_eci;

        return $this;
    }

    /**
     * @return string
     */
    public function getRebillXid()
    {
        return $this->rebill_xid;
    }

    /**
     * @param string $rebill_xid
     * @return ImportOrderDto
     */
    public function setRebillXid( $rebill_xid)
    {
        $this->rebill_xid = $rebill_xid;

        return $this;
    }

    /**
     * @return string
     */
    public function getRebillCavv()
    {
        return $this->rebill_cavv;
    }

    /**
     * @param string $rebill_cavv
     * @return ImportOrderDto
     */
    public function setRebillCavv( $rebill_cavv)
    {
        $this->rebill_cavv = $rebill_cavv;

        return $this;
    }

    /**
     * @return bool
     */
    public function isDisableCustomerDedup()
    {
        return $this->disableCustomerDedup ? "1" : "0";
    }

    /**
     * @param bool $disableCustomerDedup
     * @return ImportOrderDto
     */
    public function setDisableCustomerDedup($disableCustomerDedup)
    {
        $this->disableCustomerDedup = $disableCustomerDedup;

        return $this;
    }

    public function addProduct($productId, $quantity = 1, $priceOverride = null, $shippingPriceOverride = null)
    {
        $this->products[$productId. " - " . uniqid()] = [
            'id' => $productId,
            'qty' => $quantity,
            'price' => $priceOverride,
            'shipPrice' => $shippingPriceOverride,
        ];

        return $this;
    }

    public function removeProduct($indexId)
    {
        if (array_key_exists($indexId, $this->products)) {
            unset($this->products[$indexId]);
        }
    }

    /**
     * @return array
     */
    public function getProducts()
    {
        return $this->products;
    }

    /**
     * @param array $products
     * @return ImportOrderDto
     */
    public function setProducts(array $products)
    {
        $this->products = $products;

        return $this;
    }


}
