<?php

declare(strict_types = 1);

namespace MichalHepner\AtlassianRestClient\ConfluenceCloud\Model;

class ContentBlogpost extends Content
{
    /**
     * REQUIRED
     * 
     * @var \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\ContentMetadata
     */
    protected $metadata;

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
}
