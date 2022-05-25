<?php

declare(strict_types = 1);

namespace MichalHepner\AtlassianRestClient\ConfluenceCloud\Model;

class SpaceDescription
{
    /**
     * REQUIRED
     * 
     * @var string
     */
    protected $value;

    /**
     * REQUIRED
     * 
     * @var string
     */
    protected $representation;

    /**
     * REQUIRED
     * 
     * @var \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\SpaceDescriptionEmbeddedContentArray
     */
    protected $embeddedContent;

    /**
     * @return string
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * @param string $value
     *
     * @return self
     */
    public function setValue($value): self
    {
        $this->value = $value;

        return $this;
    }

    /**
     * @return string
     */
    public function getRepresentation()
    {
        return $this->representation;
    }

    /**
     * @param string $representation
     *
     * @return self
     */
    public function setRepresentation($representation): self
    {
        $this->representation = $representation;

        return $this;
    }

    /**
     * @return \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\SpaceDescriptionEmbeddedContentArray
     */
    public function getEmbeddedContent()
    {
        return $this->embeddedContent;
    }

    /**
     * @param \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\SpaceDescriptionEmbeddedContentArray $embeddedContent
     *
     * @return self
     */
    public function setEmbeddedContent($embeddedContent): self
    {
        $this->embeddedContent = $embeddedContent;

        return $this;
    }
}
