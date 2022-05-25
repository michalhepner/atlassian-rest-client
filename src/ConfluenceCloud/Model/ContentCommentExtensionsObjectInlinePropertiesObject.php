<?php

declare(strict_types = 1);

namespace MichalHepner\AtlassianRestClient\ConfluenceCloud\Model;

class ContentCommentExtensionsObjectInlinePropertiesObject
{
    /**
     * REQUIRED
     * 
     * @var string
     */
    protected $originalSelection;

    /**
     * REQUIRED
     * 
     * @var string
     */
    protected $markerRef;

    /**
     * @return string
     */
    public function getOriginalSelection()
    {
        return $this->originalSelection;
    }

    /**
     * @param string $originalSelection
     *
     * @return self
     */
    public function setOriginalSelection($originalSelection): self
    {
        $this->originalSelection = $originalSelection;

        return $this;
    }

    /**
     * @return string
     */
    public function getMarkerRef()
    {
        return $this->markerRef;
    }

    /**
     * @param string $markerRef
     *
     * @return self
     */
    public function setMarkerRef($markerRef): self
    {
        $this->markerRef = $markerRef;

        return $this;
    }
}
