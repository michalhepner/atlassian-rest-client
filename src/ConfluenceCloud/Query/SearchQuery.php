<?php

declare(strict_types = 1);

namespace MichalHepner\AtlassianRestClient\ConfluenceCloud\Query;

use MichalHepner\AtlassianRestClient\ClientInterface;
use MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\SearchPageResponseSearchResult;
use MichalHepner\AtlassianRestClient\Factory\ModelFactory;

class SearchQuery
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
    protected $cql;

    /**
     * @var int
     */
    protected $start = 0;

    /**
     * @var int
     */
    protected $limit = 10;

    public function __construct(ClientInterface $client, ModelFactory $modelFactory, string $cql)
    {
        $this->client = $client;
        $this->modelFactory = $modelFactory;
        $this->cql = $cql;
    }

    public function execute(): SearchPageResponseSearchResult
    {
        $response = $this->client->get('/wiki/rest/api/search', [
            'query' => [
                'cql' => $this->cql,
                'start' => $this->start,
                'limit' => $this->limit,
            ],
        ]);

        $body = json_decode($response->getBody()->getContents(), true);

        return $this->modelFactory->create(SearchPageResponseSearchResult::class, $body);
    }

    /**
     * @return int
     */
    public function getStart(): int
    {
        return $this->start;
    }

    /**
     * @param int $start
     *
     * @return SearchQuery
     */
    public function setStart(int $start): SearchQuery
    {
        $this->start = $start;

        return $this;
    }

    /**
     * @return int
     */
    public function getLimit(): int
    {
        return $this->limit;
    }

    /**
     * @param int $limit
     *
     * @return SearchQuery
     */
    public function setLimit(int $limit): SearchQuery
    {
        $this->limit = $limit;

        return $this;
    }
}
