<?php

namespace LE\KonnektiveCrmApi;

/**
 * Interface KonnektiveContantsInterface
 * @package LE\KonnektiveCrmApi
 */
interface KonnektiveContantsInterface
{
    /* API CALLS */
    public const CALL_IMPORT_CLICK = ApiCall\LandingPages\ImportClick::class;
    public const CALL_CANCEL_ORDER = ApiCall\OrderFunctions\CancelOrder::class;
    public const CALL_CONFIRM_ORDER = ApiCall\OrderFunctions\ConfirmOrder::class;
    public const CALL_IMPORT_LEAD = ApiCall\OrderFunctions\ImportLead::class;
    public const CALL_IMPORT_ORDER = ApiCall\OrderFunctions\ImportOrder::class;
    public const CALL_IMPORT_UPSELL = ApiCall\OrderFunctions\ImportUpsale::class;
    public const CALL_PRE_AUTH_ORDER = ApiCall\OrderFunctions\PreauthOrder::class;
    public const CALL_QUERY_ORDERS = ApiCall\OrderFunctions\QueryOrders::class;
    public const CALL_REFUND_ORDERS = ApiCall\OrderFunctions\RefundOrder::class;

    /* DTO */
    public const DTO_IMPORT_LEAD = DTO\OrderFunctions\ImportLeadDto::class;
    public const DTO_IMPORT_ORDER = DTO\OrderFunctions\ImportOrderDto::class;
}
