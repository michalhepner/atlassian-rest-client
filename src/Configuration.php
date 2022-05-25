<?php

declare(strict_types = 1);

namespace MichalHepner\AtlassianRestClient;

class Configuration
{
    /**
     * @var string
     */
    protected $instanceUrl;

    public function __construct(string $instanceUrl)
    {
        $this->instanceUrl = $instanceUrl;
    }

    public function getInstanceUrl(): string
    {
        return $this->instanceUrl;
    }
}
