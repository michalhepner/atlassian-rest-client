<?php

declare(strict_types = 1);

namespace MichalHepner\AtlassianRestClient\ConfluenceCloud\Model;

class ContentRestrictionRestrictionsObject
{
    /**
     * @var \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\UserArray
     */
    protected $user;

    /**
     * @var \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\GroupArray
     */
    protected $group;

    /**
     * @var \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\ContentRestrictionRestrictionsObjectExpandableObject
     */
    protected $_expandable;

    /**
     * @return \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\UserArray
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * @param \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\UserArray $user
     *
     * @return self
     */
    public function setUser($user): self
    {
        $this->user = $user;

        return $this;
    }

    /**
     * @return \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\GroupArray
     */
    public function getGroup()
    {
        return $this->group;
    }

    /**
     * @param \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\GroupArray $group
     *
     * @return self
     */
    public function setGroup($group): self
    {
        $this->group = $group;

        return $this;
    }

    /**
     * @return \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\ContentRestrictionRestrictionsObjectExpandableObject
     */
    public function get_expandable()
    {
        return $this->_expandable;
    }

    /**
     * @param \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\ContentRestrictionRestrictionsObjectExpandableObject $_expandable
     *
     * @return self
     */
    public function set_expandable($_expandable): self
    {
        $this->_expandable = $_expandable;

        return $this;
    }
}
