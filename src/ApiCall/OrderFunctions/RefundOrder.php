<?php

namespace LE\KonnektiveCrmApi\ApiCall\OrderFunctions;

use LE\KonnektiveCrmApi\ApiCall\AbstractApiCall;

/**
 * Class RefundOrder
 * @package LE\KonnektiveCrmApi\ApiCall\OrderFunctions
 */
class RefundOrder extends AbstractApiCall
{
    public const API_URI = '/order/refund';
    public const DTO_CLASS_FQN = '';
    public const CALL_NAME = 'OrderFunctions\RefundOrder';
    public const REQUEST_METHOD = "POST";
}
