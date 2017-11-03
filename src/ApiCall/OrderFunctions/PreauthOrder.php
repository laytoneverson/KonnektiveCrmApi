<?php

namespace LE\KonnektiveCrmApi\ApiCall\OrderFunctions;

use LE\KonnektiveCrmApi\ApiCall\AbstractApiCall;
use LE\KonnektiveCrmApi\DTO\OrderFunctions\ImportLeadDto;
use LE\KonnektiveCrmApi\KonnektiveCrmApi;

class PreauthOrder extends AbstractApiCall
{
    const API_URI = '/order/preauth/';
    const DTO_CLASS_FQN = ImportLeadDto::class;
    const CALL_NAME = 'OrderFunctions\PreauthOrder';
    const REQUEST_METHOD = "POST";
}
