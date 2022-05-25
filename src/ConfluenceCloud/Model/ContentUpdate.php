<?php

declare(strict_types = 1);

namespace MichalHepner\AtlassianRestClient\ConfluenceCloud\Model;

class ContentUpdate
{
    /**
     * The new version for the updated content. Set this to the current version number incremented by one, unless you are changing the status to 'draft' which must have a version number of 1. 
     * 
     * To get the current version number, use [Get content by ID](#api-content-id-get) and retrieve `version.number`.
     * 
     * REQUIRED
     * 
     * @var \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\ContentUpdateVersionObject
     */
    protected $version;

    /**
     * The updated title of the content. If you are not changing this field, set this to the current `title`.
     * 
     * REQUIRED
     * 
     * @var string
     */
    protected $title;

    /**
     * The type of content. Set this to the current type of the content.
     * 
     * REQUIRED
     * 
     * @var string
     */
    protected $type;

    /**
     * The updated status of the content. Note, if you change the status of a page from 
     * 'current' to 'draft' and it has an existing draft, the existing draft will be deleted 
     * in favor of the updated page.
     * 
     * @var string
     */
    protected $status;

    /**
     * The new parent for the content. Only one parent content 'id' can be specified.
     * 
     * @var \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\ContentUpdateAncestorsArray
     */
    protected $ancestors;

    /**
     * The updated body of the content. Does not apply to attachments.
     * If you are not sure how to generate these formats, you can create a page in the 
     * Confluence application, retrieve the content using [Get content](#api-content-get), 
     * and expand the desired content format, e.g. `expand=body.storage`.
     * 
     * @var \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\ContentUpdateBodyObject
     */
    protected $body;

    /**
     * @return \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\ContentUpdateVersionObject
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * @param \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\ContentUpdateVersionObject $version
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
     * @return \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\ContentUpdateAncestorsArray
     */
    public function getAncestors()
    {
        return $this->ancestors;
    }

    /**
     * @param \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\ContentUpdateAncestorsArray $ancestors
     *
     * @return self
     */
    public function setAncestors($ancestors): self
    {
        $this->ancestors = $ancestors;

        return $this;
    }

    /**
     * @return \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\ContentUpdateBodyObject
     */
    public function getBody()
    {
        return $this->body;
    }

    /**
     * @param \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\ContentUpdateBodyObject $body
     *
     * @return self
     */
    public function setBody($body): self
    {
        $this->body = $body;

        return $this;
    }
}
