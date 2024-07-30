<?php

namespace Onetoweb\MultiSafepay\Endpoint\Endpoints;

use Onetoweb\MultiSafepay\Endpoint\AbstractEndpoint;

/**
 * Refund Endpoint.
 */
class Refund extends AbstractEndpoint
{
    /**
     * @param string $orderId
     * @param array $data = []
     * 
     * @return array
     */
    public function create(string $orderId, array $data = []): array
    {
        return $this->client->get("/orders/$orderId/refunds", $data);
    }
}
