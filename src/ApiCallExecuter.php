<?php

namespace LE\KonnektiveCrmApi;

use GuzzleHttp\Client;
use GuzzleHttp\Psr7\Request;
use LE\KonnektiveCrmApi\ApiCall\AbstractApiCall;
use LE\KonnektiveCrmApi\Exception\KonnektiveApiException;

class ApiCallExecuter
{
    /**
     * @var KonnektiveConfig
     */
    protected $config;

    /**
     * @var AbstractApiCall
     */
    protected $apiCall;

    protected $guzzle;

    public function __construct(KonnektiveConfig $config)
    {
        $this->client = new GuzzleHttp\Client(['base_uri' => $config->getApiUrl()]);

        $this->config = $config;
    }

    public function setApiCall(AbstractApiCall $apiCall)
    {
        $this->apiCall = $apiCall;

        return $this;
    }

    /**
     * @return bool
     */
    public function execute()
    {
        //Internal Validation
        try {
            $this->apiCall->validate();
        } catch (KonnektiveApiException $exception) {
            $this->apiCall->setResultSuccess(false)
                ->setErrorCode($exception->getCode())
                ->setErrorMessage($exception->getMessage())
                ->setResultMessage("Request Unsuccessful");

            return false;
        }

        //Send Request
        $apiUri = $this->apiCall->getApiUri();
        $method = $this->apiCall->getRequestMethod();
        $dataKeyValue = ($method == "GET")
            ? "query"
            : 'form_params';

        /**
         * @var $response \Psr\Http\Message\ResponseInterface
         */
        $response = $this->client->request($method, $apiUri, [
            $dataKeyValue => $this->getRequestBody()
        ]);

        if ($response->getStatusCode() !== 200) {
            $this->apiCall
                ->setResultSuccess(false)
                ->setResultMessage($response->getBody())
                ->setErrorCode($response->getStatusCode())
                ->setErrorMessage($response->getReasonPhrase());

            return false;
        }

        $responseData = \GuzzleHttp\json_decode($response->getBody(), true);

        if (!\array_key_exists('result', $responseData)) {
            $this->apiCall->setResultSuccess(false)
                ->setResultMessage("Unable to read response")
                ->setResultData($response->getBody());

            return false;
        }

        switch ($responseData['result']) {
            case "SUCCESS":
                $this->apiCall->setResultSuccess(true)
                    ->setResultMessage("Request Successful!")
                    ->setResultData($responseData['message']);
                return true;
            case "ERROR":
                $this->apiCall->setResultSuccess(false)
                    ->setResultMessage("Request Unsuccessful")
                    ->setResultData($responseData['message']);
                return false;
            default:
                $this->apiCall->setResultSuccess(false)
                    ->setResultMessage("Response Unknown")
                    ->setResultData($responseData['message']);
                return false;
        }

    }


    private function getRequestBody($asString = false)
    {
        return  \array_merge($this->config->toArray(), $this->apiCall->getRequestDataArray());
    }
}
