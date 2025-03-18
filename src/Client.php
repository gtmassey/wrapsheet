<?php

namespace Gtmassey\Wrapsheet;

use GuzzleHttp\Client as GuzzleClient;
use GuzzleHttp\Exception\GuzzleException;

class Client
{
    protected const BASE_URL = 'https://api.smartsheet.com/2.0/';

    protected GuzzleClient $client;

    protected string $token;

    public function __construct()
    {
        $this->setToken(config('wrapsheet.api-token'));

        $authHeader = "Bearer $this->token";

        $this->client = new GuzzleClient([
            'base_uri' => self::BASE_URL,
            'headers' => [
                'Authorization' => $authHeader,
            ],
            // 'proxy' => ! empty($config['proxy']) ? $config['proxy'] : null,
        ]);
    }

    /**
     * @return $this
     */
    public function setToken(string $token): Client
    {
        $this->token = $token;

        return $this;
    }

    /**
     * @param  array<string, mixed>  $options
     * @return mixed|void
     */
    public function get(string $uri, array $options = [])
    {
        // TODO implement options
        try {
            //dd(json_decode($this->client->request('GET', $uri)->getBody()->getContents(), true));
            return json_decode($this->client->request('GET', $uri)->getBody()->getContents(), true);
        } catch (GuzzleException $e) {
            // todo: do something...
        }
    }
}
