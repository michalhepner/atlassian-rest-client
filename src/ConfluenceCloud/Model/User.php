<?php

declare(strict_types = 1);

namespace MichalHepner\AtlassianRestClient\ConfluenceCloud\Model;

class User
{
    /**
     * REQUIRED
     * 
     * @var string
     */
    protected $type;

    /**
     * This property has been deprecated in favor of `accountId`, due to privacy changes. See the
     * [migration guide](https://developer.atlassian.com/cloud/confluence/deprecation-notice-user-privacy-api-migration-guide/)
     * for details.
     * 
     * The username of the user. For example, _admin_.
     * 
     * REQUIRED
     * 
     * @var string
     */
    protected $username;

    /**
     * This property has been deprecated in favor of `accountId`, due to privacy changes. See the
     * [migration guide](https://developer.atlassian.com/cloud/confluence/deprecation-notice-user-privacy-api-migration-guide/)
     * for details.
     * 
     * The user key of the user.
     * 
     * REQUIRED
     * 
     * @var string
     */
    protected $userKey;

    /**
     * The account ID of the user, which uniquely identifies the user across all Atlassian products.
     * For example, `384093:32b4d9w0-f6a5-3535-11a3-9c8c88d10192`.
     * 
     * REQUIRED
     * 
     * @var string
     */
    protected $accountId;

    /**
     * REQUIRED
     * 
     * @var \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\Icon
     */
    protected $profilePicture;

    /**
     * The display name of the user. Depending on the user’s privacy setting, this may be returned as null.
     * 
     * REQUIRED
     * 
     * @var string
     */
    protected $displayName;

    /**
     * @var \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\UserOperationsArray
     */
    protected $operations;

    /**
     * @var \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\UserDetails
     */
    protected $details;

    /**
     * @var \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\Space
     */
    protected $personalSpace;

    /**
     * REQUIRED
     * 
     * @var \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\UserExpandableObject
     */
    protected $_expandable;

    /**
     * REQUIRED
     * 
     * @var \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\GenericLinks
     */
    protected $_links;

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

    /**
     * @return \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\Icon
     */
    public function getProfilePicture()
    {
        return $this->profilePicture;
    }

    /**
     * @param \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\Icon $profilePicture
     *
     * @return self
     */
    public function setProfilePicture($profilePicture): self
    {
        $this->profilePicture = $profilePicture;

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
     * @return \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\UserOperationsArray
     */
    public function getOperations()
    {
        return $this->operations;
    }

    /**
     * @param \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\UserOperationsArray $operations
     *
     * @return self
     */
    public function setOperations($operations): self
    {
        $this->operations = $operations;

        return $this;
    }

    /**
     * @return \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\UserDetails
     */
    public function getDetails()
    {
        return $this->details;
    }

    /**
     * @param \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\UserDetails $details
     *
     * @return self
     */
    public function setDetails($details): self
    {
        $this->details = $details;

        return $this;
    }

    /**
     * @return \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\Space
     */
    public function getPersonalSpace()
    {
        return $this->personalSpace;
    }

    /**
     * @param \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\Space $personalSpace
     *
     * @return self
     */
    public function setPersonalSpace($personalSpace): self
    {
        $this->personalSpace = $personalSpace;

        return $this;
    }

    /**
     * @return \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\UserExpandableObject
     */
    public function get_expandable()
    {
        return $this->_expandable;
    }

    /**
     * @param \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\UserExpandableObject $_expandable
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
