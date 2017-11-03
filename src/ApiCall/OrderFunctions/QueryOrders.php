<?php

namespace LE\KonnektiveCrmApi\ApiCall\OrderFunctions;


use LE\KonnektiveCrmApi\ApiCall\AbstractApiCall;

class QueryOrders extends AbstractApiCall
{
    const API_URI = '/order/query/';
    const DTO_CLASS_FQN = '';
    const CALL_NAME = 'OrderFunctions\QueryOrders';
    const REQUEST_METHOD = "POST";
}
