<?php

namespace LE\KonnektiveCrmApi\ApiCall;

use LE\KonnektiveCrmApi\DTO\AbstractKonnektiveDto;

/**
 * Interface ApiCallInterface
 * @package LE\KonnektiveCrmApi\ApiCall
 */
interface ApiCallInterface
{
    const RESULT_FORMAT_JSON = "json";
    const RESULT_FORMAT_ARRAY = "array";
    const RESULT_FORMAT_OBJECT = "object";

    /**
     * ApiCallInterface constructor.
     * @param AbstractKonnektiveDto|null $requestData
     */
    public function __construct(AbstractKonnektiveDto $requestData = null);
}
