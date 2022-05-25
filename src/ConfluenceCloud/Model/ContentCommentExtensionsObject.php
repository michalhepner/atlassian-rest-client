<?php

declare(strict_types = 1);

namespace MichalHepner\AtlassianRestClient\ConfluenceCloud\Model;

class ContentCommentExtensionsObject
{
    /**
     * REQUIRED
     * 
     * @var string
     */
    protected $location;

    /**
     * @var \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\ContentCommentExtensionsObjectInlinePropertiesObject
     */
    protected $inlineProperties;

    /**
     * @var \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\ContentCommentExtensionsObjectResolutionObject
     */
    protected $resolution;

    /**
     * @return string
     */
    public function getLocation()
    {
        return $this->location;
    }

    /**
     * @param string $location
     *
     * @return self
     */
    public function setLocation($location): self
    {
        $this->location = $location;

        return $this;
    }

    /**
     * @return \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\ContentCommentExtensionsObjectInlinePropertiesObject
     */
    public function getInlineProperties()
    {
        return $this->inlineProperties;
    }

    /**
     * @param \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\ContentCommentExtensionsObjectInlinePropertiesObject $inlineProperties
     *
     * @return self
     */
    public function setInlineProperties($inlineProperties): self
    {
        $this->inlineProperties = $inlineProperties;

        return $this;
    }

    /**
     * @return \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\ContentCommentExtensionsObjectResolutionObject
     */
    public function getResolution()
    {
        return $this->resolution;
    }

    /**
     * @param \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\ContentCommentExtensionsObjectResolutionObject $resolution
     *
     * @return self
     */
    public function setResolution($resolution): self
    {
        $this->resolution = $resolution;

        return $this;
    }
}
