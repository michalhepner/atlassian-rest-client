<?php

declare(strict_types = 1);

namespace MichalHepner\AtlassianRestClient\ConfluenceCloud\Model;

class ContentRestrictionUpdate
{
    /**
     * The restriction operation applied to content.
     * 
     * REQUIRED
     * 
     * @var string
     */
    protected $operation;

    /**
     * The users/groups that the restrictions will be applied to. At least one of 
     * `user` or `group` must be specified for this object.
     * 
     * REQUIRED
     * 
     * @var \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\ContentRestrictionUpdateRestrictionsObject
     */
    protected $restrictions;

    /**
     * @return string
     */
    public function getOperation()
    {
        return $this->operation;
    }

    /**
     * @param string $operation
     *
     * @return self
     */
    public function setOperation($operation): self
    {
        $this->operation = $operation;

        return $this;
    }

    /**
     * @return \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\ContentRestrictionUpdateRestrictionsObject
     */
    public function getRestrictions()
    {
        return $this->restrictions;
    }

    /**
     * @param \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\ContentRestrictionUpdateRestrictionsObject $restrictions
     *
     * @return self
     */
    public function setRestrictions($restrictions): self
    {
        $this->restrictions = $restrictions;

        return $this;
    }
}
