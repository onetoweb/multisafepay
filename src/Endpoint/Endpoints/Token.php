<?php

namespace Onetoweb\MultiSafepay\Endpoint\Endpoints;

use Onetoweb\MultiSafepay\Endpoint\AbstractEndpoint;

/**
 * Token Endpoint.
 */
class Token extends AbstractEndpoint
{
    /**
     * @param string $customerReference
     * @param array $query = []
     * 
     * @return array
     */
    public function list(string $customerReference, array $query = []): array
    {
        return $this->client->get("/recurring/$customerReference", $query);
    }
    
    /**
     * @param string $customerReference
     * @param string $token
     * 
     * @return array
     */
    public function get(string $customerReference, string $token): array
    {
        return $this->client->get("/recurring/$customerReference/$token");
    }
    
    /**
     * @param string $customerReference
     * @param string $token
     * @param array $data = []
     *
     * @return array
     */
    public function update(string $customerReference, string $token, array $data = []): array
    {
        return $this->client->patch("/recurring/$customerReference/$token", $data);
    }
    
    /**
     * @param string $customerReference
     * @param string $token
     *
     * @return array
     */
    public function delete(string $customerReference, string $token): array
    {
        return $this->client->delete("/recurring/$customerReference/$token");
    }
}
