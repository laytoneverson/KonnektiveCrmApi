<?php

namespace LE\KonnektiveCrmApi;

/**
 * Interface KonnektiveConstantsInterface
 * @package LE\KonnektiveCrmApi
 */
interface KonnektiveConstantsInterface
{
    /* API CALLS */
    const CALL_IMPORT_CLICK = ApiCall\LandingPages\ImportClick::class;
    const CALL_CANCEL_ORDER = ApiCall\OrderFunctions\CancelOrder::class;
    const CALL_CONFIRM_ORDER = ApiCall\OrderFunctions\ConfirmOrder::class;
    const CALL_IMPORT_LEAD = ApiCall\OrderFunctions\ImportLead::class;
    const CALL_IMPORT_ORDER = ApiCall\OrderFunctions\ImportOrder::class;
    const CALL_IMPORT_UPSELL = ApiCall\OrderFunctions\ImportUpsale::class;
    const CALL_PRE_AUTH_ORDER = ApiCall\OrderFunctions\PreauthOrder::class;
    const CALL_QUERY_ORDERS = ApiCall\OrderFunctions\QueryOrders::class;
    const CALL_REFUND_ORDERS = ApiCall\OrderFunctions\RefundOrder::class;

    /* DTO */
    const DTO_IMPORT_LEAD = DTO\OrderFunctions\ImportLeadDto::class;
    const DTO_IMPORT_ORDER = DTO\OrderFunctions\ImportOrderDto::class;
}
