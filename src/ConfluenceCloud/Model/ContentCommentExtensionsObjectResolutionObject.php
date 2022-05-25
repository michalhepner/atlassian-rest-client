<?php

declare(strict_types = 1);

namespace MichalHepner\AtlassianRestClient\ConfluenceCloud\Model;

class ContentCommentExtensionsObjectResolutionObject
{
    /**
     * @var string
     */
    protected $status;

    /**
     * @var \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\ContentCommentExtensionsObjectResolutionObjectLastModifierObject
     */
    protected $lastModifier;

    /**
     * @var string
     */
    protected $lastModifiedDate;

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
     * @return \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\ContentCommentExtensionsObjectResolutionObjectLastModifierObject
     */
    public function getLastModifier()
    {
        return $this->lastModifier;
    }

    /**
     * @param \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\ContentCommentExtensionsObjectResolutionObjectLastModifierObject $lastModifier
     *
     * @return self
     */
    public function setLastModifier($lastModifier): self
    {
        $this->lastModifier = $lastModifier;

        return $this;
    }

    /**
     * @return string
     */
    public function getLastModifiedDate()
    {
        return $this->lastModifiedDate;
    }

    /**
     * @param string $lastModifiedDate
     *
     * @return self
     */
    public function setLastModifiedDate($lastModifiedDate): self
    {
        $this->lastModifiedDate = $lastModifiedDate;

        return $this;
    }
}
