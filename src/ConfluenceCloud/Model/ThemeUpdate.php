<?php

declare(strict_types = 1);

namespace MichalHepner\AtlassianRestClient\ConfluenceCloud\Model;

class ThemeUpdate
{
    /**
     * The key of the theme to be set as the space theme.
     * 
     * REQUIRED
     * 
     * @var string
     */
    protected $themeKey;

    /**
     * @return string
     */
    public function getThemeKey()
    {
        return $this->themeKey;
    }

    /**
     * @param string $themeKey
     *
     * @return self
     */
    public function setThemeKey($themeKey): self
    {
        $this->themeKey = $themeKey;

        return $this;
    }
}
