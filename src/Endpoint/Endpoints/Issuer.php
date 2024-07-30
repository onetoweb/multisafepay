<?php

namespace Onetoweb\MultiSafepay\Endpoint\Endpoints;

use Onetoweb\MultiSafepay\Endpoint\AbstractEndpoint;

/**
 * Issuer Endpoint.
 */
class Issuer extends AbstractEndpoint
{
    /**
     * @param string $gateway
     * @param array $query = []
     * 
     * @return array
     */
    public function list(string $gateway, array $query = []): array
    {
        return $this->client->get("/issuers/$gateway", $query);
    }
}
