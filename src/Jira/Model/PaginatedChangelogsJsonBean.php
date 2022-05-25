<?php

declare(strict_types = 1);

namespace MichalHepner\AtlassianRestClient\Jira\Model;

use MichalHepner\AtlassianRestClient\Jira\Collection\ChangeHistoryBeanCollectionAbstract;

class PaginatedChangelogsJsonBean
{
    /**
     * The index of the first item returned.
     * Format: int32
     *
     * @var integer
     */
    protected $startAt;

    /**
     * The maximum number of items that could be returned.
     * Format: int32
     *
     * @var integer
     */
    protected $maxResults;

    /**
     * The number of items returned.
     * Format: int32
     *
     * @var integer
     */
    protected $total;

    /**
     * The list of changelogs.
     *
     * @var \MichalHepner\AtlassianRestClient\Jira\Collection\ChangeHistoryBeanCollectionAbstract
     */
    protected $histories;

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
     * @return PaginatedChangelogsJsonBean
     */
    public function setStartAt(int $startAt): PaginatedChangelogsJsonBean
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
     * @return PaginatedChangelogsJsonBean
     */
    public function setMaxResults(int $maxResults): PaginatedChangelogsJsonBean
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
     * @return PaginatedChangelogsJsonBean
     */
    public function setTotal(int $total): PaginatedChangelogsJsonBean
    {
        $this->total = $total;

        return $this;
    }

    /**
     * @return ChangeHistoryBeanCollectionAbstract
     */
    public function getHistories(): ChangeHistoryBeanCollectionAbstract
    {
        return $this->histories;
    }

    /**
     * @param ChangeHistoryBeanCollectionAbstract $histories
     *
     * @return PaginatedChangelogsJsonBean
     */
    public function setHistories(ChangeHistoryBeanCollectionAbstract $histories): PaginatedChangelogsJsonBean
    {
        $this->histories = $histories;

        return $this;
    }
}
