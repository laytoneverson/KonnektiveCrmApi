<?php

namespace LE\KonnektiveCrmApi\Exception;

use Throwable;

/**
 * Class MissingValueException
 * @package LE\KonnektiveCrmApi\Exception
 */
class MissingValueException extends KonnektiveApiException
{
    /**
     * MissingValueException constructor.
     * @param string $apiCall
     * @param string $field
     * @param Throwable|null $previous
     */
    public function __construct($apiCall, $field, Throwable $previous = null)
    {
        $this->message = "Missing required value for $field for api call $apiCall.";

        parent::__construct($apiCall, $this->message, self::ERROR_MISSING_VALUE_CODE, $previous);
    }
}
