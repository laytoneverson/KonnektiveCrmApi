<?php

namespace LE\KonnektiveCrmApi\DTO\OrderFunctions;

use LE\KonnektiveCrmApi\DTO\AbstractKonnektiveDto;

/**
 * Class ImportOrderDto
 * @package LE\KonnektiveCrmApi\DTO\OrderFunctions
 */
class ImportOrderDto extends AbstractKonnektiveDto
{
    public const PAYSOURCE_CREDITCARD = 'CREDITCARD';
    public const PAYSOURCE_CHECK = 'CHECK';
    public const PAYSOURCE_ACCTONFILE = 'ACCTONFILE';
    public const PAYSOURCE_PREPAID = 'PREPAID';

    /**
     * @var string
     */
    private $orderId;
    /**
     * @var string
     */
    private $sessionId;
    /**
     * @var string
     */
    private $customerId;
    /**
     * @var string
     */
    private $firstName;
    /**
     * @var string
     */
    private $lastName;
    /**
     * @var string
     */
    private $companyName;
    /**
     * @var string
     */
    private $address1;
    /**
     * @var string
     */
    private $address2;
    /**
     * @var string
     */
    private $postalCode;
    /**
     * @var string
     */
    private $city;
    /**
     * @var string
     */
    private $state;
    /**
     * @var string
     */
    private $country;
    /**
     * @var string
     */
    private $emailAddress;
    /**
     * @var string
     */
    private $phoneNumber;
    /**
     * @var string
     */
    private $ipAddress;
    /**
     * @var boolean
     */
    private $billShipSame;
    /**
     * @var string
     */
    private $shipFirstName;
    /**
     * @var string
     */
    private $shipLastName;
    /**
     * @var string
     */
    private $shipCompanyName;
    /**
     * @var string
     */
    private $shipAddress1;
    /**
     * @var string
     */
    private $shipAddress2;
    /**
     * @var string
     */
    private $shipPostalCode;
    /**
     * @var string
     */
    private $shipCity;
    /**
     * @var string
     */
    private $shipState;
    /**
     * @var string
     */
    private $shipCountry;
    /**
     * @var string
     */
    private $paySource;

    /**
     * @var string
     */
    private $cardNumber;
    /**
     * @var string
     */
    private $cardMonth;
    /**
     * @var string
     */
    private $cardYear;
    /**
     * @var string
     */
    private $cardSecurityCode;
    /**
     * @var integer
     */
    private $forceMerchantId;
    /**
     * @var integer
     */
    private $preAuthBillerId;
    /**
     * @var string
     */
    private $preAuthMerchantTxnId;
    /**
     * @var float
     */
    private $salesTax;
    /**
     * @var integer
     */
    private $achAccountType;
    /**
     * @var integer
     */
    private $achRoutingNumber;
    /**
     * @var integer
     */
    private $achAccountNumber;
    /**
     * @var integer
     */
    private $campaignId;
    /**
     * @var boolean
     */
    private $forceQA;
    /**
     * @var boolean
     */
    private $insureShipment;
    /**
     * @var string
     */
    private $couponCode;
    /**
     * @var integer
     */
    private $shipProfileId;
    /**
     * @var string
     */
    private $salesUrl;
    /**
     * @var string
     */
    private $affId;
    /**
     * @var string
     */
    private $sourceValue1;
    /**
     * @var string
     */
    private $sourceValue2;
    /**
     * @var string
     */
    private $sourceValue3;
    /**
     * @var string
     */
    private $sourceValue4;
    /**
     * @var string
     */
    private $sourceValue5;
    /**
     * @var string
     */
    private $custom1;
    /**
     * @var string
     */
    private $custom2;
    /**
     * @var string
     */
    private $custom3;
    /**
     * @var string
     */
    private $custom4;
    /**
     * @var string
     */
    private $custom5;
    /**
     * @var string
     */
    private $redirectsTo;
    /**
     * @var string
     */
    private $errorRedirectsTo;
    /**
     * @var string
     */
    private $eci;
    /**
     * @var string
     */
    private $xid;
    /**
     * @var string
     */
    private $cavv;
    /**
     * @var string
     */
    private $rebill_eci;
    /**
     * @var string
     */
    private $rebill_xid;
    /**
     * @var string
     */
    private $rebill_cavv;
    /**
     * @var boolean
     */
    private $disableCustomerDedup;

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
    }


    /**
     * @return string
     */
    public function getOrderId(): string
    {
        return $this->orderId;
    }

    /**
     * @param string $orderId
     * @return ImportOrderDto
     */
    public function setOrderId(string $orderId): ImportOrderDto
    {
        $this->orderId = $orderId;

        return $this;
    }

    /**
     * @return string
     */
    public function getSessionId(): string
    {
        return $this->sessionId;
    }

    /**
     * @param string $sessionId
     * @return ImportOrderDto
     */
    public function setSessionId(string $sessionId): ImportOrderDto
    {
        $this->sessionId = $sessionId;

        return $this;
    }

    /**
     * @return string
     */
    public function getCustomerId(): string
    {
        return $this->customerId;
    }

    /**
     * @param string $customerId
     * @return ImportOrderDto
     */
    public function setCustomerId(string $customerId): ImportOrderDto
    {
        $this->customerId = $customerId;

        return $this;
    }

    /**
     * @return string
     */
    public function getFirstName(): string
    {
        return $this->firstName;
    }

    /**
     * @param string $firstName
     * @return ImportOrderDto
     */
    public function setFirstName(string $firstName): ImportOrderDto
    {
        $this->firstName = $firstName;

        return $this;
    }

    /**
     * @return string
     */
    public function getLastName(): string
    {
        return $this->lastName;
    }

    /**
     * @param string $lastName
     * @return ImportOrderDto
     */
    public function setLastName(string $lastName): ImportOrderDto
    {
        $this->lastName = $lastName;

        return $this;
    }

    /**
     * @return string
     */
    public function getCompanyName(): string
    {
        return $this->companyName;
    }

    /**
     * @param string $companyName
     * @return ImportOrderDto
     */
    public function setCompanyName(string $companyName): ImportOrderDto
    {
        $this->companyName = $companyName;

        return $this;
    }

    /**
     * @return string
     */
    public function getAddress1(): string
    {
        return $this->address1;
    }

    /**
     * @param string $address1
     * @return ImportOrderDto
     */
    public function setAddress1(string $address1): ImportOrderDto
    {
        $this->address1 = $address1;

        return $this;
    }

    /**
     * @return string
     */
    public function getAddress2(): string
    {
        return $this->address2;
    }

    /**
     * @param string $address2
     * @return ImportOrderDto
     */
    public function setAddress2(string $address2): ImportOrderDto
    {
        $this->address2 = $address2;

        return $this;
    }

    /**
     * @return string
     */
    public function getPostalCode(): string
    {
        return $this->postalCode;
    }

    /**
     * @param string $postalCode
     * @return ImportOrderDto
     */
    public function setPostalCode(string $postalCode): ImportOrderDto
    {
        $this->postalCode = $postalCode;

        return $this;
    }

    /**
     * @return string
     */
    public function getCity(): string
    {
        return $this->city;
    }

    /**
     * @param string $city
     * @return ImportOrderDto
     */
    public function setCity(string $city): ImportOrderDto
    {
        $this->city = $city;

        return $this;
    }

    /**
     * @return string
     */
    public function getState(): string
    {
        return $this->state;
    }

    /**
     * @param string $state
     * @return ImportOrderDto
     */
    public function setState(string $state): ImportOrderDto
    {
        $this->state = $state;

        return $this;
    }

    /**
     * @return string
     */
    public function getCountry(): string
    {
        return $this->country;
    }

    /**
     * @param string $country
     * @return ImportOrderDto
     */
    public function setCountry(string $country): ImportOrderDto
    {
        $this->country = $country;

        return $this;
    }

    /**
     * @return string
     */
    public function getEmailAddress(): string
    {
        return $this->emailAddress;
    }

    /**
     * @param string $emailAddress
     * @return ImportOrderDto
     */
    public function setEmailAddress(string $emailAddress): ImportOrderDto
    {
        $this->emailAddress = $emailAddress;

        return $this;
    }

    /**
     * @return string
     */
    public function getPhoneNumber(): string
    {
        return $this->phoneNumber;
    }

    /**
     * @param string $phoneNumber
     * @return ImportOrderDto
     */
    public function setPhoneNumber(string $phoneNumber): ImportOrderDto
    {
        $this->phoneNumber = $phoneNumber;

        return $this;
    }

    /**
     * @return string
     */
    public function getIpAddress(): string
    {
        return $this->ipAddress;
    }

    /**
     * @param string $ipAddress
     * @return ImportOrderDto
     */
    public function setIpAddress(string $ipAddress): ImportOrderDto
    {
        $this->ipAddress = $ipAddress;

        return $this;
    }

    /**
     * @return bool
     */
    public function isBillShipSame(): bool
    {
        return $this->billShipSame ? "1" : "0";
    }

    /**
     * @param bool $billShipSame
     * @return ImportOrderDto
     */
    public function setBillShipSame(bool $billShipSame): ImportOrderDto
    {
        $this->billShipSame = $billShipSame;

        return $this;
    }

    /**
     * @return string
     */
    public function getShipFirstName(): string
    {
        return $this->shipFirstName;
    }

    /**
     * @param string $shipFirstName
     * @return ImportOrderDto
     */
    public function setShipFirstName(string $shipFirstName): ImportOrderDto
    {
        $this->shipFirstName = $shipFirstName;

        return $this;
    }

    /**
     * @return string
     */
    public function getShipLastName(): string
    {
        return $this->shipLastName;
    }

    /**
     * @param string $shipLastName
     * @return ImportOrderDto
     */
    public function setShipLastName(string $shipLastName): ImportOrderDto
    {
        $this->shipLastName = $shipLastName;

        return $this;
    }

    /**
     * @return string
     */
    public function getShipCompanyName(): string
    {
        return $this->shipCompanyName;
    }

    /**
     * @param string $shipCompanyName
     * @return ImportOrderDto
     */
    public function setShipCompanyName(string $shipCompanyName): ImportOrderDto
    {
        $this->shipCompanyName = $shipCompanyName;

        return $this;
    }

    /**
     * @return string
     */
    public function getShipAddress1(): string
    {
        return $this->shipAddress1;
    }

    /**
     * @param string $shipAddress1
     * @return ImportOrderDto
     */
    public function setShipAddress1(string $shipAddress1): ImportOrderDto
    {
        $this->shipAddress1 = $shipAddress1;

        return $this;
    }

    /**
     * @return string
     */
    public function getShipAddress2(): string
    {
        return $this->shipAddress2;
    }

    /**
     * @param string $shipAddress2
     * @return ImportOrderDto
     */
    public function setShipAddress2(string $shipAddress2): ImportOrderDto
    {
        $this->shipAddress2 = $shipAddress2;

        return $this;
    }

    /**
     * @return string
     */
    public function getShipPostalCode(): string
    {
        return $this->shipPostalCode;
    }

    /**
     * @param string $shipPostalCode
     * @return ImportOrderDto
     */
    public function setShipPostalCode(string $shipPostalCode): ImportOrderDto
    {
        $this->shipPostalCode = $shipPostalCode;

        return $this;
    }

    /**
     * @return string
     */
    public function getShipCity(): string
    {
        return $this->shipCity;
    }

    /**
     * @param string $shipCity
     * @return ImportOrderDto
     */
    public function setShipCity(string $shipCity): ImportOrderDto
    {
        $this->shipCity = $shipCity;

        return $this;
    }

    /**
     * @return string
     */
    public function getShipState(): string
    {
        return $this->shipState;
    }

    /**
     * @param string $shipState
     * @return ImportOrderDto
     */
    public function setShipState(string $shipState): ImportOrderDto
    {
        $this->shipState = $shipState;

        return $this;
    }

    /**
     * @return string
     */
    public function getShipCountry(): string
    {
        return $this->shipCountry;
    }

    /**
     * @param string $shipCountry
     * @return ImportOrderDto
     */
    public function setShipCountry(string $shipCountry): ImportOrderDto
    {
        $this->shipCountry = $shipCountry;

        return $this;
    }

    /**
     * @return string
     */
    public function getPaySource(): string
    {
        return $this->paySource;
    }

    /**
     * @param string $paySource
     * @return ImportOrderDto
     */
    public function setPaySource(string $paySource = self::PAYSOURCE_CREDITCARD): ImportOrderDto
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
    public function getCardNumber(): int
    {
        return $this->cardNumber;
    }

    /**
     * @param string $cardNumber
     * @return ImportOrderDto
     */
    public function setCardNumber(string $cardNumber): ImportOrderDto
    {
        $this->cardNumber = $cardNumber;

        return $this;
    }

    /**
     * @return string
     */
    public function getCardMonth(): string
    {
        return $this->cardMonth;
    }

    /**
     * @param string $cardMonth
     * @return ImportOrderDto
     */
    public function setCardMonth(string $cardMonth): ImportOrderDto
    {
        $this->cardMonth = $cardMonth;

        return $this;
    }

    /**
     * @return string
     */
    public function getCardYear(): string
    {
        return $this->cardYear;
    }

    /**
     * @param string $cardYear
     * @return ImportOrderDto
     */
    public function setCardYear(string $cardYear): ImportOrderDto
    {
        $this->cardYear = $cardYear;

        return $this;
    }

    /**
     * @return int
     */
    public function getCardSecurityCode(): int
    {
        return $this->cardSecurityCode;
    }

    /**
     * @param string $cardSecurityCode
     * @return ImportOrderDto
     */
    public function setCardSecurityCode(string $cardSecurityCode): ImportOrderDto
    {
        $this->cardSecurityCode = $cardSecurityCode;

        return $this;
    }

    /**
     * @return int
     */
    public function getForceMerchantId(): int
    {
        return $this->forceMerchantId;
    }

    /**
     * @param int $forceMerchantId
     * @return ImportOrderDto
     */
    public function setForceMerchantId(int $forceMerchantId): ImportOrderDto
    {
        $this->forceMerchantId = $forceMerchantId;

        return $this;
    }

    /**
     * @return int
     */
    public function getPreAuthBillerId(): int
    {
        return $this->preAuthBillerId;
    }

    /**
     * @param int $preAuthBillerId
     * @return ImportOrderDto
     */
    public function setPreAuthBillerId(int $preAuthBillerId): ImportOrderDto
    {
        $this->preAuthBillerId = $preAuthBillerId;

        return $this;
    }

    /**
     * @return string
     */
    public function getPreAuthMerchantTxnId(): string
    {
        return $this->preAuthMerchantTxnId;
    }

    /**
     * @param string $preAuthMerchantTxnId
     * @return ImportOrderDto
     */
    public function setPreAuthMerchantTxnId(string $preAuthMerchantTxnId): ImportOrderDto
    {
        $this->preAuthMerchantTxnId = $preAuthMerchantTxnId;

        return $this;
    }

    /**
     * @return float
     */
    public function getSalesTax(): float
    {
        return $this->salesTax;
    }

    /**
     * @param float $salesTax
     * @return ImportOrderDto
     */
    public function setSalesTax(float $salesTax): ImportOrderDto
    {
        $this->salesTax = $salesTax;

        return $this;
    }

    /**
     * @return int
     */
    public function getAchAccountType(): int
    {
        return $this->achAccountType;
    }

    /**
     * @param int $achAccountType
     * @return ImportOrderDto
     */
    public function setAchAccountType(int $achAccountType): ImportOrderDto
    {
        $this->achAccountType = $achAccountType;

        return $this;
    }

    /**
     * @return int
     */
    public function getAchRoutingNumber(): int
    {
        return $this->achRoutingNumber;
    }

    /**
     * @param int $achRoutingNumber
     * @return ImportOrderDto
     */
    public function setAchRoutingNumber(int $achRoutingNumber): ImportOrderDto
    {
        $this->achRoutingNumber = $achRoutingNumber;

        return $this;
    }

    /**
     * @return int
     */
    public function getAchAccountNumber(): int
    {
        return $this->achAccountNumber;
    }

    /**
     * @param int $achAccountNumber
     * @return ImportOrderDto
     */
    public function setAchAccountNumber(int $achAccountNumber): ImportOrderDto
    {
        $this->achAccountNumber = $achAccountNumber;

        return $this;
    }

    /**
     * @return int
     */
    public function getCampaignId(): int
    {
        return $this->campaignId;
    }

    /**
     * @param int $campaignId
     * @return ImportOrderDto
     */
    public function setCampaignId(int $campaignId): ImportOrderDto
    {
        $this->campaignId = $campaignId;

        return $this;
    }

    /**
     * @return bool
     */
    public function isForceQA(): bool
    {
        return $this->forceQA ? "1" : "0";
    }

    /**
     * @param bool $forceQA
     * @return ImportOrderDto
     */
    public function setForceQA(bool $forceQA): ImportOrderDto
    {
        $this->forceQA = $forceQA;

        return $this;
    }

    /**
     * @return bool
     */
    public function isInsureShipment(): bool
    {
        return $this->insureShipment ? "1" : "0";
    }

    /**
     * @param bool $insureShipment
     * @return ImportOrderDto
     */
    public function setInsureShipment(bool $insureShipment): ImportOrderDto
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
    public function getShipProfileId(): int
    {
        return $this->shipProfileId;
    }

    /**
     * @param int $shipProfileId
     * @return ImportOrderDto
     */
    public function setShipProfileId(int $shipProfileId): ImportOrderDto
    {
        $this->shipProfileId = $shipProfileId;

        return $this;
    }

    /**
     * @return string
     */
    public function getSalesUrl(): string
    {
        return $this->salesUrl;
    }

    /**
     * @param string $salesUrl
     * @return ImportOrderDto
     */
    public function setSalesUrl(string $salesUrl): ImportOrderDto
    {
        $this->salesUrl = $salesUrl;

        return $this;
    }

    /**
     * @return string
     */
    public function getAffId(): string
    {
        return $this->affId;
    }

    /**
     * @param string $affId
     * @return ImportOrderDto
     */
    public function setAffId(string $affId): ImportOrderDto
    {
        $this->affId = $affId;

        return $this;
    }

    /**
     * @return string
     */
    public function getSourceValue1(): string
    {
        return $this->sourceValue1;
    }

    /**
     * @param string $sourceValue1
     * @return ImportOrderDto
     */
    public function setSourceValue1(string $sourceValue1): ImportOrderDto
    {
        $this->sourceValue1 = $sourceValue1;

        return $this;
    }

    /**
     * @return string
     */
    public function getSourceValue2(): string
    {
        return $this->sourceValue2;
    }

    /**
     * @param string $sourceValue2
     * @return ImportOrderDto
     */
    public function setSourceValue2(string $sourceValue2): ImportOrderDto
    {
        $this->sourceValue2 = $sourceValue2;

        return $this;
    }

    /**
     * @return string
     */
    public function getSourceValue3(): string
    {
        return $this->sourceValue3;
    }

    /**
     * @param string $sourceValue3
     * @return ImportOrderDto
     */
    public function setSourceValue3(string $sourceValue3): ImportOrderDto
    {
        $this->sourceValue3 = $sourceValue3;

        return $this;
    }

    /**
     * @return string
     */
    public function getSourceValue4(): string
    {
        return $this->sourceValue4;
    }

    /**
     * @param string $sourceValue4
     * @return ImportOrderDto
     */
    public function setSourceValue4(string $sourceValue4): ImportOrderDto
    {
        $this->sourceValue4 = $sourceValue4;

        return $this;
    }

    /**
     * @return string
     */
    public function getSourceValue5(): string
    {
        return $this->sourceValue5;
    }

    /**
     * @param string $sourceValue5
     * @return ImportOrderDto
     */
    public function setSourceValue5(string $sourceValue5): ImportOrderDto
    {
        $this->sourceValue5 = $sourceValue5;

        return $this;
    }

    /**
     * @return string
     */
    public function getCustom1(): string
    {
        return $this->custom1;
    }

    /**
     * @param string $custom1
     * @return ImportOrderDto
     */
    public function setCustom1(string $custom1): ImportOrderDto
    {
        $this->custom1 = $custom1;

        return $this;
    }

    /**
     * @return string
     */
    public function getCustom2(): string
    {
        return $this->custom2;
    }

    /**
     * @param string $custom2
     * @return ImportOrderDto
     */
    public function setCustom2(string $custom2): ImportOrderDto
    {
        $this->custom2 = $custom2;

        return $this;
    }

    /**
     * @return string
     */
    public function getCustom3(): string
    {
        return $this->custom3;
    }

    /**
     * @param string $custom3
     * @return ImportOrderDto
     */
    public function setCustom3(string $custom3): ImportOrderDto
    {
        $this->custom3 = $custom3;

        return $this;
    }

    /**
     * @return string
     */
    public function getCustom4(): string
    {
        return $this->custom4;
    }

    /**
     * @param string $custom4
     * @return ImportOrderDto
     */
    public function setCustom4(string $custom4): ImportOrderDto
    {
        $this->custom4 = $custom4;

        return $this;
    }

    /**
     * @return string
     */
    public function getCustom5(): string
    {
        return $this->custom5;
    }

    /**
     * @param string $custom5
     * @return ImportOrderDto
     */
    public function setCustom5(string $custom5): ImportOrderDto
    {
        $this->custom5 = $custom5;

        return $this;
    }

    /**
     * @return string
     */
    public function getRedirectsTo(): string
    {
        return $this->redirectsTo;
    }

    /**
     * @param string $redirectsTo
     * @return ImportOrderDto
     */
    public function setRedirectsTo(string $redirectsTo): ImportOrderDto
    {
        $this->redirectsTo = $redirectsTo;

        return $this;
    }

    /**
     * @return string
     */
    public function getErrorRedirectsTo(): string
    {
        return $this->errorRedirectsTo;
    }

    /**
     * @param string $errorRedirectsTo
     * @return ImportOrderDto
     */
    public function setErrorRedirectsTo(string $errorRedirectsTo): ImportOrderDto
    {
        $this->errorRedirectsTo = $errorRedirectsTo;

        return $this;
    }

    /**
     * @return string
     */
    public function getEci(): string
    {
        return $this->eci;
    }

    /**
     * @param string $eci
     * @return ImportOrderDto
     */
    public function setEci(string $eci): ImportOrderDto
    {
        $this->eci = $eci;

        return $this;
    }

    /**
     * @return string
     */
    public function getXid(): string
    {
        return $this->xid;
    }

    /**
     * @param string $xid
     * @return ImportOrderDto
     */
    public function setXid(string $xid): ImportOrderDto
    {
        $this->xid = $xid;

        return $this;
    }

    /**
     * @return string
     */
    public function getCavv(): string
    {
        return $this->cavv;
    }

    /**
     * @param string $cavv
     * @return ImportOrderDto
     */
    public function setCavv(string $cavv): ImportOrderDto
    {
        $this->cavv = $cavv;

        return $this;
    }

    /**
     * @return string
     */
    public function getRebillEci(): string
    {
        return $this->rebill_eci;
    }

    /**
     * @param string $rebill_eci
     * @return ImportOrderDto
     */
    public function setRebillEci(string $rebill_eci): ImportOrderDto
    {
        $this->rebill_eci = $rebill_eci;

        return $this;
    }

    /**
     * @return string
     */
    public function getRebillXid(): string
    {
        return $this->rebill_xid;
    }

    /**
     * @param string $rebill_xid
     * @return ImportOrderDto
     */
    public function setRebillXid(string $rebill_xid): ImportOrderDto
    {
        $this->rebill_xid = $rebill_xid;

        return $this;
    }

    /**
     * @return string
     */
    public function getRebillCavv(): string
    {
        return $this->rebill_cavv;
    }

    /**
     * @param string $rebill_cavv
     * @return ImportOrderDto
     */
    public function setRebillCavv(string $rebill_cavv): ImportOrderDto
    {
        $this->rebill_cavv = $rebill_cavv;

        return $this;
    }

    /**
     * @return bool
     */
    public function isDisableCustomerDedup(): bool
    {
        return $this->disableCustomerDedup ? "1" : "0";
    }

    /**
     * @param bool $disableCustomerDedup
     * @return ImportOrderDto
     */
    public function setDisableCustomerDedup(bool $disableCustomerDedup): ImportOrderDto
    {
        $this->disableCustomerDedup = $disableCustomerDedup;

        return $this;
    }

    public function addProduct($productId, $quantity = 1, $priceOverride = null, $shippingPriceOverride = null)
    {
        $this->products[$productId. " - " . \uniqid()] = [
            'id' => $productId,
            'qty' => $quantity,
            'price' => $priceOverride,
            'shipPrice' => $shippingPriceOverride,
        ];

        return $this;
    }

    public function removeProduct($indexId)
    {
        if (\array_key_exists($indexId, $this->products)) {
            unset($this->products[$indexId]);
        }
    }

    /**
     * @return array
     */
    public function getProducts(): array
    {
        return $this->products;
    }

    /**
     * @param array $products
     * @return ImportOrderDto
     */
    public function setProducts(array $products): ImportOrderDto
    {
        $this->products = $products;

        return $this;
    }


}
