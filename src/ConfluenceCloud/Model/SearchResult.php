<?php

declare(strict_types = 1);

namespace MichalHepner\AtlassianRestClient\ConfluenceCloud\Model;

class SearchResult
{
    /**
     * REQUIRED
     * 
     * @var \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\Content
     */
    protected $content;

    /**
     * REQUIRED
     * 
     * @var string
     */
    protected $title;

    /**
     * REQUIRED
     * 
     * @var string
     */
    protected $excerpt;

    /**
     * REQUIRED
     * 
     * @var string
     */
    protected $url;

    /**
     * REQUIRED
     * 
     * @var \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\ContainerSummary
     */
    protected $resultParentContainer;

    /**
     * REQUIRED
     * 
     * @var \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\ContainerSummary
     */
    protected $resultGlobalContainer;

    /**
     * REQUIRED
     * 
     * @var \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\SearchResultBreadcrumbsArray
     */
    protected $breadcrumbs;

    /**
     * REQUIRED
     * 
     * @var string
     */
    protected $entityType;

    /**
     * REQUIRED
     * 
     * @var string
     */
    protected $iconCssClass;

    /**
     * REQUIRED
     * 
     * @var string
     */
    protected $lastModified;

    /**
     * REQUIRED
     * 
     * @var string
     */
    protected $friendlyLastModified;

    /**
     * @var float
     */
    protected $score;

    /**
     * @return \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\Content
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * @param \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\Content $content
     *
     * @return self
     */
    public function setContent($content): self
    {
        $this->content = $content;

        return $this;
    }

    /**
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param string $title
     *
     * @return self
     */
    public function setTitle($title): self
    {
        $this->title = $title;

        return $this;
    }

    /**
     * @return string
     */
    public function getExcerpt()
    {
        return $this->excerpt;
    }

    /**
     * @param string $excerpt
     *
     * @return self
     */
    public function setExcerpt($excerpt): self
    {
        $this->excerpt = $excerpt;

        return $this;
    }

    /**
     * @return string
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * @param string $url
     *
     * @return self
     */
    public function setUrl($url): self
    {
        $this->url = $url;

        return $this;
    }

    /**
     * @return \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\ContainerSummary
     */
    public function getResultParentContainer()
    {
        return $this->resultParentContainer;
    }

    /**
     * @param \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\ContainerSummary $resultParentContainer
     *
     * @return self
     */
    public function setResultParentContainer($resultParentContainer): self
    {
        $this->resultParentContainer = $resultParentContainer;

        return $this;
    }

    /**
     * @return \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\ContainerSummary
     */
    public function getResultGlobalContainer()
    {
        return $this->resultGlobalContainer;
    }

    /**
     * @param \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\ContainerSummary $resultGlobalContainer
     *
     * @return self
     */
    public function setResultGlobalContainer($resultGlobalContainer): self
    {
        $this->resultGlobalContainer = $resultGlobalContainer;

        return $this;
    }

    /**
     * @return \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\SearchResultBreadcrumbsArray
     */
    public function getBreadcrumbs()
    {
        return $this->breadcrumbs;
    }

    /**
     * @param \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\SearchResultBreadcrumbsArray $breadcrumbs
     *
     * @return self
     */
    public function setBreadcrumbs($breadcrumbs): self
    {
        $this->breadcrumbs = $breadcrumbs;

        return $this;
    }

    /**
     * @return string
     */
    public function getEntityType()
    {
        return $this->entityType;
    }

    /**
     * @param string $entityType
     *
     * @return self
     */
    public function setEntityType($entityType): self
    {
        $this->entityType = $entityType;

        return $this;
    }

    /**
     * @return string
     */
    public function getIconCssClass()
    {
        return $this->iconCssClass;
    }

    /**
     * @param string $iconCssClass
     *
     * @return self
     */
    public function setIconCssClass($iconCssClass): self
    {
        $this->iconCssClass = $iconCssClass;

        return $this;
    }

    /**
     * @return string
     */
    public function getLastModified()
    {
        return $this->lastModified;
    }

    /**
     * @param string $lastModified
     *
     * @return self
     */
    public function setLastModified($lastModified): self
    {
        $this->lastModified = $lastModified;

        return $this;
    }

    /**
     * @return string
     */
    public function getFriendlyLastModified()
    {
        return $this->friendlyLastModified;
    }

    /**
     * @param string $friendlyLastModified
     *
     * @return self
     */
    public function setFriendlyLastModified($friendlyLastModified): self
    {
        $this->friendlyLastModified = $friendlyLastModified;

        return $this;
    }

    /**
     * @return float
     */
    public function getScore(): float
    {
        return $this->score;
    }

    /**
     * @param float $score
     *
     * @return SearchResult
     */
    public function setScore(float $score): SearchResult
    {
        $this->score = $score;

        return $this;
    }
}
