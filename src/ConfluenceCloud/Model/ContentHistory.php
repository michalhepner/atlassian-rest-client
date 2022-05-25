<?php

declare(strict_types = 1);

namespace MichalHepner\AtlassianRestClient\ConfluenceCloud\Model;

class ContentHistory
{
    /**
     * REQUIRED
     * 
     * @var boolean
     */
    protected $latest;

    /**
     * REQUIRED
     * 
     * @var \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\User
     */
    protected $createdBy;

    /**
     * REQUIRED
     * 
     * @var string
     */
    protected $createdDate;

    /**
     * @var \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\Version
     */
    protected $lastUpdated;

    /**
     * @var \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\Version
     */
    protected $previousVersion;

    /**
     * @var \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\ContentHistoryContributorsObject
     */
    protected $contributors;

    /**
     * @var \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\Version
     */
    protected $nextVersion;

    /**
     * @var \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\ContentHistoryExpandableObject
     */
    protected $_expandable;

    /**
     * @var \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\GenericLinks
     */
    protected $_links;

    /**
     * @return boolean
     */
    public function getLatest()
    {
        return $this->latest;
    }

    /**
     * @param boolean $latest
     *
     * @return self
     */
    public function setLatest($latest): self
    {
        $this->latest = $latest;

        return $this;
    }

    /**
     * @return \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\User
     */
    public function getCreatedBy()
    {
        return $this->createdBy;
    }

    /**
     * @param \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\User $createdBy
     *
     * @return self
     */
    public function setCreatedBy($createdBy): self
    {
        $this->createdBy = $createdBy;

        return $this;
    }

    /**
     * @return string
     */
    public function getCreatedDate()
    {
        return $this->createdDate;
    }

    /**
     * @param string $createdDate
     *
     * @return self
     */
    public function setCreatedDate($createdDate): self
    {
        $this->createdDate = $createdDate;

        return $this;
    }

    /**
     * @return \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\Version
     */
    public function getLastUpdated()
    {
        return $this->lastUpdated;
    }

    /**
     * @param \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\Version $lastUpdated
     *
     * @return self
     */
    public function setLastUpdated($lastUpdated): self
    {
        $this->lastUpdated = $lastUpdated;

        return $this;
    }

    /**
     * @return \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\Version
     */
    public function getPreviousVersion()
    {
        return $this->previousVersion;
    }

    /**
     * @param \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\Version $previousVersion
     *
     * @return self
     */
    public function setPreviousVersion($previousVersion): self
    {
        $this->previousVersion = $previousVersion;

        return $this;
    }

    /**
     * @return \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\ContentHistoryContributorsObject
     */
    public function getContributors()
    {
        return $this->contributors;
    }

    /**
     * @param \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\ContentHistoryContributorsObject $contributors
     *
     * @return self
     */
    public function setContributors($contributors): self
    {
        $this->contributors = $contributors;

        return $this;
    }

    /**
     * @return \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\Version
     */
    public function getNextVersion()
    {
        return $this->nextVersion;
    }

    /**
     * @param \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\Version $nextVersion
     *
     * @return self
     */
    public function setNextVersion($nextVersion): self
    {
        $this->nextVersion = $nextVersion;

        return $this;
    }

    /**
     * @return \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\ContentHistoryExpandableObject
     */
    public function get_expandable()
    {
        return $this->_expandable;
    }

    /**
     * @param \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\ContentHistoryExpandableObject $_expandable
     *
     * @return self
     */
    public function set_expandable($_expandable): self
    {
        $this->_expandable = $_expandable;

        return $this;
    }

    /**
     * @return \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\GenericLinks
     */
    public function get_links()
    {
        return $this->_links;
    }

    /**
     * @param \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\GenericLinks $_links
     *
     * @return self
     */
    public function set_links($_links): self
    {
        $this->_links = $_links;

        return $this;
    }
}
