<?php

namespace Gtmassey\Wrapsheet;

use GuzzleHttp\Client as GuzzleClient;

class Client
{

    protected const BASE_URL = "https://api.smartsheet.com/2.0/";

    protected GuzzleClient $client;

    protected string $token;

    public function __construct()
    {
        $this->token = $this->setToken(config('wrapsheet.api-token'));

        $authHeader = "Bearer " . $this->token;

        $this->client = new GuzzleClient([
            'base_uri' => self::BASE_URL,
            'headers' => [
                'Authorization' => $authHeader
            ],
            'proxy' => !empty($config['proxy']) ? $config['proxy'] : null
        ]);
    }

    public function setToken(string $token): Client
    {
        $this->token = $token;
        return $this;
    }

    public function get(string $uri, array $options = [])
    {
        return json_decode($this->client->get($uri, $options)->getBody()->getContents());
    }

    public function put(string $uri, array $options = [])
    {
        return json_decode($this->client->put($uri, $options)->getBody()->getContents());
    }

    public function post(string $uri, array $options = [])
    {
        return json_decode($this->client->post($uri, $options)->getBody()->getContents());
    }

    public function delete(string $uri, array $options = [])
    {
        return json_decode($this->client->delete($uri, $options)->getBody()->getContents());
    }

}