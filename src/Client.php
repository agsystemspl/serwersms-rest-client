<?php

namespace AGSystems\SerwerSMS\REST;

use AGSystems\REST\AbstractClient;

/**
 * Class Client
 * @package AGSystems\SerwerSMS\REST
 * @property Client messages
 * @property Client send_sms
 * @property Client send_personalized
 * @method mixed get(array $parameters = [], array $requestOptions = [])
 * @method mixed post(array $parameters = [], array $requestOptions = [])
 * @method mixed put(array $parameters = [], array $requestOptions = [])
 * @method mixed delete(array $parameters = [], array $requestOptions = [])
 */
class Client extends AbstractClient
{
    protected $apiAccessToken;

    public function __construct(
        $apiAccessToken,
        array $options = []
    )
    {
        $this->apiAccessToken = $apiAccessToken;

        parent::__construct($options);
    }

    protected function clientOptions()
    {
        return [
            'base_uri' => 'https://api2.serwersms.pl/',
            'headers' => [
                'Authorization' => 'Bearer ' . $this->apiAccessToken
            ]
        ];
    }
}
