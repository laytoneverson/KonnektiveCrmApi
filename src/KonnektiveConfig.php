<?php

namespace LE\KonnektiveCrmApi;

class KonnektiveConfig
{
    protected $apiUserName = '';
    protected $apiPassword = '';
    protected $apiUrl = '';

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
            'password' => $this->getApiUserName(),
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
    public function getApiPassword(): string
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
