<?php

declare(strict_types = 1);

namespace MichalHepner\AtlassianRestClient\ConfluenceCloud\Model;

class MenusLookAndFeel
{
    /**
     * REQUIRED
     * 
     * @var \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\MenusLookAndFeelHoverOrFocusObject
     */
    protected $hoverOrFocus;

    /**
     * REQUIRED
     * 
     * @var string
     */
    protected $color;

    /**
     * @return \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\MenusLookAndFeelHoverOrFocusObject
     */
    public function getHoverOrFocus()
    {
        return $this->hoverOrFocus;
    }

    /**
     * @param \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\MenusLookAndFeelHoverOrFocusObject $hoverOrFocus
     *
     * @return self
     */
    public function setHoverOrFocus($hoverOrFocus): self
    {
        $this->hoverOrFocus = $hoverOrFocus;

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
