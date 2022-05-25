<?php

namespace MichalHepner\AtlassianRestClient;

use GuzzleHttp\Client;

class GuzzleClientFactory
{
    /**
     * @var Client
     */
    protected $guzzle;

    public function __construct(Client $guzzle)
    {
        $this->guzzle = $guzzle;
    }

    public function create(Configuration $configuration, Credentials $credentials): ClientInterface
    {
        return new GuzzleClient($this->guzzle, $configuration, $credentials);
    }
}
