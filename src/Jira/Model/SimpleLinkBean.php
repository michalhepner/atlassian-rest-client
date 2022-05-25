<?php

namespace MichalHepner\AtlassianRestClient\Jira\Model;

class SimpleLinkBean
{
    /**
     * @var string
     */
    protected $id;

    /**
     * @var string
     */
    protected $styleClass;

    /**
     * @var string
     */
    protected $iconClass;

    /**
     * @var string
     */
    protected $label;

    /**
     * @var string
     */
    protected $title;

    /**
     * @var string
     */
    protected $href;

    /**
     * Format: int32
     *
     * @var integer
     */
    protected $weight;

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
     * @return SimpleLinkBean
     */
    public function setId(string $id): SimpleLinkBean
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @return string
     */
    public function getStyleClass(): string
    {
        return $this->styleClass;
    }

    /**
     * @param string $styleClass
     *
     * @return SimpleLinkBean
     */
    public function setStyleClass(string $styleClass): SimpleLinkBean
    {
        $this->styleClass = $styleClass;

        return $this;
    }

    /**
     * @return string
     */
    public function getIconClass(): string
    {
        return $this->iconClass;
    }

    /**
     * @param string $iconClass
     *
     * @return SimpleLinkBean
     */
    public function setIconClass(string $iconClass): SimpleLinkBean
    {
        $this->iconClass = $iconClass;

        return $this;
    }

    /**
     * @return string
     */
    public function getLabel(): string
    {
        return $this->label;
    }

    /**
     * @param string $label
     *
     * @return SimpleLinkBean
     */
    public function setLabel(string $label): SimpleLinkBean
    {
        $this->label = $label;

        return $this;
    }

    /**
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * @param string $title
     *
     * @return SimpleLinkBean
     */
    public function setTitle(string $title): SimpleLinkBean
    {
        $this->title = $title;

        return $this;
    }

    /**
     * @return string
     */
    public function getHref(): string
    {
        return $this->href;
    }

    /**
     * @param string $href
     *
     * @return SimpleLinkBean
     */
    public function setHref(string $href): SimpleLinkBean
    {
        $this->href = $href;

        return $this;
    }

    /**
     * @return int
     */
    public function getWeight(): int
    {
        return $this->weight;
    }

    /**
     * @param int $weight
     *
     * @return SimpleLinkBean
     */
    public function setWeight(int $weight): SimpleLinkBean
    {
        $this->weight = $weight;

        return $this;
    }
}