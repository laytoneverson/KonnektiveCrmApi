<?php

namespace LE\KonnektiveCrmApi\ApiCall\OrderFunctions;

use LE\KonnektiveCrmApi\ApiCall\AbstractApiCall;

/**
 * Class CancelOrder
 * @package LE\KonnektiveCrmApi\ApiCall\OrderFunctions
 */
class CancelOrder extends AbstractApiCall
{
    public const API_URI = '/order/cancel/';
    public const DTO_CLASS_FQN = '';
    public const CALL_NAME = 'OrderFunctions\CancelOrder';
    public const REQUEST_METHOD = "POST";
}
