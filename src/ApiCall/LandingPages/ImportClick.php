<?php

namespace LE\KonnektiveCrmApi\ApiCall\LandingPages;

use LE\KonnektiveCrmApi\ApiCall\AbstractApiCall;
use LE\KonnektiveCrmApi\DTO\OrderFunctions\ImportLeadDto;
use LE\KonnektiveCrmApi\KonnektiveCrmApi;

class ImportLead extends AbstractApiCall
{
    const API_URI = 'leads/import/';
    const DTO_CLASS_FQN = ImportLeadDto::class;
    const CALL_NAME = 'OrderFunctions\ImportLead';
    const REQUEST_METHOD = "POST";
}
