<?php

declare(strict_types = 1);

namespace MichalHepner\AtlassianRestClient\ConfluenceCloud\Model;

class HeaderLookAndFeel
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
     * @var \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\ButtonLookAndFeel
     */
    protected $button;

    /**
     * REQUIRED
     * 
     * @var \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\NavigationLookAndFeel
     */
    protected $primaryNavigation;

    /**
     * REQUIRED
     * 
     * @var \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\NavigationLookAndFeel
     */
    protected $secondaryNavigation;

    /**
     * REQUIRED
     * 
     * @var \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\SearchFieldLookAndFeel
     */
    protected $search;

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
     * @return \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\ButtonLookAndFeel
     */
    public function getButton()
    {
        return $this->button;
    }

    /**
     * @param \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\ButtonLookAndFeel $button
     *
     * @return self
     */
    public function setButton($button): self
    {
        $this->button = $button;

        return $this;
    }

    /**
     * @return \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\NavigationLookAndFeel
     */
    public function getPrimaryNavigation()
    {
        return $this->primaryNavigation;
    }

    /**
     * @param \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\NavigationLookAndFeel $primaryNavigation
     *
     * @return self
     */
    public function setPrimaryNavigation($primaryNavigation): self
    {
        $this->primaryNavigation = $primaryNavigation;

        return $this;
    }

    /**
     * @return \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\NavigationLookAndFeel
     */
    public function getSecondaryNavigation()
    {
        return $this->secondaryNavigation;
    }

    /**
     * @param \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\NavigationLookAndFeel $secondaryNavigation
     *
     * @return self
     */
    public function setSecondaryNavigation($secondaryNavigation): self
    {
        $this->secondaryNavigation = $secondaryNavigation;

        return $this;
    }

    /**
     * @return \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\SearchFieldLookAndFeel
     */
    public function getSearch()
    {
        return $this->search;
    }

    /**
     * @param \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\SearchFieldLookAndFeel $search
     *
     * @return self
     */
    public function setSearch($search): self
    {
        $this->search = $search;

        return $this;
    }
}
