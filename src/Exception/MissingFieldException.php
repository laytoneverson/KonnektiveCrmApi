<?php

namespace LE\KonnektiveCrmApi\Exception;

use Throwable;

/**
 * Class MissingFieldException
 * @package LE\KonnektiveCrmApi\Exception
 */
class MissingFieldException extends KonnektiveApiException
{
    /**
     * MissingFieldException constructor.
     * @param string $apiCall
     * @param string $field
     * @param Throwable|null $previous
     */
    public function __construct($apiCall, $field, Throwable $previous = null)
    {
        $this->message = "Missing required field $field for api call $apiCall.";

        parent::__construct($apiCall, $this->message, self::ERROR_MISSING_FIELD_CODE, $previous);
    }
}
