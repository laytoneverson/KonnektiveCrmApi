<?php

namespace LE\KonnektiveCrmApi\ApiCall\OrderFunctions;

use LE\KonnektiveCrmApi\ApiCall\AbstractApiCall;

/**
 * Class CancelOrder
 * @package LE\KonnektiveCrmApi\ApiCall\OrderFunctions
 */
class CancelOrder extends AbstractApiCall
{
    const API_URI = '/order/cancel/';
    const DTO_CLASS_FQN = '';
    const CALL_NAME = 'OrderFunctions\CancelOrder';
    const REQUEST_METHOD = "POST";
}
