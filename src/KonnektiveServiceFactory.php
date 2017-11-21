<?php

namespace LE\KonnektiveCrmApi;

/**
 * Factory to build a new Konnektive API instance.
 *
 *  Pass an array for configuration with:
 *    apiUser
 *    apiPassword
 *    apiUrl
 *
 * Class KonnektiveServiceFactory
 * @package LE\KonnektiveCrmApi
 */
class KonnektiveServiceFactory
{
    /**
     * @param $konnectiveConfig
     * @return KonnektiveCrmApi
     */
    public function __invoke($konnectiveConfig)
    {
        $config = KonnektiveCrmApi::createConfig(
            $konnectiveConfig['apiUser'],
            $konnectiveConfig['apiPassword'],
            $konnectiveConfig['apiUrl']
        );

        return new KonnektiveCrmApi($config);
    }
}
