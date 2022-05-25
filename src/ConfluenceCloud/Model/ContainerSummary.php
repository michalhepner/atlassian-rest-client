<?php

declare(strict_types = 1);

namespace MichalHepner\AtlassianRestClient\ConfluenceCloud\Model;

class ContainerSummary
{
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
    protected $displayUrl;

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
    public function getDisplayUrl()
    {
        return $this->displayUrl;
    }

    /**
     * @param string $displayUrl
     *
     * @return self
     */
    public function setDisplayUrl($displayUrl): self
    {
        $this->displayUrl = $displayUrl;

        return $this;
    }
}
