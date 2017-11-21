<?php

namespace LE\KonnektiveCrmApi\ApiCall\OrderFunctions;

use LE\KonnektiveCrmApi\ApiCall\AbstractApiCall;
use LE\KonnektiveCrmApi\DTO\OrderFunctions\ImportLeadDto;
use LE\KonnektiveCrmApi\KonnektiveCrmApi;

class ConfirmOrder extends AbstractApiCall
{
    public const API_URI = '/order/confirm/';
    public const DTO_CLASS_FQN = ImportLeadDto::class;
    public const CALL_NAME = 'OrderFunctions\ConfirmOrder';
    public const REQUEST_METHOD = "POST";
}
