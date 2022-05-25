<?php

declare(strict_types = 1);

namespace MichalHepner\AtlassianRestClient;

class Credentials
{
    /**
     * @var string
     */
    protected $username;

    /**
     * @var string
     */
    protected $apiToken;

    public function __construct(string $username, string $apiToken)
    {
        $this->username = $username;
        $this->apiToken = $apiToken;
    }

    public function getUsername(): string
    {
        return $this->username;
    }

    public function getApiToken(): string
    {
        return $this->apiToken;
    }
}
