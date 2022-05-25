<?php

declare(strict_types = 1);

namespace MichalHepner\AtlassianRestClient\ConfluenceCloud\Model;

class ContentRestrictionUpdateRestrictionsObject
{
    /**
     * The users that the restrictions will be applied to. This array must
     * have at least one item, otherwise it should be omitted.
     *
     * @var \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\ContentRestrictionUpdateRestrictionsAbstractObjectUserArray
     */
    protected $user;

    /**
     * The groups that the restrictions will be applied to. This array must
     * have at least one item, otherwise it should be omitted.
     *
     * @var \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\ContentRestrictionUpdateRestrictionsAbstractObjectGroupArray
     */
    protected $group;

    /**
     * @return \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\ContentRestrictionUpdateRestrictionsAbstractObjectUserArray
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * @param \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\ContentRestrictionUpdateRestrictionsAbstractObjectUserArray $user
     *
     * @return self
     */
    public function setUser($user): self
    {
        $this->user = $user;

        return $this;
    }

    /**
     * @return \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\ContentRestrictionUpdateRestrictionsAbstractObjectGroupArray
     */
    public function getGroup()
    {
        return $this->group;
    }

    /**
     * @param \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\ContentRestrictionUpdateRestrictionsAbstractObjectGroupArray $group
     *
     * @return self
     */
    public function setGroup($group): self
    {
        $this->group = $group;

        return $this;
    }
}
