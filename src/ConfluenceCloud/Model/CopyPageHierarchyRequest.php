<?php

declare(strict_types = 1);

namespace MichalHepner\AtlassianRestClient\ConfluenceCloud\Model;

class CopyPageHierarchyRequest
{
    /**
     * @var boolean
     */
    protected $copyAttachments;

    /**
     * @var boolean
     */
    protected $copyPermissions;

    /**
     * @var boolean
     */
    protected $copyProperties;

    /**
     * @var boolean
     */
    protected $copyLabels;

    /**
     * @var \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\ContentId
     */
    protected $originalPageId;

    /**
     * @var \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\ContentId
     */
    protected $destinationPageId;

    /**
     * @var \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\CopyPageHierarchyTitleOptions
     */
    protected $titleOptions;

    /**
     * @return boolean
     */
    public function getCopyAttachments()
    {
        return $this->copyAttachments;
    }

    /**
     * @param boolean $copyAttachments
     *
     * @return self
     */
    public function setCopyAttachments($copyAttachments): self
    {
        $this->copyAttachments = $copyAttachments;

        return $this;
    }

    /**
     * @return boolean
     */
    public function getCopyPermissions()
    {
        return $this->copyPermissions;
    }

    /**
     * @param boolean $copyPermissions
     *
     * @return self
     */
    public function setCopyPermissions($copyPermissions): self
    {
        $this->copyPermissions = $copyPermissions;

        return $this;
    }

    /**
     * @return boolean
     */
    public function getCopyProperties()
    {
        return $this->copyProperties;
    }

    /**
     * @param boolean $copyProperties
     *
     * @return self
     */
    public function setCopyProperties($copyProperties): self
    {
        $this->copyProperties = $copyProperties;

        return $this;
    }

    /**
     * @return boolean
     */
    public function getCopyLabels()
    {
        return $this->copyLabels;
    }

    /**
     * @param boolean $copyLabels
     *
     * @return self
     */
    public function setCopyLabels($copyLabels): self
    {
        $this->copyLabels = $copyLabels;

        return $this;
    }

    /**
     * @return \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\ContentId
     */
    public function getOriginalPageId()
    {
        return $this->originalPageId;
    }

    /**
     * @param \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\ContentId $originalPageId
     *
     * @return self
     */
    public function setOriginalPageId($originalPageId): self
    {
        $this->originalPageId = $originalPageId;

        return $this;
    }

    /**
     * @return \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\ContentId
     */
    public function getDestinationPageId()
    {
        return $this->destinationPageId;
    }

    /**
     * @param \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\ContentId $destinationPageId
     *
     * @return self
     */
    public function setDestinationPageId($destinationPageId): self
    {
        $this->destinationPageId = $destinationPageId;

        return $this;
    }

    /**
     * @return \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\CopyPageHierarchyTitleOptions
     */
    public function getTitleOptions()
    {
        return $this->titleOptions;
    }

    /**
     * @param \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\CopyPageHierarchyTitleOptions $titleOptions
     *
     * @return self
     */
    public function setTitleOptions($titleOptions): self
    {
        $this->titleOptions = $titleOptions;

        return $this;
    }
}
