<?php

declare(strict_types = 1);

namespace MichalHepner\AtlassianRestClient\ConfluenceCloud\Model;

class ContentAttachmentExtensionsObject
{
    /**
     * @var integer
     */
    protected $position;

    /**
     * @return integer
     */
    public function getPosition()
    {
        return $this->position;
    }

    /**
     * @param integer $position
     *
     * @return self
     */
    public function setPosition($position): self
    {
        $this->position = $position;

        return $this;
    }
}
