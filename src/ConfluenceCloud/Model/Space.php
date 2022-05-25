<?php

declare(strict_types = 1);

namespace MichalHepner\AtlassianRestClient\ConfluenceCloud\Model;

class Space
{
    /**
     * REQUIRED
     * 
     * @var integer
     */
    protected $id;

    /**
     * REQUIRED
     * 
     * @var string
     */
    protected $key;

    /**
     * REQUIRED
     * 
     * @var string
     */
    protected $name;

    /**
     * @var \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\Icon
     */
    protected $icon;

    /**
     * @var \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\SpaceDescriptionObject
     */
    protected $description;

    /**
     * @var \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\Content
     */
    protected $homepage;

    /**
     * REQUIRED
     * 
     * @var string
     */
    protected $type;

    /**
     * @var \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\SpaceMetadataObject
     */
    protected $metadata;

    /**
     * @var \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\SpaceOperationsArray
     */
    protected $operations;

    /**
     * @var \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\SpacePermissionsArray
     */
    protected $permissions;

    /**
     * REQUIRED
     * 
     * @var string
     */
    protected $status;

    /**
     * @var \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\SpaceSettings
     */
    protected $settings;

    /**
     * @var \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\Theme
     */
    protected $theme;

    /**
     * @var \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\LookAndFeel
     */
    protected $lookAndFeel;

    /**
     * @var \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\SpaceHistoryObject
     */
    protected $history;

    /**
     * REQUIRED
     * 
     * @var \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\SpaceExpandableObject
     */
    protected $_expandable;

    /**
     * REQUIRED
     * 
     * @var \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\GenericLinks
     */
    protected $_links;

    /**
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param integer $id
     *
     * @return self
     */
    public function setId($id): self
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @return string
     */
    public function getKey()
    {
        return $this->key;
    }

    /**
     * @param string $key
     *
     * @return self
     */
    public function setKey($key): self
    {
        $this->key = $key;

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

    /**
     * @return \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\SpaceDescriptionObject
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\SpaceDescriptionObject $description
     *
     * @return self
     */
    public function setDescription($description): self
    {
        $this->description = $description;

        return $this;
    }

    /**
     * @return \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\Content
     */
    public function getHomepage()
    {
        return $this->homepage;
    }

    /**
     * @param \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\Content $homepage
     *
     * @return self
     */
    public function setHomepage($homepage): self
    {
        $this->homepage = $homepage;

        return $this;
    }

    /**
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param string $type
     *
     * @return self
     */
    public function setType($type): self
    {
        $this->type = $type;

        return $this;
    }

    /**
     * @return \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\SpaceMetadataObject
     */
    public function getMetadata()
    {
        return $this->metadata;
    }

    /**
     * @param \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\SpaceMetadataObject $metadata
     *
     * @return self
     */
    public function setMetadata($metadata): self
    {
        $this->metadata = $metadata;

        return $this;
    }

    /**
     * @return \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\SpaceOperationsArray
     */
    public function getOperations()
    {
        return $this->operations;
    }

    /**
     * @param \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\SpaceOperationsArray $operations
     *
     * @return self
     */
    public function setOperations($operations): self
    {
        $this->operations = $operations;

        return $this;
    }

    /**
     * @return \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\SpacePermissionsArray
     */
    public function getPermissions()
    {
        return $this->permissions;
    }

    /**
     * @param \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\SpacePermissionsArray $permissions
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
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param string $status
     *
     * @return self
     */
    public function setStatus($status): self
    {
        $this->status = $status;

        return $this;
    }

    /**
     * @return \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\SpaceSettings
     */
    public function getSettings()
    {
        return $this->settings;
    }

    /**
     * @param \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\SpaceSettings $settings
     *
     * @return self
     */
    public function setSettings($settings): self
    {
        $this->settings = $settings;

        return $this;
    }

    /**
     * @return \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\Theme
     */
    public function getTheme()
    {
        return $this->theme;
    }

    /**
     * @param \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\Theme $theme
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
    public function getLookAndFeel()
    {
        return $this->lookAndFeel;
    }

    /**
     * @param \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\LookAndFeel $lookAndFeel
     *
     * @return self
     */
    public function setLookAndFeel($lookAndFeel): self
    {
        $this->lookAndFeel = $lookAndFeel;

        return $this;
    }

    /**
     * @return \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\SpaceHistoryObject
     */
    public function getHistory()
    {
        return $this->history;
    }

    /**
     * @param \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\SpaceHistoryObject $history
     *
     * @return self
     */
    public function setHistory($history): self
    {
        $this->history = $history;

        return $this;
    }

    /**
     * @return \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\SpaceExpandableObject
     */
    public function get_expandable()
    {
        return $this->_expandable;
    }

    /**
     * @param \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\SpaceExpandableObject $_expandable
     *
     * @return self
     */
    public function set_expandable($_expandable): self
    {
        $this->_expandable = $_expandable;

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
