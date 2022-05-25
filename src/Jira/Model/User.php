<?php

declare(strict_types=1);

namespace MichalHepner\AtlassianRestClient\Jira\Model;

class User
{
    /**
     * The URL of the user.
     * Format: uri
     *
     * @var string
     */
    protected $self;

    /**
     * This property is deprecated in favor of accountId because of privacy changes. See the migration guide for details.
     * The key of the user. In requests, required unless accountId or name is specified.
     *
     * @var string
     */
    protected $key;

    /**
     * The accountId of the user, which uniquely identifies the user across all Atlassian products. For example, 384093:32b4d9w0-f6a5-3535-11a3-9c8c88d10192. In requests, required unless name or key is specified.
     *
     * @var string
     */
    protected $accountId;

    /**
     * The user account type. Can take the following values:
     *
     * atlassian regular Atlassian user account
     * app system account used for Connect applications and OAuth to represent external systems
     * customer Jira Service Desk account representing an external service desk
     * Valid values: atlassian, app, customer
     *
     * @var string
     */
    protected $accountType;

    /**
     * This property is deprecated in favor of accountId because of privacy changes. See the migration guide for details.
     * The username of the user. In requests, required unless accountId or key is specified.
     *
     * @var string
     */
    protected $name;

    /**
     * The email address of the user. Depending on the user’s privacy setting, this may be returned as null.
     *
     * @var string
     */
    protected $emailAddress;

//    /**
//     * The avatars of the user.
//     *
//     * @var AvatarUrlsBean
//     */
//    protected $avatarUrls;

    /**
     * The display name of the user. Depending on the user’s privacy setting, this may return an alternative value.
     *
     * @var string
     */
    protected $displayName;

    /**
     * Indicates whether the user is active.
     *
     * @var boolean
     */
    protected $active;

    /**
     * The time zone specified in the user's profile. Depending on the user’s privacy setting, this may be returned as null.
     *
     * @var string
     */
    protected $timeZone;

    /**
     * The locale of the user. Depending on the user’s privacy setting, this may be returned as null.
     *
     * @var string
     */
    protected $locale;

//    /**
//     * The groups that the user belongs to.
//     *
//     * @var SimpleListWrapperGroupName
//     */
//    protected $groups;

//    /**
//     * The application roles the user is assigned to.
//     *
//     * @var SimpleListWrapperApplicationRole
//     */
//    protected $applicationRoles;

    /**
     * Expand options that include additional user details in the response.
     *
     * @var string
     */
    protected $expand;

    /**
     * @return string
     */
    public function getSelf(): string
    {
        return $this->self;
    }

    /**
     * @param string $self
     *
     * @return User
     */
    public function setSelf(string $self): User
    {
        $this->self = $self;

        return $this;
    }

    /**
     * @return string
     */
    public function getKey(): string
    {
        return $this->key;
    }

    /**
     * @param string $key
     *
     * @return User
     */
    public function setKey(string $key): User
    {
        $this->key = $key;

        return $this;
    }

    /**
     * @return string
     */
    public function getAccountId(): string
    {
        return $this->accountId;
    }

    /**
     * @param string $accountId
     *
     * @return User
     */
    public function setAccountId(string $accountId): User
    {
        $this->accountId = $accountId;

        return $this;
    }

    /**
     * @return string
     */
    public function getAccountType(): string
    {
        return $this->accountType;
    }

    /**
     * @param string $accountType
     *
     * @return User
     */
    public function setAccountType(string $accountType): User
    {
        $this->accountType = $accountType;

        return $this;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     *
     * @return User
     */
    public function setName(string $name): User
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return string
     */
    public function getEmailAddress(): string
    {
        return $this->emailAddress;
    }

    /**
     * @param string $emailAddress
     *
     * @return User
     */
    public function setEmailAddress(string $emailAddress): User
    {
        $this->emailAddress = $emailAddress;

        return $this;
    }

    /**
     * @return string
     */
    public function getDisplayName(): string
    {
        return $this->displayName;
    }

    /**
     * @param string $displayName
     *
     * @return User
     */
    public function setDisplayName(string $displayName): User
    {
        $this->displayName = $displayName;

        return $this;
    }

    /**
     * @return bool
     */
    public function isActive(): bool
    {
        return $this->active;
    }

    /**
     * @param bool $active
     *
     * @return User
     */
    public function setActive(bool $active): User
    {
        $this->active = $active;

        return $this;
    }

    /**
     * @return string
     */
    public function getTimeZone(): string
    {
        return $this->timeZone;
    }

    /**
     * @param string $timeZone
     *
     * @return User
     */
    public function setTimeZone(string $timeZone): User
    {
        $this->timeZone = $timeZone;

        return $this;
    }

    /**
     * @return string
     */
    public function getLocale(): string
    {
        return $this->locale;
    }

    /**
     * @param string $locale
     *
     * @return User
     */
    public function setLocale(string $locale): User
    {
        $this->locale = $locale;

        return $this;
    }

    /**
     * @return string
     */
    public function getExpand(): string
    {
        return $this->expand;
    }

    /**
     * @param string $expand
     *
     * @return User
     */
    public function setExpand(string $expand): User
    {
        $this->expand = $expand;

        return $this;
    }
}
