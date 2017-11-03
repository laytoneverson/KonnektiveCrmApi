<?php

namespace LE\KonnektiveCrmApi\DTO\OrderFunctions;

use LE\KonnektiveCrmApi\DTO\AbstractKonnektiveDto;

class ImportLeadDto extends AbstractKonnektiveDto
{
    /**
     * @var string
     */
    protected $orderId;

    /**
     * @var string
     */
    protected $firstName;

    /**
     * @var string
     */
    protected $lastName;

    /**
     * @var string
     */
    protected $companyName;

    /**
     * @var string
     */
    protected $address1;

    /**
     * @var string
     */
    protected $address2;

    /**
     * @var string
     */
    protected $postalCode;

    /**
     * @var string
     */
    protected $city;

    /**
     * @var string
     */
    protected $state;

    /**
     * @var string
     */
    protected $country;

    /**
     * @var string
     */
    protected $emailAddress;

    /**
     * @var string
     */
    protected $phoneNumber;

    /**
     * @var string
     */
    protected $ipAddress;

    /**
     * @var boolean
     */
    protected $billShipSame;

    /**
     * @var string
     */
    protected $shipFirstName;

    /**
     * @var string
     */
    protected $shipLastName;

    /**
     * @var string
     */
    protected $shipCompanyName;

    /**
     * @var string
     */
    protected $shipAddress1;

    /**
     * @var string
     */
    protected $shipAddress2;

    /**
     * @var string
     */
    protected $shipPostalCode;

    /**
     * @var string
     */
    protected $shipCity;

    /**
     * @var string
     */
    protected $shipState;

    /**
     * @var string
     */
    protected $shipCountry;

    /**
     * @var integer
     */
    protected $campaignId;

    /**
     * @var string
     */
    protected $affId;

    /**
     * @var string
     */
    protected $sourceValue1;

    /**
     * @var string
     */
    protected $sourceValue2;

    /**
     * @var string
     */
    protected $sourceValue3;

    /**
     * @var string
     */
    protected $custom1;

    /**
     * @var string
     */
    protected $custom2;

    /**
     * @var string
     */
    protected $custom3;

    /**
     * @var string
     */
    protected $custom4;

    /**
     * @var string
     */
    protected $custom5;

    /**
     * @var boolean
     */
    protected $disableCustomerDedup = 0;

    /**
     * @return string
     */
    public function getOrderId(): string
    {
        return $this->orderId;
    }

    /**
     * @param string $orderId
     * @return ImportLeadDto
     */
    public function setOrderId(string $orderId): ImportLeadDto
    {
        $this->orderId = $orderId;

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
     * @return ImportLeadDto
     */
    public function setFirstName(string $firstName): ImportLeadDto
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
     * @return ImportLeadDto
     */
    public function setLastName(string $lastName): ImportLeadDto
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
     * @return ImportLeadDto
     */
    public function setCompanyName(string $companyName): ImportLeadDto
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
     * @return ImportLeadDto
     */
    public function setAddress1(string $address1): ImportLeadDto
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
     * @return ImportLeadDto
     */
    public function setAddress2(string $address2): ImportLeadDto
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
     * @return ImportLeadDto
     */
    public function setPostalCode(string $postalCode): ImportLeadDto
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
     * @return ImportLeadDto
     */
    public function setCity(string $city): ImportLeadDto
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
     * @return ImportLeadDto
     */
    public function setState(string $state): ImportLeadDto
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
     * @return ImportLeadDto
     */
    public function setCountry(string $country): ImportLeadDto
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
     * @return ImportLeadDto
     */
    public function setEmailAddress(string $emailAddress): ImportLeadDto
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
     * @return ImportLeadDto
     */
    public function setPhoneNumber(string $phoneNumber): ImportLeadDto
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
     * @return ImportLeadDto
     */
    public function setIpAddress(string $ipAddress): ImportLeadDto
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
     * @return ImportLeadDto
     */
    public function setBillShipSame(bool $billShipSame): ImportLeadDto
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
     * @return ImportLeadDto
     */
    public function setShipFirstName(string $shipFirstName): ImportLeadDto
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
     * @return ImportLeadDto
     */
    public function setShipLastName(string $shipLastName): ImportLeadDto
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
     * @return ImportLeadDto
     */
    public function setShipCompanyName(string $shipCompanyName): ImportLeadDto
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
     * @return ImportLeadDto
     */
    public function setShipAddress1(string $shipAddress1): ImportLeadDto
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
     * @return ImportLeadDto
     */
    public function setShipAddress2(string $shipAddress2): ImportLeadDto
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
     * @return ImportLeadDto
     */
    public function setShipPostalCode(string $shipPostalCode): ImportLeadDto
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
     * @return ImportLeadDto
     */
    public function setShipCity(string $shipCity): ImportLeadDto
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
     * @return ImportLeadDto
     */
    public function setShipState(string $shipState): ImportLeadDto
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
     * @return ImportLeadDto
     */
    public function setShipCountry(string $shipCountry): ImportLeadDto
    {
        $this->shipCountry = $shipCountry;

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
     * @return ImportLeadDto
     */
    public function setCampaignId(int $campaignId): ImportLeadDto
    {
        $this->campaignId = $campaignId;

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
     * @return ImportLeadDto
     */
    public function setAffId(string $affId): ImportLeadDto
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
     * @return ImportLeadDto
     */
    public function setSourceValue1(string $sourceValue1): ImportLeadDto
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
     * @return ImportLeadDto
     */
    public function setSourceValue2(string $sourceValue2): ImportLeadDto
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
     * @return ImportLeadDto
     */
    public function setSourceValue3(string $sourceValue3): ImportLeadDto
    {
        $this->sourceValue3 = $sourceValue3;

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
     * @return ImportLeadDto
     */
    public function setCustom1(string $custom1): ImportLeadDto
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
     * @return ImportLeadDto
     */
    public function setCustom2(string $custom2): ImportLeadDto
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
     * @return ImportLeadDto
     */
    public function setCustom3(string $custom3): ImportLeadDto
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
     * @return ImportLeadDto
     */
    public function setCustom4(string $custom4): ImportLeadDto
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
     * @return ImportLeadDto
     */
    public function setCustom5(string $custom5): ImportLeadDto
    {
        $this->custom5 = $custom5;

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
     * @return ImportLeadDto
     */
    public function setDisableCustomerDedup(bool $disableCustomerDedup): ImportLeadDto
    {
        $this->disableCustomerDedup = $disableCustomerDedup;

        return $this;
    }
}
