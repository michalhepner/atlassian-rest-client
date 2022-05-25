<?php

declare(strict_types = 1);

namespace MichalHepner\AtlassianRestClient\Jira\Model;

use MichalHepner\AtlassianRestClient\Jira\Collection\ChangeItemBeanCollectionAbstract;

class ChangeHistoryBean
{
    /**
     * The ID of the changelog.
     *
     * @var string
     */
    protected $id;

    /**
     * The user who made the change.
     *
     * @var array
     */
    protected $author;

    /**
     * The date on which the change took place.
     * Format: date-time
     *
     * @var string
     */
    protected $created;

    /**
     * The list of items changed.
     *
     * @var \MichalHepner\AtlassianRestClient\Jira\Collection\ChangeItemBeanCollectionAbstract
     */
    protected $items;

    /**
     * The history metadata associated with the changed.
     *
     * @var array
     */
    protected $historyMetadata;

    /**
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * @param string $id
     *
     * @return ChangeHistoryBean
     */
    public function setId(string $id): ChangeHistoryBean
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @return object
     */
    public function getAuthor()
    {
        return $this->author;
    }

    /**
     * @param object $author
     *
     * @return ChangeHistoryBean
     */
    public function setAuthor($author): ChangeHistoryBean
    {
        $this->author = $author;

        return $this;
    }

    /**
     * @return string
     */
    public function getCreated(): string
    {
        return $this->created;
    }

    /**
     * @param string $created
     *
     * @return ChangeHistoryBean
     */
    public function setCreated(string $created): ChangeHistoryBean
    {
        $this->created = $created;

        return $this;
    }

    /**
     * @return ChangeItemBeanCollectionAbstract
     */
    public function getItems(): ChangeItemBeanCollectionAbstract
    {
        return $this->items;
    }

    /**
     * @param ChangeItemBeanCollectionAbstract $items
     *
     * @return ChangeHistoryBean
     */
    public function setItems(ChangeItemBeanCollectionAbstract $items): ChangeHistoryBean
    {
        $this->items = $items;

        return $this;
    }

    /**
     * @return object
     */
    public function getHistoryMetadata()
    {
        return $this->historyMetadata;
    }

    /**
     * @param object $historyMetadata
     *
     * @return ChangeHistoryBean
     */
    public function setHistoryMetadata($historyMetadata): ChangeHistoryBean
    {
        $this->historyMetadata = $historyMetadata;

        return $this;
    }
}
