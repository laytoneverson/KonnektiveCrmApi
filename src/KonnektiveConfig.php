<?php

namespace LE\KonnektiveCrmApi;

/**
 * Class KonnektiveConfig
 * @package LE\KonnektiveCrmApi
 */
class KonnektiveConfig
{
    protected $apiUserName = '';
    protected $apiPassword = '';
    protected $apiUrl = '';

    /**
     * KonnektiveConfig constructor.
     * @param $apiUser
     * @param $apiPassword
     * @param $apiUrl
     */
    public function __construct($apiUser, $apiPassword, $apiUrl)
    {
        $this->apiUserName = $apiUser;
        $this->apiPassword = $apiPassword;
        $this->apiUrl = $apiUrl;
    }

    /**
     * Use for creating a post array
     *
     * @return array
     */
    public function toArray()
    {
        return [
            'loginId' => $this->getApiUserName(),
            'password' => $this->getApiPassword(),
        ];
    }

    /**
     * @return string
     */
    public function getApiUserName(): string
    {
        return $this->apiUserName;
    }

    /**
     * @return string
     */
    public function getApiPassword()
    {
        return $this->apiPassword;
    }

    /**
     * @return string
     */
    public function getApiUrl(): string
    {
        return $this->apiUrl;
    }
}
