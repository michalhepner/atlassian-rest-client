<?php

declare(strict_types = 1);

namespace MichalHepner\AtlassianRestClient\ConfluenceCloud\Model;

class LookAndFeelHeadingsObject
{
    /**
     * REQUIRED
     * 
     * @var string
     */
    protected $color;

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
