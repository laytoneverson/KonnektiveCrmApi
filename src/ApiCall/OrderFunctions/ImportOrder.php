<?php

namespace LE\KonnektiveCrmApi\ApiCall\OrderFunctions;

use LE\KonnektiveCrmApi\ApiCall\AbstractApiCall;
use LE\KonnektiveCrmApi\DTO\OrderFunctions\ImportLeadDto;
use LE\KonnektiveCrmApi\KonnektiveCrmApi;

/**
 * Class ImportOrder
 * @package LE\KonnektiveCrmApi\ApiCall\OrderFunctions
 */
class ImportOrder extends AbstractApiCall
{
    public const API_URI = "/order/import/";
    public const DTO_CLASS_FQN = ImportLeadDto::class;
    public const CALL_NAME = 'OrderFunctions\ImportOrder';
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
        "paySource",
        "campaignId",
        "product1_id",
    ];
}
