<?php

declare(strict_types = 1);

namespace MichalHepner\AtlassianRestClient\ConfluenceCloud\Model;

class ContentAttachment extends Content
{
    /**
     * REQUIRED
     * 
     * @var \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\ContentAttachmentMetadataObject
     */
    protected $metadata;

    /**
     * REQUIRED
     * 
     * @var \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\ContentAttachmentExtensionsObject
     */
    protected $extensions;

    /**
     * @return \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\ContentAttachmentMetadataObject
     */
    public function getMetadata()
    {
        return $this->metadata;
    }

    /**
     * @param \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\ContentAttachmentMetadataObject $metadata
     *
     * @return self
     */
    public function setMetadata($metadata): self
    {
        $this->metadata = $metadata;

        return $this;
    }

    /**
     * @return \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\ContentAttachmentExtensionsObject
     */
    public function getExtensions()
    {
        return $this->extensions;
    }

    /**
     * @param \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\ContentAttachmentExtensionsObject $extensions
     *
     * @return self
     */
    public function setExtensions($extensions): self
    {
        $this->extensions = $extensions;

        return $this;
    }
}
