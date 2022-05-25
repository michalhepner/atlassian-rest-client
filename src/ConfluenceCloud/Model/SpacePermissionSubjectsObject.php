<?php

declare(strict_types = 1);

namespace MichalHepner\AtlassianRestClient\ConfluenceCloud\Model;

class SpacePermissionSubjectsObject
{
    /**
     * @var \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\SpacePermissionSubjectsObjectUserObject
     */
    protected $user;

    /**
     * @var \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\SpacePermissionSubjectsObjectGroupObject
     */
    protected $group;

    /**
     * REQUIRED
     * 
     * @var \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\SpacePermissionSubjectsObjectExpandableObject
     */
    protected $_expandable;

    /**
     * @return \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\SpacePermissionSubjectsObjectUserObject
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * @param \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\SpacePermissionSubjectsObjectUserObject $user
     *
     * @return self
     */
    public function setUser($user): self
    {
        $this->user = $user;

        return $this;
    }

    /**
     * @return \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\SpacePermissionSubjectsObjectGroupObject
     */
    public function getGroup()
    {
        return $this->group;
    }

    /**
     * @param \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\SpacePermissionSubjectsObjectGroupObject $group
     *
     * @return self
     */
    public function setGroup($group): self
    {
        $this->group = $group;

        return $this;
    }

    /**
     * @return \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\SpacePermissionSubjectsObjectExpandableObject
     */
    public function get_expandable()
    {
        return $this->_expandable;
    }

    /**
     * @param \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\SpacePermissionSubjectsObjectExpandableObject $_expandable
     *
     * @return self
     */
    public function set_expandable($_expandable): self
    {
        $this->_expandable = $_expandable;

        return $this;
    }
}
