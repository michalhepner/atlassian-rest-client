<?php

declare(strict_types = 1);

namespace MichalHepner\AtlassianRestClient\Jira\Model;

use MichalHepner\AtlassianRestClient\Jira\Collection\IssueBeanCollectionAbstract;

class SearchResultBean
{
    /**
     * @var string
     */
    protected $expand;

    /**
     * @var int
     */
    protected $startAt;

    /**
     * @var int
     */
    protected $maxResults;

    /**
     * @var int
     */
    protected $total;

    /**
     * @var \MichalHepner\AtlassianRestClient\Jira\Collection\IssueBeanCollectionAbstract
     */
    protected $issues;

    /**
     * @var string[]
     */
    protected $warningMessages;

    /**
     * @var array
     */
    protected $names;

    /**
     * @var array
     */
    protected $schema;

    /**
     * @return string
     */
    public function getExpand(): string
    {
        return $this->expand;
    }

    /**
     * @param string $expand
     *
     * @return SearchResultBean
     */
    public function setExpand(string $expand): SearchResultBean
    {
        $this->expand = $expand;

        return $this;
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
     * @return SearchResultBean
     */
    public function setStartAt(int $startAt): SearchResultBean
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
     * @return SearchResultBean
     */
    public function setMaxResults(int $maxResults): SearchResultBean
    {
        $this->maxResults = $maxResults;

        return $this;
    }

    /**
     * @return int
     */
    public function getTotal(): int
    {
        return $this->total;
    }

    /**
     * @param int $total
     *
     * @return SearchResultBean
     */
    public function setTotal(int $total): SearchResultBean
    {
        $this->total = $total;

        return $this;
    }

    /**
     * @return IssueBeanCollectionAbstract
     */
    public function getIssues(): IssueBeanCollectionAbstract
    {
        return $this->issues;
    }

    /**
     * @param IssueBeanCollectionAbstract $issues
     *
     * @return SearchResultBean
     */
    public function setIssues(IssueBeanCollectionAbstract $issues): SearchResultBean
    {
        $this->issues = $issues;

        return $this;
    }

    /**
     * @return string[]
     */
    public function getWarningMessages(): array
    {
        return $this->warningMessages;
    }

    /**
     * @param string[] $warningMessages
     *
     * @return SearchResultBean
     */
    public function setWarningMessages(array $warningMessages): SearchResultBean
    {
        $this->warningMessages = $warningMessages;

        return $this;
    }

    /**
     * @return object
     */
    public function getNames()
    {
        return $this->names;
    }

    /**
     * @param string[] $names
     *
     * @return SearchResultBean
     */
    public function setNames($names): SearchResultBean
    {
        $this->names = $names;

        return $this;
    }

    /**
     * @return string[]
     */
    public function getSchema()
    {
        return $this->schema;
    }

    /**
     * @param object $schema
     *
     * @return SearchResultBean
     */
    public function setSchema($schema): SearchResultBean
    {
        $this->schema = $schema;

        return $this;
    }
}
