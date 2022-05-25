<?php

declare(strict_types = 1);

namespace MichalHepner\AtlassianRestClient\ConfluenceCloud\Model;

class LookAndFeelType
{
    /**
     * The look and feel scheme. If you set this to `global`, you must specify 
     * the current global look and feel settings as a `global` object in this 
     * request. Similarly, if you set this to `custom`, you must specify the 
     * current custom look and feel settings as a `custom` object in this request.
     * 
     * REQUIRED
     * 
     * @var string
     */
    protected $selected;

    /**
     * @var \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\LookAndFeel
     */
    protected $global;

    /**
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
