<?php

declare(strict_types = 1);

namespace MichalHepner\AtlassianRestClient\ConfluenceCloud\Model;

class SpacePermissionSubjectsObjectExpandableObject
{
    /**
     * @var string
     */
    protected $user;

    /**
     * @var string
     */
    protected $group;

    /**
     * @return string
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * @param string $user
     *
     * @return self
     */
    public function setUser($user): self
    {
        $this->user = $user;

        return $this;
    }

    /**
     * @return string
     */
    public function getGroup()
    {
        return $this->group;
    }

    /**
     * @param string $group
     *
     * @return self
     */
    public function setGroup($group): self
    {
        $this->group = $group;

        return $this;
    }
}
