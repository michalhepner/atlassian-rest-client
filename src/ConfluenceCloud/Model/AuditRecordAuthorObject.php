<?php

declare(strict_types = 1);

namespace MichalHepner\AtlassianRestClient\ConfluenceCloud\Model;

class AuditRecordAuthorObject
{
    /**
     * REQUIRED
     * 
     * @var string
     */
    protected $type;

    /**
     * REQUIRED
     * 
     * @var string
     */
    protected $displayName;

    /**
     * REQUIRED
     * 
     * @var \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\AuditRecordAuthorObjectOperationsObject
     */
    protected $operations;

    /**
     * REQUIRED
     * 
     * @var string
     */
    protected $username;

    /**
     * REQUIRED
     * 
     * @var string
     */
    protected $userKey;

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
     * @return string
     */
    public function getDisplayName()
    {
        return $this->displayName;
    }

    /**
     * @param string $displayName
     *
     * @return self
     */
    public function setDisplayName($displayName): self
    {
        $this->displayName = $displayName;

        return $this;
    }

    /**
     * @return \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\AuditRecordAuthorObjectOperationsObject
     */
    public function getOperations()
    {
        return $this->operations;
    }

    /**
     * @param \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\AuditRecordAuthorObjectOperationsObject $operations
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
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * @param string $username
     *
     * @return self
     */
    public function setUsername($username): self
    {
        $this->username = $username;

        return $this;
    }

    /**
     * @return string
     */
    public function getUserKey()
    {
        return $this->userKey;
    }

    /**
     * @param string $userKey
     *
     * @return self
     */
    public function setUserKey($userKey): self
    {
        $this->userKey = $userKey;

        return $this;
    }
}
