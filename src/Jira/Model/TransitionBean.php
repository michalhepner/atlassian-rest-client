<?php

declare(strict_types = 1);

namespace MichalHepner\AtlassianRestClient\Jira\Model;

class TransitionBean
{
    /**
     * The ID of the issue transition. Required when specifying a transition to undertake.
     *
     * @var string
     */
    protected $id;

    /**
     * The name of the issue transition.
     *
     * @var string
     */
    protected $name;

    /**
     * A status.
     *
     * @var StatusJsonBean
     */
    protected $to;

    /**
     * Indicates whether there is a screen associated with the issue transition.
     *
     * @var boolean
     */
    protected $hasScreen;

    /**
     * Indicates whether the issue transition is global, that is, the transition can be applied to issues regardless of their status.
     *
     * @var boolean
     */
    protected $isGlobal;

    /**
     * Indicates whether this is the initial issue transition for the workflow.
     *
     * @var boolean
     */
    protected $isInitial;

    /**
     * Indicates whether the issue has to meet certain criteria before the issue transition can be applied.
     *
     * @var boolean
     */
    protected $isConditional;

    /**
     * Details of the fields associated with the issue transition screen. Use this information to populate fields and update in a transition request.
     *
     * @var array
     */
    protected $fields;

    /**
     * Expands available to the transition details.
     *
     * @var string
     */
    protected $expand;

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
     * @return TransitionBean
     */
    public function setId(string $id): TransitionBean
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
     * @return TransitionBean
     */
    public function setName(string $name): TransitionBean
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return StatusJsonBean
     */
    public function getTo(): StatusJsonBean
    {
        return $this->to;
    }

    /**
     * @param StatusJsonBean $to
     *
     * @return TransitionBean
     */
    public function setTo(StatusJsonBean $to): TransitionBean
    {
        $this->to = $to;

        return $this;
    }

    /**
     * @return bool
     */
    public function isHasScreen(): bool
    {
        return $this->hasScreen;
    }

    /**
     * @param bool $hasScreen
     *
     * @return TransitionBean
     */
    public function setHasScreen(bool $hasScreen): TransitionBean
    {
        $this->hasScreen = $hasScreen;

        return $this;
    }

    /**
     * @return bool
     */
    public function isGlobal(): bool
    {
        return $this->isGlobal;
    }

    /**
     * @param bool $isGlobal
     *
     * @return TransitionBean
     */
    public function setIsGlobal(bool $isGlobal): TransitionBean
    {
        $this->isGlobal = $isGlobal;

        return $this;
    }

    /**
     * @return bool
     */
    public function isInitial(): bool
    {
        return $this->isInitial;
    }

    /**
     * @param bool $isInitial
     *
     * @return TransitionBean
     */
    public function setIsInitial(bool $isInitial): TransitionBean
    {
        $this->isInitial = $isInitial;

        return $this;
    }

    /**
     * @return bool
     */
    public function isConditional(): bool
    {
        return $this->isConditional;
    }

    /**
     * @param bool $isConditional
     *
     * @return TransitionBean
     */
    public function setIsConditional(bool $isConditional): TransitionBean
    {
        $this->isConditional = $isConditional;

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
     * @return TransitionBean
     */
    public function setFields($fields): TransitionBean
    {
        $this->fields = $fields;

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
     * @return TransitionBean
     */
    public function setExpand(string $expand): TransitionBean
    {
        $this->expand = $expand;

        return $this;
    }
}
