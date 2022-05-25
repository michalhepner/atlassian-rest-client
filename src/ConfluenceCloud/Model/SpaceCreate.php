<?php

declare(strict_types = 1);

namespace MichalHepner\AtlassianRestClient\ConfluenceCloud\Model;

class SpaceCreate
{
    /**
     * The key for the new space. Format: See [Space
     * keys](https://confluence.atlassian.com/x/lqNMMQ).
     * 
     * REQUIRED
     * 
     * @var string
     */
    protected $key;

    /**
     * The name of the new space.
     * 
     * REQUIRED
     * 
     * @var string
     */
    protected $name;

    /**
     * @var \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\SpaceDescriptionCreate
     */
    protected $description;

    /**
     * The permissions for the new space. If no permissions are provided, the 
     * [Confluence default space permissions](https://confluence.atlassian.com/x/UAgzKw#CreateaSpace-Spacepermissions)
     * are applied. Note, for security reasons, permissions cannot be changed
     * via the API after the space has been created, and must be changed via
     * the user interface instead.
     * 
     * @var \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\SpaceCreatePermissionsArray
     */
    protected $permissions;

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
     * @return \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\SpaceDescriptionCreate
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\SpaceDescriptionCreate $description
     *
     * @return self
     */
    public function setDescription($description): self
    {
        $this->description = $description;

        return $this;
    }

    /**
     * @return \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\SpaceCreatePermissionsArray
     */
    public function getPermissions()
    {
        return $this->permissions;
    }

    /**
     * @param \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\SpaceCreatePermissionsArray $permissions
     *
     * @return self
     */
    public function setPermissions($permissions): self
    {
        $this->permissions = $permissions;

        return $this;
    }
}
