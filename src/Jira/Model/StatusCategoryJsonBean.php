<?php

declare(strict_types = 1);

namespace MichalHepner\AtlassianRestClient\Jira\Model;

class StatusCategoryJsonBean
{
    /**
     * The URL of the status category.
     *
     * @var string
     */
    protected $self;

    /**
     * The ID of the status category.
     * Format: int64
     *
     * @var integer
     */
    protected $id;

    /**
     * The key of the status category.
     *
     * @var string
     */
    protected $key;

    /**
     * The name of the color used to represent the status category.
     *
     * @var string
     */
    protected $colorName;

    /**
     * The name of the status category.
     *
     * @var string
     */
    protected $name;

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
     * @return StatusCategoryJsonBean
     */
    public function setSelf(string $self): StatusCategoryJsonBean
    {
        $this->self = $self;

        return $this;
    }

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     *
     * @return StatusCategoryJsonBean
     */
    public function setId(int $id): StatusCategoryJsonBean
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
     * @return StatusCategoryJsonBean
     */
    public function setKey(string $key): StatusCategoryJsonBean
    {
        $this->key = $key;

        return $this;
    }

    /**
     * @return string
     */
    public function getColorName(): string
    {
        return $this->colorName;
    }

    /**
     * @param string $colorName
     *
     * @return StatusCategoryJsonBean
     */
    public function setColorName(string $colorName): StatusCategoryJsonBean
    {
        $this->colorName = $colorName;

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
     * @return StatusCategoryJsonBean
     */
    public function setName(string $name): StatusCategoryJsonBean
    {
        $this->name = $name;

        return $this;
    }
}
