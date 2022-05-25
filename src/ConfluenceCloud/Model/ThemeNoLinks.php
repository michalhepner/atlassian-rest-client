<?php

declare(strict_types = 1);

namespace MichalHepner\AtlassianRestClient\ConfluenceCloud\Model;

class ThemeNoLinks
{
    /**
     * REQUIRED
     * 
     * @var string
     */
    protected $themeKey;

    /**
     * REQUIRED
     * 
     * @var string
     */
    protected $name;

    /**
     * REQUIRED
     * 
     * @var string
     */
    protected $description;

    /**
     * REQUIRED
     * 
     * @var \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\Icon
     */
    protected $icon;

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

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     *
     * @return self
     */
    public function setName($name): self
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param string $description
     *
     * @return self
     */
    public function setDescription($description): self
    {
        $this->description = $description;

        return $this;
    }

    /**
     * @return \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\Icon
     */
    public function getIcon()
    {
        return $this->icon;
    }

    /**
     * @param \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\Icon $icon
     *
     * @return self
     */
    public function setIcon($icon): self
    {
        $this->icon = $icon;

        return $this;
    }
}
