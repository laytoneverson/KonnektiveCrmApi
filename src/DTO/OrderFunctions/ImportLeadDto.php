<?php

namespace LE\KonnektiveCrmApi\DTO\OrderFunctions;

use LE\KonnektiveCrmApi\DTO\AbstractKonnektiveDto;

/**
 * Class ImportLeadDto
 * @package LE\KonnektiveCrmApi\DTO\OrderFunctions
 */
class ImportLeadDto extends AbstractKonnektiveDto
{
    /**
     * @var string
     */
    protected $orderId = "";

    /**
     * @var string
     */
    protected $firstName = "";

    /**
     * @var string
     */
    protected $lastName = "";

    /**
     * @var string
     */
    protected $companyName = "";

    /**
     * @var string
     */
    protected $address1 = "";

    /**
     * @var string
     */
    protected $address2 = "";

    /**
     * @var string
     */
    protected $postalCode = "";

    /**
     * @var string
     */
    protected $city = "";

    /**
     * @var string
     */
    protected $state = "";

    /**
     * @var string
     */
    protected $country = "";

    /**
     * @var string
     */
    protected $emailAddress = "";

    /**
     * @var string
     */
    protected $phoneNumber = "";

    /**
     * @var string
     */
    protected $ipAddress = "";

    /**
     * @var boolean
     */
    protected $billShipSame = 1;

    /**
     * @var string
     */
    protected $shipFirstName = "";

    /**
     * @var string
     */
    protected $shipLastName = "";

    /**
     * @var string
     */
    protected $shipCompanyName = "";

    /**
     * @var string
     */
    protected $shipAddress1 = "";

    /**
     * @var string
     */
    protected $shipAddress2 = "";

    /**
     * @var string
     */
    protected $shipPostalCode = "";

    /**
     * @var string
     */
    protected $shipCity = "";

    /**
     * @var string
     */
    protected $shipState = "";

    /**
     * @var string
     */
    protected $shipCountry = "";

    /**
     * @var integer
     */
    protected $campaignId = 0;

    /**
     * @var string
     */
    protected $affId = "";

    /**
     * @var string
     */
    protected $sourceValue1 = "";

    /**
     * @var string
     */
    protected $sourceValue2 = "";

    /**
     * @var string
     */
    protected $sourceValue3 = "";

    /**
     * @var string
     */
    protected $custom1 = "";

    /**
     * @var string
     */
    protected $custom2 = "";

    /**
     * @var string
     */
    protected $custom3 = "";

    /**
     * @var string
     */
    protected $custom4 = "";

    /**
     * @var string
     */
    protected $custom5 = "";

    /**
     * @var boolean
     */
    protected $disableCustomerDedup = 0;

    /**
     * @return string
     */
    public function getOrderId()
    {
        return $this->orderId;
    }

    /**
     * @param string $orderId
     * @return ImportLeadDto
     */
    public function setOrderId($orderId)
    {
        $this->orderId = $orderId;

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
     * @return ImportLeadDto
     */
    public function setFirstName($firstName)
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
     * @return ImportLeadDto
     */
    public function setLastName($lastName)
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
     * @return ImportLeadDto
     */
    public function setCompanyName($companyName)
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
     * @return ImportLeadDto
     */
    public function setAddress1($address1)
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
     * @return ImportLeadDto
     */
    public function setAddress2($address2)
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
     * @return ImportLeadDto
     */
    public function setPostalCode($postalCode)
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
     * @return ImportLeadDto
     */
    public function setCity($city)
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
     * @return ImportLeadDto
     */
    public function setState($state)
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
     * @return ImportLeadDto
     */
    public function setCountry($country)
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
     * @return ImportLeadDto
     */
    public function setEmailAddress($emailAddress)
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
     * @return ImportLeadDto
     */
    public function setPhoneNumber($phoneNumber)
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
     * @return ImportLeadDto
     */
    public function setIpAddress($ipAddress)
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
     * @return ImportLeadDto
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
     * @return ImportLeadDto
     */
    public function setShipFirstName($shipFirstName)
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
     * @return ImportLeadDto
     */
    public function setShipLastName($shipLastName)
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
     * @return ImportLeadDto
     */
    public function setShipCompanyName($shipCompanyName)
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
     * @return ImportLeadDto
     */
    public function setShipAddress1($shipAddress1)
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
     * @return ImportLeadDto
     */
    public function setShipAddress2($shipAddress2)
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
     * @return ImportLeadDto
     */
    public function setShipPostalCode($shipPostalCode)
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
     * @return ImportLeadDto
     */
    public function setShipCity($shipCity)
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
     * @return ImportLeadDto
     */
    public function setShipState($shipState)
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
     * @return ImportLeadDto
     */
    public function setShipCountry($shipCountry)
    {
        $this->shipCountry = $shipCountry;

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
     * @return ImportLeadDto
     */
    public function setCampaignId($campaignId)
    {
        $this->campaignId = $campaignId;

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
     * @return ImportLeadDto
     */
    public function setAffId($affId)
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
     * @return ImportLeadDto
     */
    public function setSourceValue1($sourceValue1)
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
     * @return ImportLeadDto
     */
    public function setSourceValue2($sourceValue2)
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
     * @return ImportLeadDto
     */
    public function setSourceValue3($sourceValue3)
    {
        $this->sourceValue3 = $sourceValue3;

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
     * @return ImportLeadDto
     */
    public function setCustom1($custom1)
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
     * @return ImportLeadDto
     */
    public function setCustom2($custom2)
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
     * @return ImportLeadDto
     */
    public function setCustom3($custom3)
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
     * @return ImportLeadDto
     */
    public function setCustom4($custom4)
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
     * @return ImportLeadDto
     */
    public function setCustom5($custom5)
    {
        $this->custom5 = $custom5;

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
     * @return ImportLeadDto
     */
    public function setDisableCustomerDedup($disableCustomerDedup)
    {
        $this->disableCustomerDedup = $disableCustomerDedup;

        return $this;
    }
}
