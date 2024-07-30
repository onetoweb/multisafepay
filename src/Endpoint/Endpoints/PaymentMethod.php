<?php

namespace Onetoweb\MultiSafepay\Endpoint\Endpoints;

use Onetoweb\MultiSafepay\Endpoint\AbstractEndpoint;

/**
 * Payment Method Endpoint.
 */
class PaymentMethod extends AbstractEndpoint
{
    /**
     * @param array $query = []
     * 
     * @return array
     */
    public function list(array $query = []): array
    {
        return $this->client->get('/payment-methods', $query);
    }
    
    /**
     * @param string $paymentMethodId
     * @param array $query = []
     * 
     * @return array
     */
    public function get(string $paymentMethodId, array $query = []): array
    {
        return $this->client->get("/payment-methods/$paymentMethodId", $query);
    }
}
