<?php

declare(strict_types = 1);

namespace MichalHepner\AtlassianRestClient\ConfluenceCloud\Model;

class SpaceExpandableObject
{
    /**
     * @var string
     */
    protected $settings;

    /**
     * @var string
     */
    protected $metadata;

    /**
     * @var string
     */
    protected $operations;

    /**
     * @var string
     */
    protected $lookAndFeel;

    /**
     * @var string
     */
    protected $permissions;

    /**
     * @var string
     */
    protected $icon;

    /**
     * @var string
     */
    protected $description;

    /**
     * @var string
     */
    protected $theme;

    /**
     * @var string
     */
    protected $history;

    /**
     * @var string
     */
    protected $homepage;

    /**
     * @return string
     */
    public function getSettings()
    {
        return $this->settings;
    }

    /**
     * @param string $settings
     *
     * @return self
     */
    public function setSettings($settings): self
    {
        $this->settings = $settings;

        return $this;
    }

    /**
     * @return string
     */
    public function getMetadata()
    {
        return $this->metadata;
    }

    /**
     * @param string $metadata
     *
     * @return self
     */
    public function setMetadata($metadata): self
    {
        $this->metadata = $metadata;

        return $this;
    }

    /**
     * @return string
     */
    public function getOperations()
    {
        return $this->operations;
    }

    /**
     * @param string $operations
     *
     * @return self
     */
    public function setOperations($operations): self
    {
        $this->operations = $operations;

        return $this;
    }

    /**
     * @return string
     */
    public function getLookAndFeel()
    {
        return $this->lookAndFeel;
    }

    /**
     * @param string $lookAndFeel
     *
     * @return self
     */
    public function setLookAndFeel($lookAndFeel): self
    {
        $this->lookAndFeel = $lookAndFeel;

        return $this;
    }

    /**
     * @return string
     */
    public function getPermissions()
    {
        return $this->permissions;
    }

    /**
     * @param string $permissions
     *
     * @return self
     */
    public function setPermissions($permissions): self
    {
        $this->permissions = $permissions;

        return $this;
    }

    /**
     * @return string
     */
    public function getIcon()
    {
        return $this->icon;
    }

    /**
     * @param string $icon
     *
     * @return self
     */
    public function setIcon($icon): self
    {
        $this->icon = $icon;

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
     * @return string
     */
    public function getTheme()
    {
        return $this->theme;
    }

    /**
     * @param string $theme
     *
     * @return self
     */
    public function setTheme($theme): self
    {
        $this->theme = $theme;

        return $this;
    }

    /**
     * @return string
     */
    public function getHistory()
    {
        return $this->history;
    }

    /**
     * @param string $history
     *
     * @return self
     */
    public function setHistory($history): self
    {
        $this->history = $history;

        return $this;
    }

    /**
     * @return string
     */
    public function getHomepage()
    {
        return $this->homepage;
    }

    /**
     * @param string $homepage
     *
     * @return self
     */
    public function setHomepage($homepage): self
    {
        $this->homepage = $homepage;

        return $this;
    }
}
