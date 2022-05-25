<?php

declare(strict_types = 1);

namespace MichalHepner\AtlassianRestClient;

use Psr\Http\Message\ResponseInterface;

interface ClientInterface
{
    public function getConfiguration(): Configuration;
    public function getCredentials(): Credentials;
    public function get(string $endpoint, array $options = []): ResponseInterface;
    public function post(string $endpoint, array $data, array $options = []): ResponseInterface;
}
