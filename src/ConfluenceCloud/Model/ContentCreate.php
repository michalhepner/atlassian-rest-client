<?php

declare(strict_types = 1);

namespace MichalHepner\AtlassianRestClient\ConfluenceCloud\Model;

class ContentCreate
{
    /**
     * The ID of the draft content. Required when publishing a draft.
     * 
     * @var string
     */
    protected $id;

    /**
     * REQUIRED
     * 
     * @var string
     */
    protected $title;

    /**
     * The type of the new content. Custom content types defined by apps are also supported.
     * 
     * REQUIRED
     * 
     * @var string
     */
    protected $type;

    /**
     * The space that the content is being created in.
     * 
     * REQUIRED
     * 
     * @var \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\ContentCreateSpaceObject
     */
    protected $space;

    /**
     * The status of the new content.
     * 
     * @var string
     */
    protected $status;

    /**
     * The parent content of the new content. Only one parent content 
     * `id` can be specified.
     * 
     * @var \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\ContentCreateAncestorsArray
     */
    protected $ancestors;

    /**
     * The body of the new content. Does not apply to attachments. 
     * Only one body format should be specified as the property for 
     * this object, e.g. `storage`.
     * 
     * Note, `editor2` format is used by Atlassian only. `anonymous_export_view` is 
     * the same as 'export_view' format but only content viewable by an anonymous 
     * user is included.
     * 
     * REQUIRED
     * 
     * @var \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\ContentCreateBodyObject
     */
    protected $body;

    /**
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param string $id
     *
     * @return self
     */
    public function setId($id): self
    {
        $this->id = $id;

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
     * @return \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\ContentCreateSpaceObject
     */
    public function getSpace()
    {
        return $this->space;
    }

    /**
     * @param \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\ContentCreateSpaceObject $space
     *
     * @return self
     */
    public function setSpace($space): self
    {
        $this->space = $space;

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
     * @return \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\ContentCreateAncestorsArray
     */
    public function getAncestors()
    {
        return $this->ancestors;
    }

    /**
     * @param \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\ContentCreateAncestorsArray $ancestors
     *
     * @return self
     */
    public function setAncestors($ancestors): self
    {
        $this->ancestors = $ancestors;

        return $this;
    }

    /**
     * @return \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\ContentCreateBodyObject
     */
    public function getBody()
    {
        return $this->body;
    }

    /**
     * @param \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\ContentCreateBodyObject $body
     *
     * @return self
     */
    public function setBody($body): self
    {
        $this->body = $body;

        return $this;
    }
}
