<?php

declare(strict_types=1);

namespace MichalHepner\AtlassianRestClient\Jira\Model;

class IssueTypeBean
{
    /**
     * The URL of these issue type details.
     *
     * @var string
     */
    protected $self;

    /**
     * The ID of the issue type.
     *
     * @var string
     */
    protected $id;

    /**
     * The description of the issue type.
     *
     * @var string
     */
    protected $description;

    /**
     * The URL of the issue type's avatar.
     *
     * @var string
     */
    protected $iconUrl;

    /**
     * The name of the issue type.
     *
     * @var string
     */
    protected $name;

    /**
     * Indicates whether this issue type is used to create subtasks.
     *
     * @var boolean
     */
    protected $subtask;

    /**
     * The ID of the issue type's avatar.
     *
     * Format: int64
     *
     * @var integer
     */
    protected $avatarId;

//    /**
//     * Details of the next-gen projects the issue type is available in.
//     *
//     * @var Scope
//     */
//    protected $scope;

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
     * @return IssueTypeBean
     */
    public function setSelf(string $self): IssueTypeBean
    {
        $this->self = $self;

        return $this;
    }

    /**
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * @param string $id
     *
     * @return IssueTypeBean
     */
    public function setId(string $id): IssueTypeBean
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * @param string $description
     *
     * @return IssueTypeBean
     */
    public function setDescription(string $description): IssueTypeBean
    {
        $this->description = $description;

        return $this;
    }

    /**
     * @return string
     */
    public function getIconUrl(): string
    {
        return $this->iconUrl;
    }

    /**
     * @param string $iconUrl
     *
     * @return IssueTypeBean
     */
    public function setIconUrl(string $iconUrl): IssueTypeBean
    {
        $this->iconUrl = $iconUrl;

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
     * @return IssueTypeBean
     */
    public function setName(string $name): IssueTypeBean
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return bool
     */
    public function isSubtask(): bool
    {
        return $this->subtask;
    }

    /**
     * @param bool $subtask
     *
     * @return IssueTypeBean
     */
    public function setSubtask(bool $subtask): IssueTypeBean
    {
        $this->subtask = $subtask;

        return $this;
    }

    /**
     * @return int
     */
    public function getAvatarId(): int
    {
        return $this->avatarId;
    }

    /**
     * @param int $avatarId
     *
     * @return IssueTypeBean
     */
    public function setAvatarId(int $avatarId): IssueTypeBean
    {
        $this->avatarId = $avatarId;

        return $this;
    }

//    /**
//     * @return Scope
//     */
//    public function getScope(): Scope
//    {
//        return $this->scope;
//    }
//
//    /**
//     * @param Scope $scope
//     *
//     * @return IssueTypeBean
//     */
//    public function setScope(Scope $scope): IssueTypeBean
//    {
//        $this->scope = $scope;
//
//        return $this;
//    }
}
