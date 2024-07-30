<?php

namespace Onetoweb\MultiSafepay\Endpoint\Endpoints;

use Onetoweb\MultiSafepay\Endpoint\AbstractEndpoint;

/**
 * Gateway Endpoint.
 */
class Gateway extends AbstractEndpoint
{
    /**
     * @param array $query = []
     * 
     * @return array
     */
    public function list(array $query = []): array
    {
        return $this->client->get('/gateways', $query);
    }
    
    /**
     * @param string $gateway
     * @param array $query = []
     * 
     * @return array
     */
    public function get(string $gateway, array $query = []): array
    {
        return $this->client->get("/gateways/$gateway", $query);
    }
}
