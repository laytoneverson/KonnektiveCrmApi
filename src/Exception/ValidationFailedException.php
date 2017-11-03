<?php

namespace LE\KonnektiveCrmApi\Exception;

use Throwable;

class ValidationFailedException extends KonnektiveApiException
{
    protected $message = "Api call failed validation!";

    protected $fields;

    /**
     * ValidationFailedException constructor.
     * @param string $apiCall
     * @param null $fields
     * @param int $code
     * @param Throwable|null $previous
     */
    public function __construct($apiCall, $fields = null, $code = 0, Throwable $previous = null)
    {
        if ($fields) {
            $this->message .= " This is due to following field(s): $fields";
        }

        parent::__construct($apiCall, $this->message, $code, $previous);
    }
}
