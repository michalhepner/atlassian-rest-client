<?php

declare(strict_types = 1);

namespace MichalHepner\AtlassianRestClient\ConfluenceCloud\Model;

class SpacePermission
{
    /**
     * The users and/or groups that the permission applies to.
     * 
     * REQUIRED
     * 
     * @var \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\SpacePermissionSubjectsObject
     */
    protected $subjects;

    /**
     * REQUIRED
     * 
     * @var \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\OperationCheckResult
     */
    protected $operation;

    /**
     * Grant anonymous users permission to use the operation.
     * 
     * REQUIRED
     * 
     * @var boolean
     */
    protected $anonymousAccess;

    /**
     * Grants access to unlicensed users from JIRA Service Desk when used
     * with the 'read space' operation.
     * 
     * REQUIRED
     * 
     * @var boolean
     */
    protected $unlicensedAccess;

    /**
     * @return \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\SpacePermissionSubjectsObject
     */
    public function getSubjects()
    {
        return $this->subjects;
    }

    /**
     * @param \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\SpacePermissionSubjectsObject $subjects
     *
     * @return self
     */
    public function setSubjects($subjects): self
    {
        $this->subjects = $subjects;

        return $this;
    }

    /**
     * @return \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\OperationCheckResult
     */
    public function getOperation()
    {
        return $this->operation;
    }

    /**
     * @param \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\OperationCheckResult $operation
     *
     * @return self
     */
    public function setOperation($operation): self
    {
        $this->operation = $operation;

        return $this;
    }

    /**
     * @return boolean
     */
    public function getAnonymousAccess()
    {
        return $this->anonymousAccess;
    }

    /**
     * @param boolean $anonymousAccess
     *
     * @return self
     */
    public function setAnonymousAccess($anonymousAccess): self
    {
        $this->anonymousAccess = $anonymousAccess;

        return $this;
    }

    /**
     * @return boolean
     */
    public function getUnlicensedAccess()
    {
        return $this->unlicensedAccess;
    }

    /**
     * @param boolean $unlicensedAccess
     *
     * @return self
     */
    public function setUnlicensedAccess($unlicensedAccess): self
    {
        $this->unlicensedAccess = $unlicensedAccess;

        return $this;
    }
}
