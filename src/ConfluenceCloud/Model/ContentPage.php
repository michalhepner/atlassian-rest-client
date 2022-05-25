<?php

declare(strict_types = 1);

namespace MichalHepner\AtlassianRestClient\ConfluenceCloud\Model;

class ContentPage extends Content
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
     * @var \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\ContentPageExtensionsObject
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
     * @return \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\ContentPageExtensionsObject
     */
    public function getExtensions()
    {
        return $this->extensions;
    }

    /**
     * @param \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\ContentPageExtensionsObject $extensions
     *
     * @return self
     */
    public function setExtensions($extensions): self
    {
        $this->extensions = $extensions;

        return $this;
    }
}
