<?php

declare(strict_types=1);

namespace MichalHepner\AtlassianRestClient\Jira\Query;

use MichalHepner\AtlassianRestClient\ClientInterface;
use MichalHepner\AtlassianRestClient\Exception\ClientException;
use MichalHepner\AtlassianRestClient\Exception\QueryException;
use MichalHepner\AtlassianRestClient\Factory\ModelFactory;
use MichalHepner\AtlassianRestClient\Jira\Endpoint;
use MichalHepner\AtlassianRestClient\Jira\Model\User;

class GetMyselfQuery
{
    /**
     * @var ClientInterface
     */
    protected $client;

    /**
     * @var ModelFactory
     */
    protected $modelFactory;

    public function __construct(ModelFactory $modelFactory, ClientInterface $client)
    {
        $this->modelFactory = $modelFactory;
        $this->client = $client;
    }

    public function execute(): User
    {
        try {
            $response = $this->client->get(Endpoint::GET_MYSELF);

            $body = json_decode($response->getBody()->getContents(), true);

            return $this->modelFactory->create(User::class, $body);
        } catch (ClientException $exception) {
            throw new QueryException(sprintf('%s query failed', get_class($this)), 0, $exception);
        }
    }
}
