<?php

namespace LE\KonnektiveCrmApi;

use LE\KonnektiveCrmApi\ApiCall;
use LE\KonnektiveCrmApi\ApiCall\AbstractApiCall;
use LE\KonnektiveCrmApi\DTO;

/**
 * Class KonnektiveCrmApi
 * @package LE\KonnektiveCrmApi
 */
class KonnektiveCrmApi implements KonnektiveContantsInterface
{
    /**
     * @var KonnektiveConfig
     */
    private  $konnektiveConfig = '';

    /**
     * @var ApiCallExecuter
     */
    private $executor;

    /**
     * KonnektiveCrmApi constructor.
     * @param KonnektiveConfig $config
     */
    public function __construct(KonnektiveConfig $config)
    {
        $this->konnektiveConfig = $config;

        $this->executor = new ApiCallExecuter($config);
    }

    /**
     * @param $userName
     * @param $password
     * @param $requestUrl
     * @return KonnektiveConfig
     */
    public static function createConfig($userName, $password, $requestUrl)
    {
        return new KonnektiveConfig($userName, $password, $requestUrl);
    }

    /**
     * Use the KonnektiveCrmApi::CALL_{CALL_NAME} hints. i.e. $kCrm->newCall(KonnektiveCrmApi::CALL_ADD_LEAD)
     *
     * @param $callFqn
     * @return AbstractApiCall
     */
    public static function createNewCall($callFqn, $dtoObject = null)
    {
        return new $callFqn();
    }

    /**
     * Use the KonnektiveCrmApi::DTO_{DTO_NAME} constants. i.e. $kCrm->newCall(KonnektiveCrmApi::DTO_LEAD)
     *
     * @param $dtoFqn
     * @param array $data
     * @return DTO\AbstractKonnektiveDto
     */
    public static function createDataObject($dtoFqn, $data = [])
    {
        return new $dtoFqn($data);
    }

    /**
     * @param ApiCall\AbstractApiCall $apiCall
     * @return bool
     */
    public function executeCall(ApiCall\AbstractApiCall $apiCall)
    {
        $this->executor->setApiCall($apiCall);

        return $this->executor->execute();
    }
}
