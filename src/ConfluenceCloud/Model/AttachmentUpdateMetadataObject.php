<?php

declare(strict_types = 1);

namespace MichalHepner\AtlassianRestClient\ConfluenceCloud\Model;

class AttachmentUpdateMetadataObject
{
    /**
     * The media type of the attachment, e.g. 'img/jpg'.
     * 
     * @var string
     */
    protected $mediaType;

    /**
     * The comment for this update.
     * 
     * @var string
     */
    protected $comment;

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

    /**
     * @return string
     */
    public function getComment()
    {
        return $this->comment;
    }

    /**
     * @param string $comment
     *
     * @return self
     */
    public function setComment($comment): self
    {
        $this->comment = $comment;

        return $this;
    }
}
