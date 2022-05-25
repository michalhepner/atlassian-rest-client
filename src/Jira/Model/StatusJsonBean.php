<?php

declare(strict_types = 1);

namespace MichalHepner\AtlassianRestClient\Jira\Model;

class StatusJsonBean
{
    /**
     * The URL of the status.
     *
     * @var string
     */
    protected $self;

    /**
     * The description of the status.
     *
     * @var string
     */
    protected $description;

    /**
     * The URL of the icon used to represent the status.
     *
     * @var string
     */
    protected $iconUrl;

    /**
     * The name of the status.
     *
     * @var string
     */
    protected $name;

    /**
     * The ID of the status.
     *
     * @var string
     */
    protected $id;

    /**
     * A status category.
     *
     * @var StatusCategoryJsonBean
     */
    protected $statusCategory;

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
     * @return StatusJsonBean
     */
    public function setSelf(string $self): StatusJsonBean
    {
        $this->self = $self;

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
     * @return StatusJsonBean
     */
    public function setDescription(string $description): StatusJsonBean
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
     * @return StatusJsonBean
     */
    public function setIconUrl(string $iconUrl): StatusJsonBean
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
     * @return StatusJsonBean
     */
    public function setName(string $name): StatusJsonBean
    {
        $this->name = $name;

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
     * @return StatusJsonBean
     */
    public function setId(string $id): StatusJsonBean
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @return StatusCategoryJsonBean
     */
    public function getStatusCategory(): StatusCategoryJsonBean
    {
        return $this->statusCategory;
    }

    /**
     * @param StatusCategoryJsonBean $statusCategory
     *
     * @return StatusJsonBean
     */
    public function setStatusCategory(StatusCategoryJsonBean $statusCategory): StatusJsonBean
    {
        $this->statusCategory = $statusCategory;

        return $this;
    }
}
