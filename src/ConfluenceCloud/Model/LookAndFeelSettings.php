<?php

declare(strict_types = 1);

namespace MichalHepner\AtlassianRestClient\ConfluenceCloud\Model;

class LookAndFeelSettings
{
    /**
     * REQUIRED
     * 
     * @var string
     */
    protected $selected;

    /**
     * REQUIRED
     * 
     * @var \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\LookAndFeel
     */
    protected $global;

    /**
     * @var \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\LookAndFeel
     */
    protected $theme;

    /**
     * REQUIRED
     * 
     * @var \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\LookAndFeel
     */
    protected $custom;

    /**
     * @return string
     */
    public function getSelected()
    {
        return $this->selected;
    }

    /**
     * @param string $selected
     *
     * @return self
     */
    public function setSelected($selected): self
    {
        $this->selected = $selected;

        return $this;
    }

    /**
     * @return \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\LookAndFeel
     */
    public function getGlobal()
    {
        return $this->global;
    }

    /**
     * @param \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\LookAndFeel $global
     *
     * @return self
     */
    public function setGlobal($global): self
    {
        $this->global = $global;

        return $this;
    }

    /**
     * @return \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\LookAndFeel
     */
    public function getTheme()
    {
        return $this->theme;
    }

    /**
     * @param \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\LookAndFeel $theme
     *
     * @return self
     */
    public function setTheme($theme): self
    {
        $this->theme = $theme;

        return $this;
    }

    /**
     * @return \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\LookAndFeel
     */
    public function getCustom()
    {
        return $this->custom;
    }

    /**
     * @param \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\LookAndFeel $custom
     *
     * @return self
     */
    public function setCustom($custom): self
    {
        $this->custom = $custom;

        return $this;
    }
}
