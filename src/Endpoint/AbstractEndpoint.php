<?php

namespace Onetoweb\MultiSafepay\Endpoint;

use Onetoweb\MultiSafepay\Client;

/**
 * Abstract Endpoint.
 */
abstract class AbstractEndpoint implements EndpointInterface
{
    /**
     * @param Client $client
     */
    public function __construct(
        protected Client $client
    ) {
        
    }
}
