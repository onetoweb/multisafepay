<?php

namespace Onetoweb\MultiSafepay\Endpoint\Endpoints;

use Onetoweb\MultiSafepay\Endpoint\AbstractEndpoint;

/**
 * Order Endpoint.
 */
class Order extends AbstractEndpoint
{
    /**
     * @param string $orderId
     * 
     * @return array
     */
    public function get(string $orderId): array
    {
        return $this->client->get("/orders/$orderId");
    }
    
    /**
     * @param array $data = []
     * 
     * @return array
     */
    public function create(array $data = []): array
    {
        return $this->client->post('/orders', $data);
    }
    
    /**
     * @param string $orderId
     * @param array $data = []
     * 
     * @return array
     */
    public function update(string $orderId, array $data = []): array
    {
        return $this->client->patch("/orders/$orderId", $data);
    }
    
    /**
     * @param string $orderId
     * @param array $data = []
     * 
     * @return array
     */
    public function capture(string $orderId, array $data = []): array
    {
        return $this->client->post("/orders/$orderId/capture", $data);
    }
}
