<?php

namespace Onetoweb\MultiSafepay\Endpoint\Endpoints;

use Onetoweb\MultiSafepay\Endpoint\AbstractEndpoint;

/**
 * Transaction Endpoint.
 */
class Transaction extends AbstractEndpoint
{
    /**
     * @param array $query = []
     * 
     * @return array
     */
    public function list(array $query = []): array
    {
        return $this->client->get('/transaction', $query);
    }
    
    /**
     * @param string $transactionId
     * 
     * @return array
     */
    public function get(string $transactionId): array
    {
        return $this->client->get("/transaction/$transactionId");
    }
}
