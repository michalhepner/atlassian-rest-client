<?php

declare(strict_types = 1);

namespace MichalHepner\AtlassianRestClient\ConfluenceCloud\Query;

use MichalHepner\AtlassianRestClient\ClientInterface;
use MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\ContentArray;
use MichalHepner\AtlassianRestClient\Factory\ModelFactory;

class ContentSearchQuery
{
    const EXPAND_ALL = [
        self::EXPAND_CHILD_TYPES_ALL,
        self::EXPAND_CHILD_TYPES_ATTACHMENT,
        self::EXPAND_CHILD_TYPES_COMMENT,
        self::EXPAND_CHILD_TYPES_PAGE,
        self::EXPAND_CONTAINER,
        self::EXPAND_METADATA_CURRENTUSER,
        self::EXPAND_METADATA_PROPERTIES,
        self::EXPAND_METADATA_LABELS,
        self::EXPAND_METADATA_FRONTEND,
        self::EXPAND_OPERATIONS,
        self::EXPAND_CHILDREN_PAGE,
        self::EXPAND_CHILDREN_ATTACHMENT,
        self::EXPAND_CHILDREN_COMMENT,
        self::EXPAND_RESTRICTIONS_READ_RESTRICTIONS_USER,
        self::EXPAND_RESTRICTIONS_READ_RESTRICTIONS_GROUP,
        self::EXPAND_RESTRICTIONS_UPDATE_RESTRICTIONS_USER,
        self::EXPAND_RESTRICTIONS_UPDATE_RESTRICTIONS_GROUP,
        self::EXPAND_HISTORY,
        self::EXPAND_HISTORY_LAST_UPDATED,
        self::EXPAND_HISTORY_PREVIOUS_VERSION,
        self::EXPAND_HISTORY_CONTRIBUTORS,
        self::EXPAND_HISTORY_NEXT_VERSION,
        self::EXPAND_ANCESTORS,
        self::EXPAND_BODY,
        self::EXPAND_VERSION,
        self::EXPAND_DESCENDANTS_PAGE,
        self::EXPAND_DESCENDANTS_ATTACHMENT,
        self::EXPAND_DESCENDANTS_COMMENT,
        self::EXPAND_SPACE,
    ];

    const EXPAND_DEFAULT = [
        self::EXPAND_HISTORY,
        self::EXPAND_SPACE,
        self::EXPAND_VERSION,
    ];

	const EXPAND_CHILD_TYPES_ALL = 'childTypes.all';
	const EXPAND_CHILD_TYPES_ATTACHMENT = 'childTypes.attachment';
	const EXPAND_CHILD_TYPES_COMMENT = 'childTypes.comment';
	const EXPAND_CHILD_TYPES_PAGE = 'childTypes.page';
	const EXPAND_CONTAINER = 'container';
	const EXPAND_METADATA_CURRENTUSER = 'metadata.currentuser';
	const EXPAND_METADATA_PROPERTIES = 'metadata.properties';
	const EXPAND_METADATA_LABELS = 'metadata.labels';
	const EXPAND_METADATA_FRONTEND = 'metadata.frontend';
	const EXPAND_OPERATIONS = 'operations';
	const EXPAND_CHILDREN_PAGE = 'children.page';
	const EXPAND_CHILDREN_ATTACHMENT = 'children.attachment';
	const EXPAND_CHILDREN_COMMENT = 'children.comment';
	const EXPAND_RESTRICTIONS_READ_RESTRICTIONS_USER = 'restrictions.read.restrictions.user';
	const EXPAND_RESTRICTIONS_READ_RESTRICTIONS_GROUP = 'restrictions.read.restrictions.group';
	const EXPAND_RESTRICTIONS_UPDATE_RESTRICTIONS_USER = 'restrictions.update.restrictions.user';
	const EXPAND_RESTRICTIONS_UPDATE_RESTRICTIONS_GROUP = 'restrictions.update.restrictions.group';
	const EXPAND_HISTORY = 'history';
	const EXPAND_HISTORY_LAST_UPDATED = 'history.lastUpdated';
	const EXPAND_HISTORY_PREVIOUS_VERSION = 'history.previousVersion';
	const EXPAND_HISTORY_CONTRIBUTORS = 'history.contributors';
	const EXPAND_HISTORY_NEXT_VERSION = 'history.nextVersion';
	const EXPAND_ANCESTORS = 'ancestors';
	const EXPAND_BODY = 'body';
	const EXPAND_VERSION = 'version';
	const EXPAND_DESCENDANTS_PAGE = 'descendants.page';
	const EXPAND_DESCENDANTS_ATTACHMENT = 'descendants.attachment';
	const EXPAND_DESCENDANTS_COMMENT = 'descendants.comment';
	const EXPAND_SPACE = 'space';

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

    /**
     * @var string[]
     */
    protected $expands = self::EXPAND_DEFAULT;

    public function __construct(ClientInterface $client, ModelFactory $modelFactory, string $cql)
    {
        $this->client = $client;
        $this->modelFactory = $modelFactory;
        $this->cql = $cql;
    }

    public function execute(): ContentArray
    {
        $response = $this->client->get('/wiki/rest/api/content/search', [
            'query' => [
                'cql' => $this->cql,
                'start' => $this->start,
                'limit' => $this->limit,
                'expand' => implode(',', $this->expands),
            ],
        ]);

        $body = json_decode($response->getBody()->getContents(), true);

        return $this->modelFactory->create(ContentArray::class, $body);
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
     * @return ContentSearchQuery
     */
    public function setStart(int $start): ContentSearchQuery
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
     * @return ContentSearchQuery
     */
    public function setLimit(int $limit): ContentSearchQuery
    {
        $this->limit = $limit;

        return $this;
    }

    /**
     * @return string[]
     */
    public function getExpands(): array
    {
        return $this->expands;
    }

    /**
     * @param array $expands
     *
     * @return ContentSearchQuery
     */
    public function setExpands(array $expands): ContentSearchQuery
    {
        $this->expands = [];
        $this->addExpands($expands);

        return $this;
    }

    public function addExpand(string $expand): ContentSearchQuery
    {
        $this->expands[] = $expand;

        return $this;
    }

    public function addExpands(array $expands): ContentSearchQuery
    {
        foreach ($expands as $expand) {
            $this->addExpand($expand);
        }

        return $this;
    }
}
