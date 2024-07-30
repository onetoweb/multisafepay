<?php

namespace Onetoweb\MultiSafepay\Endpoint\Endpoints;

use Onetoweb\MultiSafepay\Endpoint\AbstractEndpoint;

/**
 * Pay After Delivery Endpoint.
 */
class PayAfterDelivery extends AbstractEndpoint
{
    /**
     * @param string $orderId
     * @param array $data = []
     * 
     * @return array
     */
    public function onhold(string $orderId, array $data = []): array
    {
        return $this->client->post("/pad/orders/$orderId/onhold", $data);
    }
    
    /**
     * @param string $orderId
     * @param array $data = []
     * 
     * @return array
     */
    public function extendAutoExpire(string $orderId, array $data = []): array
    {
        return $this->client->post("/pad/orders/{order_id}/autoexpire", $data);
    }
}
