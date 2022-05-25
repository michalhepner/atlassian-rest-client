<?php

declare(strict_types = 1);

namespace MichalHepner\AtlassianRestClient\ConfluenceCloud\Model;

class ContentBlueprintDraft
{
    /**
     * The version for the new content.
     * 
     * REQUIRED
     * 
     * @var \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\ContentBlueprintDraftVersionObject
     */
    protected $version;

    /**
     * The title of the content. If you don't want to change the title, 
     * set this to the current title of the draft.
     * 
     * REQUIRED
     * 
     * @var string
     */
    protected $title;

    /**
     * The type of content. Set this to `page`.
     * 
     * REQUIRED
     * 
     * @var string
     */
    protected $type;

    /**
     * The status of the content. Set this to `current` or omit it altogether.
     * 
     * @var string
     */
    protected $status;

    /**
     * The space for the content.
     * 
     * @var \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\ContentBlueprintDraftSpaceObject
     */
    protected $space;

    /**
     * The new ancestor (i.e. parent page) for the content. If you have 
     * specified an ancestor, you must also specify a `space` property 
     * in the request body for the space that the ancestor is in.
     * 
     * Note, if you specify more than one ancestor, the last ID in the array 
     * will be selected as the parent page for the content.
     * 
     * @var \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\ContentBlueprintDraftAncestorsArray
     */
    protected $ancestors;

    /**
     * @return \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\ContentBlueprintDraftVersionObject
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * @param \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\ContentBlueprintDraftVersionObject $version
     *
     * @return self
     */
    public function setVersion($version): self
    {
        $this->version = $version;

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
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param string $status
     *
     * @return self
     */
    public function setStatus($status): self
    {
        $this->status = $status;

        return $this;
    }

    /**
     * @return \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\ContentBlueprintDraftSpaceObject
     */
    public function getSpace()
    {
        return $this->space;
    }

    /**
     * @param \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\ContentBlueprintDraftSpaceObject $space
     *
     * @return self
     */
    public function setSpace($space): self
    {
        $this->space = $space;

        return $this;
    }

    /**
     * @return \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\ContentBlueprintDraftAncestorsArray
     */
    public function getAncestors()
    {
        return $this->ancestors;
    }

    /**
     * @param \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\ContentBlueprintDraftAncestorsArray $ancestors
     *
     * @return self
     */
    public function setAncestors($ancestors): self
    {
        $this->ancestors = $ancestors;

        return $this;
    }
}
