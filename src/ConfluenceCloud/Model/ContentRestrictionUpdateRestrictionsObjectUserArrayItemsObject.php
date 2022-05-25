<?php

declare(strict_types = 1);

namespace MichalHepner\AtlassianRestClient\ConfluenceCloud\Model;

class ContentRestrictionUpdateRestrictionsObjectUserArrayItemsObject
{
    /**
     * Set to 'known'.
     * 
     * REQUIRED
     * 
     * @var string
     */
    protected $type;

    /**
     * This property has been deprecated due to privacy changes. Use `accountId` instead. See the
     * [migration guide](https://developer.atlassian.com/cloud/confluence/deprecation-notice-user-privacy-api-migration-guide/)
     * for details.
     * 
     * The username of the user. For example, _admin_. Required, unless `accountId` or `userKey` is specified.
     * 
     * @var string
     */
    protected $username;

    /**
     * This property has been deprecated due to privacy changes. Use `accountId` instead. See the
     * [migration guide](https://developer.atlassian.com/cloud/confluence/deprecation-notice-user-privacy-api-migration-guide/)
     * for details.
     * 
     * The user key of the user. Required, unless `accountId` or `username` is specified.
     * 
     * @var string
     */
    protected $userKey;

    /**
     * The account ID of the user, which uniquely identifies the user across all Atlassian products.
     * For example, `384093:32b4d9w0-f6a5-3535-11a3-9c8c88d10192`. Required, unless `username` or `userKey` is specified.
     * 
     * @var string
     */
    protected $accountId;

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

    /**
     * @return string
     */
    public function getAccountId()
    {
        return $this->accountId;
    }

    /**
     * @param string $accountId
     *
     * @return self
     */
    public function setAccountId($accountId): self
    {
        $this->accountId = $accountId;

        return $this;
    }
}
