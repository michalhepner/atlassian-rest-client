<?php

declare(strict_types = 1);

namespace MichalHepner\AtlassianRestClient\Jira\Query;

use MichalHepner\AtlassianRestClient\ClientInterface;
use MichalHepner\AtlassianRestClient\Exception\ClientException;
use MichalHepner\AtlassianRestClient\Exception\QueryException;
use MichalHepner\AtlassianRestClient\Factory\ModelFactory;
use MichalHepner\AtlassianRestClient\Jira\Endpoint;
use MichalHepner\AtlassianRestClient\Jira\Model\SearchResultBean;

class GetSearchQuery
{
    const EXPAND_DEFAULT = [
        self::EXPAND_RENDERED_FIELDS,
        self::EXPAND_NAMES,
    ];
    const EXPAND_ALL = [
        self::EXPAND_RENDERED_FIELDS,
        self::EXPAND_NAMES,
        self::EXPAND_SCHEMA,
        self::EXPAND_TRANSITIONS,
        self::EXPAND_OPERATIONS,
        self::EXPAND_EDITMETA,
        self::EXPAND_CHANGELOG,
        self::EXPAND_VERSIONED_REPRESENTATIONS,
    ];
    const EXPAND_NONE = [];
    const EXPAND_RENDERED_FIELDS = 'renderedFields';
    const EXPAND_NAMES = 'names';
    const EXPAND_SCHEMA = 'schema';
    const EXPAND_TRANSITIONS = 'transitions';
    const EXPAND_OPERATIONS = 'operations';
    const EXPAND_EDITMETA = 'editmeta';
    const EXPAND_CHANGELOG = 'changelog';
    const EXPAND_VERSIONED_REPRESENTATIONS = 'versionedRepresentations';
    const FIELDS_ALL = ['*all'];
    const FIELDS_NAVIGABLE = ['*navigable'];

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
    protected $jql;

    /**
     * @var int
     */
    protected $startAt = 0;

    /**
     * @var int
     */
    protected $maxResults = 10;

    /**
     * @var string[]
     */
    protected $fields = self::FIELDS_NAVIGABLE;

    /**
     * @var string[]
     */
    protected $expand = self::EXPAND_DEFAULT;

    public function __construct(ModelFactory $modelFactory, ClientInterface $client, string $jql)
    {
        $this->modelFactory = $modelFactory;
        $this->client = $client;
        $this->jql = $jql;
    }

    public function execute(): SearchResultBean
    {
        try {
            $response = $this->client->get(Endpoint::GET_SEARCH, [
                'query' => [
                    'jql' => $this->jql,
                    'maxResults' => $this->maxResults,
                    'startAt' => $this->startAt,
                    'fields' => implode(',', $this->fields),
                    'expand' => implode(',', $this->expand),
                ],
            ]);

            $body = json_decode($response->getBody()->getContents(), true);

            return $this->modelFactory->create(SearchResultBean::class, $body);
        } catch (ClientException $exception) {
            throw new QueryException(sprintf('%s query failed', get_class($this)), 0, $exception);
        }
    }

    /**
     * @return int
     */
    public function getStartAt(): int
    {
        return $this->startAt;
    }

    /**
     * @param int $startAt
     *
     * @return GetSearchQuery
     */
    public function setStartAt(int $startAt): GetSearchQuery
    {
        $this->startAt = $startAt;

        return $this;
    }

    /**
     * @return int
     */
    public function getMaxResults(): int
    {
        return $this->maxResults;
    }

    /**
     * @param int $maxResults
     *
     * @return GetSearchQuery
     */
    public function setMaxResults(int $maxResults): GetSearchQuery
    {
        $this->maxResults = $maxResults;

        return $this;
    }

    /**
     * @return string[]
     */
    public function getFields(): array
    {
        return $this->fields;
    }

    /**
     * @param string[] $fields
     *
     * @return GetSearchQuery
     */
    public function setFields(array $fields): GetSearchQuery
    {
        $this->fields = $fields;

        return $this;
    }

    /**
     * @return string[]
     */
    public function getExpand(): array
    {
        return $this->expand;
    }

    /**
     * @param string[] $expand
     *
     * @return GetSearchQuery
     */
    public function setExpand(array $expand): GetSearchQuery
    {
        $this->expand = $expand;

        return $this;
    }
}
