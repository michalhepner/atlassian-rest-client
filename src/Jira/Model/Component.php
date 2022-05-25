<?php

declare(strict_types=1);

namespace MichalHepner\AtlassianRestClient\Jira\Model;

class Component
{
    /**
     * The URL of the component.
     *
     * Format: uri
     *
     * @var string
     */
    protected $self;

    /**
     * The unique identifier for the component.
     *
     * @var string
     */
    protected $id;

    /**
     * The unique name for the component in the project. Required when creating a component. Optional when updating a component. The maximum length is 255 characters.
     *
     * @var string
     */
    protected $name;

    /**
     * The description for the component. Optional when creating or updating a component.
     *
     * @var string
     */
    protected $description;

    /**
     * The user details for the components lead user.
     *
     * @var User
     */
    protected $lead;

    /**
     * This property is deprecated in favor of leadAccountId because of privacy changes. See the migration guide for details.
     *
     * The username of the components lead user. Optional when creating or updating a component. Cannot be provided with leadAccountId.
     *
     * @var string
     */
    protected $leadUserName;

    /**
     * The accountId of the components lead user. The accountId uniquely identifies the user across all Atlassian products. For example, 384093:32b4d9w0-f6a5-3535-11a3-9c8c88d10192.Optional when creating or updating a component. Cannot be provided with leadUserName.
     *
     * @var string
     */
    protected $leadAccountId;

    /**
     * The nominal user type used to determine the assignee for issues created with this component. See realAssigneeType for details on how the type of the user, and hence the user, assigned to issues is determined. Can take the following values:
     *
     * PROJECT_LEAD the assignee to any issues created with this component is nominally the lead for the project the component is in.
     * COMPONENT_LEAD the assignee to any issues created with this component is nominally the lead for the component.
     * UNASSIGNED an assignee is not set for issues created with this component.
     * PROJECT_DEFAULT the assignee to any issues created with this component is nominally the default assignee for the project that the component is in.
     * Default value: PROJECT_DEFAULT.
     * Optional when creating or updating a component.
     *
     * Valid values: PROJECT_DEFAULT, COMPONENT_LEAD, PROJECT_LEAD, UNASSIGNED
     *
     * @var string
     */
    protected $assigneeType;

    /**
     * The details of the user associated with assigneeType, if any. See realAssignee for details of the user assigned to issues created with this component.
     *
     * @var User
     */
    protected $assignee;

    /**
     * The type of the assignee that is assigned to issues created with this component, when an assignee cannot be set from the assigneeType. For example, assigneeType is set to COMPONENT_LEAD but no component lead is set. This property is set to one of the following values:
     *
     * PROJECT_LEAD when assigneeType is PROJECT_LEAD and the project lead has permission to be assigned issues in the project that the component is in.
     * COMPONENT_LEAD when assigneeType is COMPONENT_LEAD and the component lead has permission to be assigned issues in the project that the component is in.
     * UNASSIGNED when assigneeType is UNASSIGNED and Jira is configured to allow unassigned issues.
     * PROJECT_DEFAULT when none of the preceding cases are true.
     * Valid values: PROJECT_DEFAULT, COMPONENT_LEAD, PROJECT_LEAD, UNASSIGNED
     *
     * @var string
     */
    protected $realAssigneeType;

    /**
     * The user assigned to issues created with this component, when assigneeType does not identify a valid assignee.
     *
     * @var User
     */
    protected $realAssignee;

    /**
     * Indicates whether a user is associated with assigneeType. For example, if the assigneeType is set to COMPONENT_LEAD but the component lead is not set, then false is returned.
     *
     * @var boolean
     */
    protected $isAssigneeTypeValid;

    /**
     * The key of the project the component is assigned to. Required when creating a component. Cant be updated.
     *
     * @var string
     */
    protected $project;

    /**
     * The ID of the project the component is assigned to.
     *
     * Format: int64
     *
     * @var integer
     */
    protected $projectId;

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
     * @return Component
     */
    public function setSelf(string $self): Component
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
     * @return Component
     */
    public function setId(string $id): Component
    {
        $this->id = $id;

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
     * @return Component
     */
    public function setName(string $name): Component
    {
        $this->name = $name;

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
     * @return Component
     */
    public function setDescription(string $description): Component
    {
        $this->description = $description;

        return $this;
    }

    /**
     * @return User
     */
    public function getLead(): User
    {
        return $this->lead;
    }

    /**
     * @param User $lead
     *
     * @return Component
     */
    public function setLead(User $lead): Component
    {
        $this->lead = $lead;

        return $this;
    }

    /**
     * @return string
     */
    public function getLeadUserName(): string
    {
        return $this->leadUserName;
    }

    /**
     * @param string $leadUserName
     *
     * @return Component
     */
    public function setLeadUserName(string $leadUserName): Component
    {
        $this->leadUserName = $leadUserName;

        return $this;
    }

    /**
     * @return string
     */
    public function getLeadAccountId(): string
    {
        return $this->leadAccountId;
    }

    /**
     * @param string $leadAccountId
     *
     * @return Component
     */
    public function setLeadAccountId(string $leadAccountId): Component
    {
        $this->leadAccountId = $leadAccountId;

        return $this;
    }

    /**
     * @return string
     */
    public function getAssigneeType(): string
    {
        return $this->assigneeType;
    }

    /**
     * @param string $assigneeType
     *
     * @return Component
     */
    public function setAssigneeType(string $assigneeType): Component
    {
        $this->assigneeType = $assigneeType;

        return $this;
    }

    /**
     * @return User
     */
    public function getAssignee(): User
    {
        return $this->assignee;
    }

    /**
     * @param User $assignee
     *
     * @return Component
     */
    public function setAssignee(User $assignee): Component
    {
        $this->assignee = $assignee;

        return $this;
    }

    /**
     * @return string
     */
    public function getRealAssigneeType(): string
    {
        return $this->realAssigneeType;
    }

    /**
     * @param string $realAssigneeType
     *
     * @return Component
     */
    public function setRealAssigneeType(string $realAssigneeType): Component
    {
        $this->realAssigneeType = $realAssigneeType;

        return $this;
    }

    /**
     * @return User
     */
    public function getRealAssignee(): User
    {
        return $this->realAssignee;
    }

    /**
     * @param User $realAssignee
     *
     * @return Component
     */
    public function setRealAssignee(User $realAssignee): Component
    {
        $this->realAssignee = $realAssignee;

        return $this;
    }

    /**
     * @return bool
     */
    public function isAssigneeTypeValid(): bool
    {
        return $this->isAssigneeTypeValid;
    }

    /**
     * @param bool $isAssigneeTypeValid
     *
     * @return Component
     */
    public function setIsAssigneeTypeValid(bool $isAssigneeTypeValid): Component
    {
        $this->isAssigneeTypeValid = $isAssigneeTypeValid;

        return $this;
    }

    /**
     * @return string
     */
    public function getProject(): string
    {
        return $this->project;
    }

    /**
     * @param string $project
     *
     * @return Component
     */
    public function setProject(string $project): Component
    {
        $this->project = $project;

        return $this;
    }

    /**
     * @return int
     */
    public function getProjectId(): int
    {
        return $this->projectId;
    }

    /**
     * @param int $projectId
     *
     * @return Component
     */
    public function setProjectId(int $projectId): Component
    {
        $this->projectId = $projectId;

        return $this;
    }
}
