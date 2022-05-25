<?php

declare(strict_types=1);

namespace MichalHepner\AtlassianRestClient\Jira\Model;

use MichalHepner\AtlassianRestClient\Jira\Collection\ComponentCollectionAbstract;
use MichalHepner\AtlassianRestClient\Jira\Collection\IssueTypeBeanCollectionAbstract;

class Project
{
    /**
     * Expand options that include additional project details in the response.
     *
     * @var string
     */
    protected $expand;

    /**
     * The URL of the project details.
     *
     * Format: uri
     *
     * @var string
     */
    protected $self;

    /**
     * The ID of the project.
     *
     * @var string
     */
    protected $id;

    /**
     * The key of the project.
     *
     * @var string
     */
    protected $key;

    /**
     * A brief description of the project.
     *
     * @var string
     */
    protected $description;

    /**
     * The username of the project lead.
     *
     * @var User
     */
    protected $lead;

    /**
     * List of the components contained in the project.
     *
     * @var \MichalHepner\AtlassianRestClient\Jira\Collection\ComponentCollectionAbstract
     */
    protected $components;

    /**
     * List of the issue types available in the project.
     *
     * @var \MichalHepner\AtlassianRestClient\Jira\Collection\IssueTypeBeanCollectionAbstract
     */
    protected $issueTypes;

    /**
     * A link to information about this project, such as project documentation.
     *
     * @var string
     */
    protected $url;

    /**
     * An email address associated with the project.
     *
     * @var string
     */
    protected $email;

    /**
     * The default assignee when creating issues for this project.
     *
     * Valid values: PROJECT_LEAD, UNASSIGNED
     *
     * @var string
     */
    protected $assigneeType;

//    /**
//     * The versions defined in the project. For more information, see Create version.
//     *
//     * @var Array<Version>
//     */
//    protected $versions;

    /**
     * The name of the project.
     *
     * @var string
     */
    protected $name;

    /**
     * The name and self URL for each role defined in the project. For more information, see Create project role.
     *
     * @var array
     */
    protected $roles;

//    /**
//     * The URLs of the projects avatars.
//     *
//     * @var AvatarUrlsBean
//     */
//    protected $avatarUrls;
//
//    /**
//     * The category the project belongs to.
//     *
//     * @var ProjectCategory
//     */
//    protected $projectCategory;

    /**
     * The project type of the project.
     *
     * Valid values: ops, software, service_desk, business
     *
     * @var string
     */
    protected $projectTypeKey;

    /**
     * Indicates whether the project is simplified.
     *
     * @var boolean
     */
    protected $simplified;

    /**
     * The type of the project.
     *
     * Valid values: CLASSIC, NEXTGEN, classic, next-gen
     *
     * @var string
     */
    protected $style;

    /**
     * Indicates whether the project is private.
     *
     * @var boolean
     */
    protected $isPrivate;

//    /**
//     * The issue type hierarchy for the project.
//     *
//     * @var Hierarchy
//     */
//    protected $issueTypeHierarchy;
//
//    /**
//     * User permissions on the project.
//     *
//     * @var ProjectPermissions
//     */
//    protected $permissions;

    /**
     * Map of project properties
     *
     * @var array
     */
    protected $properties;

    /**
     * UUID for next-gen projects
     *
     * Format: uuid
     *
     * @var string
     */
    protected $uuid;

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
     * @return Project
     */
    public function setExpand(string $expand): Project
    {
        $this->expand = $expand;

        return $this;
    }

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
     * @return Project
     */
    public function setSelf(string $self): Project
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
     * @return Project
     */
    public function setId(string $id): Project
    {
        $this->id = $id;

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
     * @return Project
     */
    public function setKey(string $key): Project
    {
        $this->key = $key;

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
     * @return Project
     */
    public function setDescription(string $description): Project
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
     * @return Project
     */
    public function setLead(User $lead): Project
    {
        $this->lead = $lead;

        return $this;
    }

    /**
     * @return ComponentCollectionAbstract
     */
    public function getComponents(): ComponentCollectionAbstract
    {
        return $this->components;
    }

    /**
     * @param ComponentCollectionAbstract $components
     *
     * @return Project
     */
    public function setComponents(ComponentCollectionAbstract $components): Project
    {
        $this->components = $components;

        return $this;
    }

    /**
     * @return IssueTypeBeanCollectionAbstract
     */
    public function getIssueTypes(): IssueTypeBeanCollectionAbstract
    {
        return $this->issueTypes;
    }

    /**
     * @param IssueTypeBeanCollectionAbstract $issueTypes
     *
     * @return Project
     */
    public function setIssueTypes(IssueTypeBeanCollectionAbstract $issueTypes): Project
    {
        $this->issueTypes = $issueTypes;

        return $this;
    }

    /**
     * @return string
     */
    public function getUrl(): string
    {
        return $this->url;
    }

    /**
     * @param string $url
     *
     * @return Project
     */
    public function setUrl(string $url): Project
    {
        $this->url = $url;

        return $this;
    }

    /**
     * @return string
     */
    public function getEmail(): string
    {
        return $this->email;
    }

    /**
     * @param string $email
     *
     * @return Project
     */
    public function setEmail(string $email): Project
    {
        $this->email = $email;

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
     * @return Project
     */
    public function setAssigneeType(string $assigneeType): Project
    {
        $this->assigneeType = $assigneeType;

        return $this;
    }

//    /**
//     * @return Array
//     */
//    public function getVersions(): Array
//    {
//        return $this->versions;
//    }
//
//    /**
//     * @param Array $versions
//     *
//     * @return Project
//     */
//    public function setVersions(Array $versions): Project
//    {
//        $this->versions = $versions;
//
//        return $this;
//    }

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
     * @return Project
     */
    public function setName(string $name): Project
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return array
     */
    public function getRoles(): array
    {
        return $this->roles;
    }

    /**
     * @param array $roles
     *
     * @return Project
     */
    public function setRoles(array $roles): Project
    {
        $this->roles = $roles;

        return $this;
    }

//    /**
//     * @return AvatarUrlsBean
//     */
//    public function getAvatarUrls(): AvatarUrlsBean
//    {
//        return $this->avatarUrls;
//    }
//
//    /**
//     * @param AvatarUrlsBean $avatarUrls
//     *
//     * @return Project
//     */
//    public function setAvatarUrls(AvatarUrlsBean $avatarUrls): Project
//    {
//        $this->avatarUrls = $avatarUrls;
//
//        return $this;
//    }
//
//    /**
//     * @return ProjectCategory
//     */
//    public function getProjectCategory(): ProjectCategory
//    {
//        return $this->projectCategory;
//    }
//
//    /**
//     * @param ProjectCategory $projectCategory
//     *
//     * @return Project
//     */
//    public function setProjectCategory(ProjectCategory $projectCategory): Project
//    {
//        $this->projectCategory = $projectCategory;
//
//        return $this;
//    }

    /**
     * @return string
     */
    public function getProjectTypeKey(): string
    {
        return $this->projectTypeKey;
    }

    /**
     * @param string $projectTypeKey
     *
     * @return Project
     */
    public function setProjectTypeKey(string $projectTypeKey): Project
    {
        $this->projectTypeKey = $projectTypeKey;

        return $this;
    }

    /**
     * @return bool
     */
    public function isSimplified(): bool
    {
        return $this->simplified;
    }

    /**
     * @param bool $simplified
     *
     * @return Project
     */
    public function setSimplified(bool $simplified): Project
    {
        $this->simplified = $simplified;

        return $this;
    }

    /**
     * @return string
     */
    public function getStyle(): string
    {
        return $this->style;
    }

    /**
     * @param string $style
     *
     * @return Project
     */
    public function setStyle(string $style): Project
    {
        $this->style = $style;

        return $this;
    }

    /**
     * @return bool
     */
    public function isPrivate(): bool
    {
        return $this->isPrivate;
    }

    /**
     * @param bool $isPrivate
     *
     * @return Project
     */
    public function setIsPrivate(bool $isPrivate): Project
    {
        $this->isPrivate = $isPrivate;

        return $this;
    }

//    /**
//     * @return Hierarchy
//     */
//    public function getIssueTypeHierarchy(): Hierarchy
//    {
//        return $this->issueTypeHierarchy;
//    }
//
//    /**
//     * @param Hierarchy $issueTypeHierarchy
//     *
//     * @return Project
//     */
//    public function setIssueTypeHierarchy(Hierarchy $issueTypeHierarchy): Project
//    {
//        $this->issueTypeHierarchy = $issueTypeHierarchy;
//
//        return $this;
//    }
//
//    /**
//     * @return ProjectPermissions
//     */
//    public function getPermissions(): ProjectPermissions
//    {
//        return $this->permissions;
//    }
//
//    /**
//     * @param ProjectPermissions $permissions
//     *
//     * @return Project
//     */
//    public function setPermissions(ProjectPermissions $permissions): Project
//    {
//        $this->permissions = $permissions;
//
//        return $this;
//    }

    /**
     * @return array
     */
    public function getProperties(): array
    {
        return $this->properties;
    }

    /**
     * @param array $properties
     *
     * @return Project
     */
    public function setProperties(array $properties): Project
    {
        $this->properties = $properties;

        return $this;
    }

    /**
     * @return string
     */
    public function getUuid(): string
    {
        return $this->uuid;
    }

    /**
     * @param string $uuid
     *
     * @return Project
     */
    public function setUuid(string $uuid): Project
    {
        $this->uuid = $uuid;

        return $this;
    }
}
