<?php

declare(strict_types = 1);

namespace MichalHepner\AtlassianRestClient\ConfluenceCloud\Model;

class ContentExpandableObject
{
    /**
     * @var string
     */
    protected $childTypes;

    /**
     * @var string
     */
    protected $container;

    /**
     * @var string
     */
    protected $metadata;

    /**
     * @var string
     */
    protected $operations;

    /**
     * @var string
     */
    protected $children;

    /**
     * @var string
     */
    protected $restrictions;

    /**
     * @var string
     */
    protected $history;

    /**
     * @var string
     */
    protected $ancestors;

    /**
     * @var string
     */
    protected $body;

    /**
     * @var string
     */
    protected $version;

    /**
     * @var string
     */
    protected $descendants;

    /**
     * @var string
     */
    protected $space;

    /**
     * @var string
     */
    protected $extensions;

    /**
     * @return string
     */
    public function getExtensions(): string
    {
        return $this->extensions;
    }

    /**
     * @param string $extensions
     *
     * @return ContentExpandableObject
     */
    public function setExtensions(string $extensions): ContentExpandableObject
    {
        $this->extensions = $extensions;

        return $this;
    }

    /**
     * @return string
     */
    public function getChildTypes()
    {
        return $this->childTypes;
    }

    /**
     * @param string $childTypes
     *
     * @return self
     */
    public function setChildTypes($childTypes): self
    {
        $this->childTypes = $childTypes;

        return $this;
    }

    /**
     * @return string
     */
    public function getContainer()
    {
        return $this->container;
    }

    /**
     * @param string $container
     *
     * @return self
     */
    public function setContainer($container): self
    {
        $this->container = $container;

        return $this;
    }

    /**
     * @return string
     */
    public function getMetadata()
    {
        return $this->metadata;
    }

    /**
     * @param string $metadata
     *
     * @return self
     */
    public function setMetadata($metadata): self
    {
        $this->metadata = $metadata;

        return $this;
    }

    /**
     * @return string
     */
    public function getOperations()
    {
        return $this->operations;
    }

    /**
     * @param string $operations
     *
     * @return self
     */
    public function setOperations($operations): self
    {
        $this->operations = $operations;

        return $this;
    }

    /**
     * @return string
     */
    public function getChildren()
    {
        return $this->children;
    }

    /**
     * @param string $children
     *
     * @return self
     */
    public function setChildren($children): self
    {
        $this->children = $children;

        return $this;
    }

    /**
     * @return string
     */
    public function getRestrictions()
    {
        return $this->restrictions;
    }

    /**
     * @param string $restrictions
     *
     * @return self
     */
    public function setRestrictions($restrictions): self
    {
        $this->restrictions = $restrictions;

        return $this;
    }

    /**
     * @return string
     */
    public function getHistory()
    {
        return $this->history;
    }

    /**
     * @param string $history
     *
     * @return self
     */
    public function setHistory($history): self
    {
        $this->history = $history;

        return $this;
    }

    /**
     * @return string
     */
    public function getAncestors()
    {
        return $this->ancestors;
    }

    /**
     * @param string $ancestors
     *
     * @return self
     */
    public function setAncestors($ancestors): self
    {
        $this->ancestors = $ancestors;

        return $this;
    }

    /**
     * @return string
     */
    public function getBody()
    {
        return $this->body;
    }

    /**
     * @param string $body
     *
     * @return self
     */
    public function setBody($body): self
    {
        $this->body = $body;

        return $this;
    }

    /**
     * @return string
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * @param string $version
     *
     * @return self
     */
    public function setVersion($version): self
    {
        $this->version = $version;

        return $this;
    }

    /**
     * @return string
     */
    public function getDescendants()
    {
        return $this->descendants;
    }

    /**
     * @param string $descendants
     *
     * @return self
     */
    public function setDescendants($descendants): self
    {
        $this->descendants = $descendants;

        return $this;
    }

    /**
     * @return string
     */
    public function getSpace()
    {
        return $this->space;
    }

    /**
     * @param string $space
     *
     * @return self
     */
    public function setSpace($space): self
    {
        $this->space = $space;

        return $this;
    }
}
