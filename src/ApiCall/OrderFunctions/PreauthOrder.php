<?php

namespace LE\KonnektiveCrmApi\ApiCall\OrderFunctions;

use LE\KonnektiveCrmApi\ApiCall\AbstractApiCall;
use LE\KonnektiveCrmApi\DTO\OrderFunctions\ImportLeadDto;
use LE\KonnektiveCrmApi\KonnektiveCrmApi;

/**
 * Class PreauthOrder
 * @package LE\KonnektiveCrmApi\ApiCall\OrderFunctions
 */
class PreauthOrder extends AbstractApiCall
{
    public const API_URI = '/order/preauth/';
    public const DTO_CLASS_FQN = ImportLeadDto::class;
    public const CALL_NAME = 'OrderFunctions\PreauthOrder';
    public const REQUEST_METHOD = "POST";
}
