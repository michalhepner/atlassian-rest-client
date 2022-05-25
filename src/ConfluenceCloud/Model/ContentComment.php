<?php

declare(strict_types = 1);

namespace MichalHepner\AtlassianRestClient\ConfluenceCloud\Model;

class ContentComment extends Content
{
    /**
     * REQUIRED
     * 
     * @var \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\ContentMetadata
     */
    protected $metadata;

    /**
     * REQUIRED
     * 
     * @var \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\ContentCommentExtensionsObject
     */
    protected $extensions;

    /**
     * @return \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\ContentMetadata
     */
    public function getMetadata()
    {
        return $this->metadata;
    }

    /**
     * @param \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\ContentMetadata $metadata
     *
     * @return self
     */
    public function setMetadata($metadata): self
    {
        $this->metadata = $metadata;

        return $this;
    }

    /**
     * @return \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\ContentCommentExtensionsObject
     */
    public function getExtensions()
    {
        return $this->extensions;
    }

    /**
     * @param \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\ContentCommentExtensionsObject $extensions
     *
     * @return self
     */
    public function setExtensions($extensions): self
    {
        $this->extensions = $extensions;

        return $this;
    }
}
