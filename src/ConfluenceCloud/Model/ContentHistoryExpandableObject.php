<?php

declare(strict_types = 1);

namespace MichalHepner\AtlassianRestClient\ConfluenceCloud\Model;

class ContentHistoryExpandableObject
{
    /**
     * @var string
     */
    protected $lastUpdated;

    /**
     * @var string
     */
    protected $previousVersion;

    /**
     * @var string
     */
    protected $contributors;

    /**
     * @var string
     */
    protected $nextVersion;

    /**
     * @return string
     */
    public function getLastUpdated()
    {
        return $this->lastUpdated;
    }

    /**
     * @param string $lastUpdated
     *
     * @return self
     */
    public function setLastUpdated($lastUpdated): self
    {
        $this->lastUpdated = $lastUpdated;

        return $this;
    }

    /**
     * @return string
     */
    public function getPreviousVersion()
    {
        return $this->previousVersion;
    }

    /**
     * @param string $previousVersion
     *
     * @return self
     */
    public function setPreviousVersion($previousVersion): self
    {
        $this->previousVersion = $previousVersion;

        return $this;
    }

    /**
     * @return string
     */
    public function getContributors()
    {
        return $this->contributors;
    }

    /**
     * @param string $contributors
     *
     * @return self
     */
    public function setContributors($contributors): self
    {
        $this->contributors = $contributors;

        return $this;
    }

    /**
     * @return string
     */
    public function getNextVersion()
    {
        return $this->nextVersion;
    }

    /**
     * @param string $nextVersion
     *
     * @return self
     */
    public function setNextVersion($nextVersion): self
    {
        $this->nextVersion = $nextVersion;

        return $this;
    }
}
