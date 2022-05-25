<?php

declare(strict_types=1);

namespace MichalHepner\AtlassianRestClient\Jira\Model;

class CreatedIssue
{
    /**
     * @var string
     */
    protected $id;

    /**
     * @var string
     */
    protected $key;

    /**
     * @var string
     */
    protected $self;

    /**
     * @var NestedResponse
     */
    protected $transition;

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
     * @return CreatedIssue
     */
    public function setId(string $id): CreatedIssue
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
     * @return CreatedIssue
     */
    public function setKey(string $key): CreatedIssue
    {
        $this->key = $key;

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
     * @return CreatedIssue
     */
    public function setSelf(string $self): CreatedIssue
    {
        $this->self = $self;

        return $this;
    }

    /**
     * @return NestedResponse
     */
    public function getTransition(): NestedResponse
    {
        return $this->transition;
    }

    /**
     * @param NestedResponse $transition
     *
     * @return CreatedIssue
     */
    public function setTransition(NestedResponse $transition): CreatedIssue
    {
        $this->transition = $transition;

        return $this;
    }
}
