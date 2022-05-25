<?php

declare(strict_types = 1);

namespace MichalHepner\AtlassianRestClient\ConfluenceCloud\Model;

class Watch
{
    /**
     * REQUIRED
     * 
     * @var string
     */
    protected $type;

    /**
     * REQUIRED
     * 
     * @var \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\WatchUser
     */
    protected $watcher;

    /**
     * REQUIRED
     * 
     * @var string
     */
    protected $contentId;

    /**
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param string $type
     *
     * @return self
     */
    public function setType($type): self
    {
        $this->type = $type;

        return $this;
    }

    /**
     * @return \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\WatchUser
     */
    public function getWatcher()
    {
        return $this->watcher;
    }

    /**
     * @param \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\WatchUser $watcher
     *
     * @return self
     */
    public function setWatcher($watcher): self
    {
        $this->watcher = $watcher;

        return $this;
    }

    /**
     * @return string
     */
    public function getContentId()
    {
        return $this->contentId;
    }

    /**
     * @param string $contentId
     *
     * @return self
     */
    public function setContentId($contentId): self
    {
        $this->contentId = $contentId;

        return $this;
    }
}
