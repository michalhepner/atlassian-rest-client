<?php

declare(strict_types = 1);

namespace MichalHepner\AtlassianRestClient\ConfluenceCloud\Model;

class NavigationLookAndFeel
{
    /**
     * REQUIRED
     * 
     * @var string
     */
    protected $color;

    /**
     * REQUIRED
     * 
     * @var \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\NavigationLookAndFeelHoverOrFocusObject
     */
    protected $hoverOrFocus;

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

    /**
     * @return \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\NavigationLookAndFeelHoverOrFocusObject
     */
    public function getHoverOrFocus()
    {
        return $this->hoverOrFocus;
    }

    /**
     * @param \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\NavigationLookAndFeelHoverOrFocusObject $hoverOrFocus
     *
     * @return self
     */
    public function setHoverOrFocus($hoverOrFocus): self
    {
        $this->hoverOrFocus = $hoverOrFocus;

        return $this;
    }
}
