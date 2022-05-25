<?php

declare(strict_types=1);

namespace MichalHepner\AtlassianRestClient\Jira\Query;

use MichalHepner\AtlassianRestClient\ClientInterface;
use MichalHepner\AtlassianRestClient\Exception\ClientException;
use MichalHepner\AtlassianRestClient\Exception\QueryException;
use MichalHepner\AtlassianRestClient\Factory\ModelFactory;
use MichalHepner\AtlassianRestClient\Jira\Endpoint;
use MichalHepner\AtlassianRestClient\Jira\Model\Project;

class GetProjectQuery
{
    /**
     * @var ClientInterface
     */
    protected $client;

    /**
     * @var ModelFactory
     */
    protected $modelFactory;

    /**
     * @var string
     */
    protected $idOrKey;

    public function __construct(ModelFactory $modelFactory, ClientInterface $client, string $idOrKey)
    {
        $this->modelFactory = $modelFactory;
        $this->client = $client;
        $this->idOrKey = $idOrKey;
    }

    public function execute(): Project
    {
        try {
            $response = $this->client->get(sprintf(Endpoint::GET_PROJECT, $this->idOrKey));

            $body = json_decode($response->getBody()->getContents(), true);

            return $this->modelFactory->create(Project::class, $body);
        } catch (ClientException $exception) {
            throw new QueryException(sprintf('%s query failed', get_class($this)), 0, $exception);
        }
    }
}
