<?php

declare(strict_types = 1);

namespace MichalHepner\AtlassianRestClient\ConfluenceCloud\Model;

class ContentAttachmentMetadataObject
{
    /**
     * @var string
     */
    protected $mediaType;

    /**
     * @return string
     */
    public function getMediaType()
    {
        return $this->mediaType;
    }

    /**
     * @param string $mediaType
     *
     * @return self
     */
    public function setMediaType($mediaType): self
    {
        $this->mediaType = $mediaType;

        return $this;
    }
}
