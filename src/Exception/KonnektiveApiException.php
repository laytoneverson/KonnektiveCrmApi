<?php

namespace LE\KonnektiveCrmApi\Exception;

use Throwable;

/**
 * Class KonnektiveApiException
 * @package LE\KonnektiveCrmApi\Exception
 */
class KonnektiveApiException extends \Exception
{
    public const ERROR_VALIDATION_FAILED = 1000;
    public const ERROR_MISSING_FIELD_CODE = 1001;
    public const ERROR_MISSING_VALUE_CODE = 1002;

    protected $apiCall;

    protected $fields;

    /**
     * KonnektiveApiException constructor.
     * @param string $apiCall
     * @param string $fields
     * @param string $message
     * @param int $code
     * @param Throwable|null $previous
     */
    public function __construct(
        $apiCall = '',
        $fields = '',
        $message =  "General validation failed exception",
        $code = self::ERROR_VALIDATION_FAILED,
        Throwable $previous = null
    ) {
        $this->apiCall = $apiCall;
        $this->fields = $fields;

        parent::__construct($message, $code, $previous);
    }

    /**
     * @return string
     */
    public function getApiCall(): string
    {
        return $this->apiCall;
    }

    /**
     * @param string $apiCall
     */
    public function setApiCall(string $apiCall)
    {
        $this->apiCall = $apiCall;
    }

    /**
     * @return mixed
     */
    public function getFields()
    {
        return $this->fields;
    }

    /**
     * @param mixed $fields
     */
    public function setFields($fields)
    {
        $this->fields = $fields;
    }
}
