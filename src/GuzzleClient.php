<?php

declare(strict_types = 1);

namespace MichalHepner\AtlassianRestClient;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\RequestOptions;
use MichalHepner\AtlassianRestClient\Exception\ClientException;
use Psr\Http\Message\ResponseInterface;

class GuzzleClient implements ClientInterface
{
    /**
     * @var Client
     */
    protected $guzzle;

    /**
     * @var Configuration
     */
    protected $configuration;

    /**
     * @var Credentials
     */
    protected $credentials;

    public function __construct(Configuration $configuration, Credentials $credentials, ?Client $guzzle = null)
    {
        $this->configuration = $configuration;
        $this->credentials = $credentials;
        $this->guzzle = $guzzle ?? new Client();
    }

    public function get(string $endpoint, array $options = []): ResponseInterface
    {
        $options = array_merge([
            RequestOptions::HEADERS => [
                'Accept' => 'application/json',
            ],
            RequestOptions::AUTH => [
                $this->credentials->getUsername(),
                $this->credentials->getApiToken()
            ],
            RequestOptions::HTTP_ERRORS => true,
        ], $options);

        $uri = implode('', [$this->configuration->getInstanceUrl(), $endpoint]);

        try {
            return $this->guzzle->get($uri, $options);
        } catch (GuzzleException $exception) {
            throw new ClientException(
                sprintf('Atlassian REST client request failed with message \'%s\'', $exception->getMessage()),
                0,
                $exception
            );
        }
    }

    public function post(string $endpoint, array $data, array $options = []): ResponseInterface
    {
        $options = array_merge([
            RequestOptions::HEADERS => [
                'Accept' => 'application/json',
            ],
            RequestOptions::AUTH => [
                $this->credentials->getUsername(),
                $this->credentials->getApiToken()
            ],
            RequestOptions::HTTP_ERRORS => true,
            RequestOptions::JSON => $data
        ], $options);

        $uri = implode('', [$this->configuration->getInstanceUrl(), $endpoint]);

        try {
            return $this->guzzle->post($uri, $options);
        } catch (GuzzleException $exception) {
            throw new ClientException(
                sprintf('Atlassian REST client request failed with message \'%s\'', $exception->getMessage()),
                0,
                $exception
            );
        }
    }

    public function getConfiguration(): Configuration
    {
        return $this->configuration;
    }

    public function getCredentials(): Credentials
    {
        return $this->credentials;
    }
}
