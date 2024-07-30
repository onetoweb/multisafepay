<?php

namespace Onetoweb\MultiSafepay\Endpoint\Endpoints;

use Onetoweb\MultiSafepay\Endpoint\AbstractEndpoint;

/**
 * Site Endpoint.
 */
class Site extends AbstractEndpoint
{
    /**
     * @param string $siteId
     * 
     * @return array
     */
    public function get(string $siteId): array
    {
        return $this->client->get("/sites/$siteId");
    }
    
    /**
     * @param string $siteId
     * @param array $data = []
     * 
     * @return array
     */
    public function update(string $siteId, array $data = []): array
    {
        return $this->client->patch("/sites/$siteId", $data);
    }
}
