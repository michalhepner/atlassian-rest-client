<?php

declare(strict_types = 1);

namespace MichalHepner\AtlassianRestClient\Jira\Model;

use MichalHepner\AtlassianRestClient\Jira\Collection\LinkGroupBeanCollectionAbstract;
use MichalHepner\AtlassianRestClient\Jira\Collection\SimpleLinkBeanCollection;

class LinkGroupBean
{
    /**
     * @var string
     */
    protected $id;

    /**
     * @var string
     */
    protected $styleClass;

    /**
     * @var SimpleLinkBean
     */
    protected $header;

    /**
     * Format: int32
     *
     * @var integer
     */
    protected $weight;

    /**
     * @var \MichalHepner\AtlassianRestClient\Jira\Collection\SimpleLinkBeanCollection
     */
    protected $links;

    /**
     * @var \MichalHepner\AtlassianRestClient\Jira\Collection\LinkGroupBeanCollectionAbstract
     */
    protected $groups;

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
     * @return LinkGroupBean
     */
    public function setId(string $id): LinkGroupBean
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @return string
     */
    public function getStyleClass(): string
    {
        return $this->styleClass;
    }

    /**
     * @param string $styleClass
     *
     * @return LinkGroupBean
     */
    public function setStyleClass(string $styleClass): LinkGroupBean
    {
        $this->styleClass = $styleClass;

        return $this;
    }

    /**
     * @return SimpleLinkBean
     */
    public function getHeader(): SimpleLinkBean
    {
        return $this->header;
    }

    /**
     * @param SimpleLinkBean $header
     *
     * @return LinkGroupBean
     */
    public function setHeader(SimpleLinkBean $header): LinkGroupBean
    {
        $this->header = $header;

        return $this;
    }

    /**
     * @return int
     */
    public function getWeight(): int
    {
        return $this->weight;
    }

    /**
     * @param int $weight
     *
     * @return LinkGroupBean
     */
    public function setWeight(int $weight): LinkGroupBean
    {
        $this->weight = $weight;

        return $this;
    }

    /**
     * @return SimpleLinkBeanCollection
     */
    public function getLinks(): SimpleLinkBeanCollection
    {
        return $this->links;
    }

    /**
     * @param SimpleLinkBeanCollection $links
     *
     * @return LinkGroupBean
     */
    public function setLinks(SimpleLinkBeanCollection $links): LinkGroupBean
    {
        $this->links = $links;

        return $this;
    }

    /**
     * @return LinkGroupBeanCollectionAbstract
     */
    public function getGroups(): LinkGroupBeanCollectionAbstract
    {
        return $this->groups;
    }

    /**
     * @param LinkGroupBeanCollectionAbstract $groups
     *
     * @return LinkGroupBean
     */
    public function setGroups(LinkGroupBeanCollectionAbstract $groups): LinkGroupBean
    {
        $this->groups = $groups;

        return $this;
    }
}
