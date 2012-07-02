<?php

class icSilverpop
{
    protected $provider;

    public function __construct()
    {
        if (!sfConfig::get('app_icSilverpopPlugin_username') || !sfConfig::get('app_icSilverpopPlugin_password')) {
            throw new Exception('Silverpop username and password missing from config.');
        }

        $config = array(
            'endpoint' => sfConfig::get('app_icSilverpopPlugin_endpoint'),
            'username' => sfConfig::get('app_icSilverpopPlugin_username'),
            'password' => sfConfig::get('app_icSilverpopPlugin_password')
        );

        $this->provider = new Silverpop($config);
    }

    public function getProvider()
    {
        return $this->provider;
    }
}
