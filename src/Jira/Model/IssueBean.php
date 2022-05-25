<?php

declare(strict_types = 1);

namespace MichalHepner\AtlassianRestClient\Jira\Model;

use MichalHepner\AtlassianRestClient\Jira\Collection\TransitionBeanCollectionAbstract;

class IssueBean
{
    const FIELDS_DEFAULT = [
        self::FIELD_RESOLUTION,
        self::FIELD_LAST_VIEWED,
        self::FIELD_AGGREGATETIMEORIGINALESTIMATE,
        self::FIELD_ISSUELINKS,
        self::FIELD_SUBTASKS,
        self::FIELD_ISSUETYPE,
        self::FIELD_ENVIRONMENT,
        self::FIELD_TIMEESTIMATE,
        self::FIELD_AGGREGATETIMESPENT,
        self::FIELD_WORKRATIO,
        self::FIELD_LABELS,
        self::FIELD_REPORTER,
        self::FIELD_WATCHES,
        self::FIELD_UPDATED,
        self::FIELD_TIMEORIGINALESTIMATE,
        self::FIELD_DESCRIPTION,
        self::FIELD_FIXVERSIONS,
        self::FIELD_PRIORITY,
        self::FIELD_CREATED,
        self::FIELD_ASSIGNEE,
        self::FIELD_VOTES,
        self::FIELD_DUEDATE,
        self::FIELD_STATUS,
        self::FIELD_AGGREGATETIMEESTIMATE,
        self::FIELD_CREATOR,
        self::FIELD_TIMESPENT,
        self::FIELD_COMPONENTS,
        self::FIELD_PROGRESS,
        self::FIELD_PROJECT,
        self::FIELD_RESOLUTIONDATE,
        self::FIELD_SUMMARY,
        self::FIELD_AGGREGATEPROGRESS,
        self::FIELD_SECURITY,
    ];
    const FIELD_RESOLUTION = 'resolution';
    const FIELD_LAST_VIEWED = 'lastViewed';
    const FIELD_AGGREGATETIMEORIGINALESTIMATE = 'aggregatetimeoriginalestimate';
    const FIELD_ISSUELINKS = 'issuelinks';
    const FIELD_SUBTASKS = 'subtasks';
    const FIELD_ISSUETYPE = 'issuetype';
    const FIELD_ENVIRONMENT = 'environment';
    const FIELD_TIMEESTIMATE = 'timeestimate';
    const FIELD_AGGREGATETIMESPENT = 'aggregatetimespent';
    const FIELD_WORKRATIO = 'workratio';
    const FIELD_LABELS = 'labels';
    const FIELD_REPORTER = 'reporter';
    const FIELD_WATCHES = 'watches';
    const FIELD_UPDATED = 'updated';
    const FIELD_TIMEORIGINALESTIMATE = 'timeoriginalestimate';
    const FIELD_DESCRIPTION = 'description';
    const FIELD_FIXVERSIONS = 'fixVersions';
    const FIELD_PRIORITY = 'priority';
    const FIELD_CREATED = 'created';
    const FIELD_ASSIGNEE = 'assignee';
    const FIELD_VOTES = 'votes';
    const FIELD_DUEDATE = 'duedate';
    const FIELD_STATUS = 'status';
    const FIELD_AGGREGATETIMEESTIMATE = 'aggregatetimeestimate';
    const FIELD_CREATOR = 'creator';
    const FIELD_TIMESPENT = 'timespent';
    const FIELD_COMPONENTS = 'components';
    const FIELD_PROGRESS = 'progress';
    const FIELD_PROJECT = 'project';
    const FIELD_RESOLUTIONDATE = 'resolutiondate';
    const FIELD_SUMMARY = 'summary';
    const FIELD_AGGREGATEPROGRESS = 'aggregateprogress';
    const FIELD_SECURITY = 'security';

    /**
     * @var string
     */
    protected $expand;

    /**
     * @var string
     */
    protected $id;

    /**
     * Format: uri
     *
     * @var string
     */
    protected $self;

    /**
     * @var string
     */
    protected $key;

    /**
     * @var array
     */
    protected $renderedFields;

    /**
     * @var array
     */
    protected $properties;

    /**
     * @var array
     */
    protected $names;

    /**
     * @var array
     */
    protected $schema;

    /**
     * @var TransitionBeanCollectionAbstract
     */
    protected $transitions;

    /**
     * @var OpsbarBean
     */
    protected $operations;

    /**
     * A list of editable field details.
     *
     * @var EditMetaBean
     */
    protected $editmeta;

    /**
     * A page of changelogs.
     *
     * @var PaginatedChangelogsJsonBean
     */
    protected $changelog;

    /**
     * @var array
     */
    protected $versionedRepresentations;

    /**
     * @var array
     */
    protected $fields;

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
     * @return IssueBean
     */
    public function setExpand(string $expand): IssueBean
    {
        $this->expand = $expand;

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
     * @return IssueBean
     */
    public function setId(string $id): IssueBean
    {
        $this->id = $id;

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
     * @return IssueBean
     */
    public function setSelf(string $self): IssueBean
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
     * @return IssueBean
     */
    public function setKey(string $key): IssueBean
    {
        $this->key = $key;

        return $this;
    }

    /**
     * @return object
     */
    public function getRenderedFields()
    {
        return $this->renderedFields;
    }

    /**
     * @param object $renderedFields
     *
     * @return IssueBean
     */
    public function setRenderedFields($renderedFields): IssueBean
    {
        $this->renderedFields = $renderedFields;

        return $this;
    }

    /**
     * @return object
     */
    public function getProperties()
    {
        return $this->properties;
    }

    /**
     * @param object $properties
     *
     * @return IssueBean
     */
    public function setProperties($properties): IssueBean
    {
        $this->properties = $properties;

        return $this;
    }

    /**
     * @return object
     */
    public function getNames()
    {
        return $this->names;
    }

    /**
     * @param object $names
     *
     * @return IssueBean
     */
    public function setNames($names): IssueBean
    {
        $this->names = $names;

        return $this;
    }

    /**
     * @return object
     */
    public function getSchema()
    {
        return $this->schema;
    }

    /**
     * @param object $schema
     *
     * @return IssueBean
     */
    public function setSchema($schema): IssueBean
    {
        $this->schema = $schema;

        return $this;
    }

    /**
     * @return TransitionBeanCollectionAbstract
     */
    public function getTransitions(): TransitionBeanCollectionAbstract
    {
        return $this->transitions;
    }

    /**
     * @param TransitionBeanCollectionAbstract $transitions
     *
     * @return IssueBean
     */
    public function setTransitions(TransitionBeanCollectionAbstract $transitions): IssueBean
    {
        $this->transitions = $transitions;

        return $this;
    }

    /**
     * @return OpsbarBean
     */
    public function getOperations(): OpsbarBean
    {
        return $this->operations;
    }

    /**
     * @param OpsbarBean $operations
     *
     * @return IssueBean
     */
    public function setOperations(OpsbarBean $operations): IssueBean
    {
        $this->operations = $operations;

        return $this;
    }

    /**
     * @return EditMetaBean
     */
    public function getEditmeta(): EditMetaBean
    {
        return $this->editmeta;
    }

    /**
     * @param EditMetaBean $editmeta
     *
     * @return IssueBean
     */
    public function setEditmeta(EditMetaBean $editmeta): IssueBean
    {
        $this->editmeta = $editmeta;

        return $this;
    }

    /**
     * @return PaginatedChangelogsJsonBean
     */
    public function getChangelog(): PaginatedChangelogsJsonBean
    {
        return $this->changelog;
    }

    /**
     * @param PaginatedChangelogsJsonBean $changelog
     *
     * @return IssueBean
     */
    public function setChangelog(PaginatedChangelogsJsonBean $changelog): IssueBean
    {
        $this->changelog = $changelog;

        return $this;
    }

    /**
     * @return object
     */
    public function getVersionedRepresentations()
    {
        return $this->versionedRepresentations;
    }

    /**
     * @param object $versionedRepresentations
     *
     * @return IssueBean
     */
    public function setVersionedRepresentations($versionedRepresentations): IssueBean
    {
        $this->versionedRepresentations = $versionedRepresentations;

        return $this;
    }

    /**
     * @return object
     */
    public function getFields()
    {
        return $this->fields;
    }

    /**
     * @param object $fields
     *
     * @return IssueBean
     */
    public function setFields($fields): IssueBean
    {
        $this->fields = $fields;

        return $this;
    }

    public function getResolutionTime(): int
    {
        if (!array_key_exists('resolutiondate', $this->getFields()) || !array_key_exists('created', $this->getFields())) {
            throw new \Exception('Fields \'created\' and \'resolutiondate\' are required to calculat resolution time');
        }

        $diff = ((bool) $this->getFields()['resolutiondate'] ? (new \DateTime($this->getFields()['resolutiondate'])) : new \DateTime('now'))->diff((new \DateTime($this->getFields()['created'])));
        $minutes = $diff->days * 24 * 60;
        $minutes += $diff->h * 60;
        $minutes += $diff->i;

        return $minutes;
    }
}
