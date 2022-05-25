<?php

declare(strict_types = 1);

namespace MichalHepner\AtlassianRestClient\ConfluenceCloud\Model;

class SpaceSettings
{
    /**
     * Defines whether an override for the space home should be used. This is
     * used in conjunction with a space theme provided by an app. For
     * example, if this property is set to true, a theme can display a page
     * other than the space homepage when users visit the root URL for a
     * space. This property allows apps to provide content-only theming
     * without overriding the space home.
     * 
     * REQUIRED
     * 
     * @var boolean
     */
    protected $routeOverrideEnabled;

    /**
     * REQUIRED
     * 
     * @var \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\GenericLinks
     */
    protected $_links;

    /**
     * @return boolean
     */
    public function getRouteOverrideEnabled()
    {
        return $this->routeOverrideEnabled;
    }

    /**
     * @param boolean $routeOverrideEnabled
     *
     * @return self
     */
    public function setRouteOverrideEnabled($routeOverrideEnabled): self
    {
        $this->routeOverrideEnabled = $routeOverrideEnabled;

        return $this;
    }

    /**
     * @return \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\GenericLinks
     */
    public function get_links()
    {
        return $this->_links;
    }

    /**
     * @param \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\GenericLinks $_links
     *
     * @return self
     */
    public function set_links($_links): self
    {
        $this->_links = $_links;

        return $this;
    }
}
