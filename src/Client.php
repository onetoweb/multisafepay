<?php

namespace Onetoweb\MultiSafepay;

use Onetoweb\MultiSafepay\Endpoint\Endpoints;
use GuzzleHttp\RequestOptions;
use GuzzleHttp\Client as GuzzleCLient;
use Onetoweb\MultiSafepay\Config\{Method, BaseHref};

/**
 * Multisafepay Api Client.
 */
#[\AllowDynamicProperties]
class Client
{
    /**
     * @param string $apiKey
     * @param bool $testModus = true
     */
    public function __construct(
        
        #[\SensitiveParameter]
        private string $apiKey,
        
        private bool $testModus = true
    ) {
        // load endpoints
        $this->loadEndpoints();
    }
    
    /**
     * @return void
     */
    private function loadEndpoints(): void
    {
        foreach (Endpoints::list() as $name => $class) {
            $this->{$name} = new $class($this);
        }
    }
    
    /**
     * @return string
     */
    public function getBaseHref(): string
    {
        return $this->testModus ? BaseHref::TEST->value : BaseHref::LIVE->value;
    }
    
    /**
     * @param string $endpoint
     * 
     * @return string
     */
    public function getUrl(string $endpoint): string
    {
        return $this->getBaseHref() . '/' . ltrim($endpoint, '/');
    }
    
    /**
     * @param string $endpoint
     * @param array $query = []
     * 
     * @return array
     */
    public function get(string $endpoint, array $query = []): array
    {
        return $this->request(Method::GET, $endpoint, [], $query);
    }
    
    /**
     * @param string $endpoint
     * @param array $data = []
     * 
     * @return array
     */
    public function post(string $endpoint, array $data = []): array
    {
        return $this->request(Method::POST, $endpoint, $data);
    }
    
    /**
     * @param string $endpoint
     * @param array $data = []
     * 
     * @return array
     */
    public function patch(string $endpoint, array $data = []): array
    {
        return $this->request(Method::PATCH, $endpoint, $data);
    }
    
    /**
     * @param string $endpoint
     * 
     * @return array
     */
    public function delete(string $endpoint): array
    {
        return $this->request(Method::DELETE, $endpoint);
    }
    
    /**
     * @param Method $method
     * @param string $endpoint
     * @param array $data = []
     * @param array $query = []
     * 
     * @return array
     */
    public function request(Method $method, string $endpoint, array $data = [], array $query = []): array
    {
        // build options
        $options = [
            RequestOptions::HTTP_ERRORS => false,
            RequestOptions::HEADERS => [
                'accept' => 'application/json',
                'content-type' => 'application/json',
            ],
            RequestOptions::JSON => $data,
            RequestOptions::QUERY => array_merge([
                'api_key' => $this->apiKey
            ], $query)
        ];
        
        // make request
        $response = (new GuzzleCLient())->request($method->value, $this->getUrl($endpoint), $options);
        
        // decode json
        $json = json_decode($response->getBody()->getContents(), true);
        
        return $json;
    }
}
