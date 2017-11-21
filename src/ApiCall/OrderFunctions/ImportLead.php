<?php

namespace LE\KonnektiveCrmApi\ApiCall\OrderFunctions;

use LE\KonnektiveCrmApi\ApiCall\AbstractApiCall;
use LE\KonnektiveCrmApi\DTO\OrderFunctions\ImportLeadDto;
use LE\KonnektiveCrmApi\KonnektiveCrmApi;

/**
 * Class ImportLead
 * @package LE\KonnektiveCrmApi\ApiCall\OrderFunctions
 */
class ImportLead extends AbstractApiCall
{
    public const API_URI = '/leads/import/';
    public const DTO_CLASS_FQN = ImportLeadDto::class;
    public const CALL_NAME = 'OrderFunctions\ImportLead';
    public const REQUEST_METHOD = "POST";

    protected $requiredFields = [
        "firstName",
        "lastName",
        "address1",
        "postalCode",
        "city",
        "state",
        "country",
        "emailAddress",
        "phoneNumber",
        "ipAddress",
        "shipFirstName",
        "shipLastName",
        "shipAddress1",
        "shipPostalCode",
        "shipCity",
        "shipState",
        "shipCountry",
        "campaignId",
    ];
}
