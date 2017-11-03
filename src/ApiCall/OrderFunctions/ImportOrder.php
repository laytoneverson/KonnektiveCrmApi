<?php

namespace LE\KonnektiveCrmApi\ApiCall\OrderFunctions;

use LE\KonnektiveCrmApi\ApiCall\AbstractApiCall;
use LE\KonnektiveCrmApi\DTO\OrderFunctions\ImportLeadDto;
use LE\KonnektiveCrmApi\KonnektiveCrmApi;

class ImportOrder extends AbstractApiCall
{
    const API_URI = "/order/import/";
    const DTO_CLASS_FQN = ImportLeadDto::class;
    const CALL_NAME = 'OrderFunctions\ImportOrder';
    const REQUEST_METHOD = "POST";

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
