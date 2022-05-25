<?php

declare(strict_types = 1);

namespace MichalHepner\AtlassianRestClient\ConfluenceCloud\Model;

class SearchFieldLookAndFeel
{
    /**
     * REQUIRED
     * 
     * @var string
     */
    protected $backgroundColor;

    /**
     * REQUIRED
     * 
     * @var string
     */
    protected $color;

    /**
     * @return string
     */
    public function getBackgroundColor()
    {
        return $this->backgroundColor;
    }

    /**
     * @param string $backgroundColor
     *
     * @return self
     */
    public function setBackgroundColor($backgroundColor): self
    {
        $this->backgroundColor = $backgroundColor;

        return $this;
    }

    /**
     * @return string
     */
    public function getColor()
    {
        return $this->color;
    }

    /**
     * @param string $color
     *
     * @return self
     */
    public function setColor($color): self
    {
        $this->color = $color;

        return $this;
    }
}
