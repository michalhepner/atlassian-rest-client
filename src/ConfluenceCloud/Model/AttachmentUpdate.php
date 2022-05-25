<?php

declare(strict_types = 1);

namespace MichalHepner\AtlassianRestClient\ConfluenceCloud\Model;

class AttachmentUpdate
{
    /**
     * The attachment version. Set this to the current version number of the 
     * attachment. Note, the version number only needs to be incremented when 
     * updating the actual attachment, not its properties.
     * 
     * REQUIRED
     * 
     * @var \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\AttachmentUpdateVersionObject
     */
    protected $version;

    /**
     * The ID of the attachment to be updated.
     * 
     * REQUIRED
     * 
     * @var string
     */
    protected $id;

    /**
     * Set this to `attachment`.
     * 
     * REQUIRED
     * 
     * @var string
     */
    protected $type;

    /**
     * The updated name of the attachment.
     * 
     * @var string
     */
    protected $title;

    /**
     * @var \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\AttachmentUpdateMetadataObject
     */
    protected $metadata;

    /**
     * The new content to attach the attachment to.
     * 
     * @var \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\AttachmentUpdateContainerObject
     */
    protected $container;

    /**
     * @return \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\AttachmentUpdateVersionObject
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * @param \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\AttachmentUpdateVersionObject $version
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
     * @return \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\AttachmentUpdateMetadataObject
     */
    public function getMetadata()
    {
        return $this->metadata;
    }

    /**
     * @param \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\AttachmentUpdateMetadataObject $metadata
     *
     * @return self
     */
    public function setMetadata($metadata): self
    {
        $this->metadata = $metadata;

        return $this;
    }

    /**
     * @return \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\AttachmentUpdateContainerObject
     */
    public function getContainer()
    {
        return $this->container;
    }

    /**
     * @param \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\AttachmentUpdateContainerObject $container
     *
     * @return self
     */
    public function setContainer($container): self
    {
        $this->container = $container;

        return $this;
    }
}
