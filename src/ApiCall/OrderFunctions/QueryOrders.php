<?php

namespace LE\KonnektiveCrmApi\ApiCall\OrderFunctions;
use LE\KonnektiveCrmApi\ApiCall\AbstractApiCall;

/**
 * Class QueryOrders
 * @package LE\KonnektiveCrmApi\ApiCall\OrderFunctions
 */
class QueryOrders extends AbstractApiCall
{
    public const API_URI = '/order/query/';
    public const DTO_CLASS_FQN = '';
    public const CALL_NAME = 'OrderFunctions\QueryOrders';
    public const REQUEST_METHOD = "POST";
}
