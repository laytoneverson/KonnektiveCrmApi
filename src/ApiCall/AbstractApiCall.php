<?php

namespace LE\KonnektiveCrmApi\ApiCall;

use LE\KonnektiveCrmApi\DTO\AbstractKonnektiveDto;
use LE\KonnektiveCrmApi\Exception\MissingFieldException;
use LE\KonnektiveCrmApi\Exception\MissingValueException;

/**
 * Class AbstractApiCall
 * @package LE\KonnektiveCrmApi\ApiCall
 */
class AbstractApiCall implements ApiCallInterface
{
    public const CALL_NAME = self::CALL_NAME;
    public const DTO_CLASS_FQN = self::DTO_CLASS_FQN;
    public const API_URI = self::API_URI;
    public const REQUEST_METHOD = self::API_URI;

    /**
     * @var AbstractKonnektiveDto
     */
    protected $requestDataDTO;

    /**
     * @var array
     */
    protected $requestDataArray;

    /**
     * @var boolean
     */
    protected $resultSuccess;

    /**
     * @var string
     */
    protected $resultMessage;

    /**
     * @var string
     */
    protected $resultData;

    /**
     * @var string
     */
    protected $errorMessage;

    /**
     * @var string
     */
    protected $errorCode;

    /**
     * Field names required for api call
     *
     * @var array
     */
    protected $requiredFields = [];

    /**
     * AbstractApiCall constructor.
     * @param AbstractKonnektiveDto|null $requestData
     */
    public function __construct(AbstractKonnektiveDto $requestData = null)
    {
        $this->requestDataDTO = $requestData;
    }

    /**
     * @param array $data
     * @return AbstractKonnektiveDto
     */
    public function createDataObject($data = [])
    {
        $dtoPath = self::DTO_CLASS_FQN;

        return new $dtoPath($data);
    }

    /**
     * Validates api call against api Data Transfer Object
     *
     * @return void
     * @throws MissingFieldException
     * @throws MissingValueException
     *
     */
    public function validate()
    {
        $requestArray = $this->getRequestArray();

        foreach ($this->requiredFields as $f) {
            $exception = false;

            if (!\array_key_exists($requestArray, $f)) {
                $exception = new MissingFieldException(static::CALL_NAME, $f);
            }

            if ( empty($requestArray[$f])) {
                $exception = new MissingValueException(static::CALL_NAME, $f);
            }

            if ($exception) {
                $this->errorCode = $exception->getCode();
                $this->errorMessage = $exception->getMessage();

                throw $exception;
            }
        }
    }

    /**
     * @return AbstractKonnektiveDto
     */
    public function getRequestDataDTO(): AbstractKonnektiveDto
    {
        return $this->requestDataDTO;
    }

    /**
     * @param AbstractKonnektiveDto $requestDataDTO
     * @return AbstractApiCall
     */
    public function setRequestDataDTO(AbstractKonnektiveDto $requestDataDTO): AbstractApiCall
    {
        $this->requestDataDTO = $requestDataDTO;

        return $this;
    }

    /**
     * @return array
     */
    public function getRequestDataArray(): array
    {
        if (null === $this->requestDataArray) {
            $this->requestDataArray = $this->requestDataDTO->toArray();
        }

        return $this->requestDataArray;
    }


    /**
     * @return bool
     */
    public function isResultSuccess(): bool
    {
        return $this->resultSuccess;
    }

    /**
     * @param bool $resultSuccess
     * @return AbstractApiCall
     */
    public function setResultSuccess(bool $resultSuccess): AbstractApiCall
    {
        $this->resultSuccess = $resultSuccess;

        return $this;
    }

    /**
     * @return string
     */
    public function getResultMessage(): string
    {
        return $this->resultMessage;
    }

    /**
     * @param string $resultMessage
     * @return AbstractApiCall
     */
    public function setResultMessage(string $resultMessage): AbstractApiCall
    {
        $this->resultMessage = $resultMessage;

        return $this;
    }

    /**
     * Get request result data. Pass AbstractApiCall::const RESULT_FORMAT_JSON|ARRAY|OBJECT.
     *   Defaults to Array.
     *
     * @return string|array|object Request Result
     */
    public function getResultData($format = self::RESULT_FORMAT_ARRAY): string
    {
        switch ($format) {
            case self::RESULT_FORMAT_ARRAY:
                return \GuzzleHttp\json_decode($this->resultData, true);

            case self::RESULT_FORMAT_OBJECT:
                return \GuzzleHttp\json_decode($this->resultData);

            case self::RESULT_FORMAT_JSON:
                return $this->resultData;
        }

        return $this->resultData;
    }

    /**
     * @param string $resultData
     * @return AbstractApiCall
     */
    public function setResultData(string $resultData): AbstractApiCall
    {
        $this->resultData = $resultData;

        return $this;
    }

    /**
     * @return string
     */
    public function getErrorMessage(): string
    {
        return $this->errorMessage;
    }

    /**
     * @param string $errorMessage
     * @return AbstractApiCall
     */
    public function setErrorMessage(string $errorMessage): AbstractApiCall
    {
        $this->errorMessage = $errorMessage;

        return $this;
    }

    /**
     * @return string
     */
    public function getErrorCode(): string
    {
        return $this->errorCode;
    }

    /**
     * @param string $errorCode
     * @return AbstractApiCall
     */
    public function setErrorCode(string $errorCode): AbstractApiCall
    {
        $this->errorCode = $errorCode;

        return $this;
    }

    /**
     * @return string
     */
    public function getCallName()
    {
        return self::CALL_NAME;
    }

    /**
     * @return string
     */
    public function getDataObjectClass()
    {
        return self::DTO_CLASS_FQN;
    }

    /**
     * @return string
     */
    public function getApiUri()
    {
        return self::API_URI;
    }

    /**
     * @return string
     */
    public function getRequestMethod()
    {
        return self::REQUEST_METHOD;
    }
}
