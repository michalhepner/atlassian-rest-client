<?php

declare(strict_types = 1);

namespace MichalHepner\AtlassianRestClient\ConfluenceCloud\Model;

class Content
{
    /**
     * REQUIRED
     * 
     * @var string
     */
    protected $id;

    /**
     * REQUIRED
     * 
     * @var string
     */
    protected $type;

    /**
     * REQUIRED
     * 
     * @var string
     */
    protected $status;

    /**
     * REQUIRED
     * 
     * @var string
     */
    protected $title;

    /**
     * @var \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\Space
     */
    protected $space;

    /**
     * @var \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\ContentHistory
     */
    protected $history;

    /**
     * @var \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\Version
     */
    protected $version;

    /**
     * @var \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\ContentAncestorsArray
     */
    protected $ancestors;

    /**
     * @var \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\ContentOperationsArray
     */
    protected $operations;

    /**
     * @var \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\ContentChildren
     */
    protected $children;

    /**
     * @var \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\ContentChildType
     */
    protected $childTypes;

    /**
     * @var \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\ContentChildren
     */
    protected $descendants;

    /**
     * @var \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\Container
     */
    protected $container;

    /**
     * @var \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\ContentBodyObject
     */
    protected $body;

    /**
     * @var \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\ContentRestrictionsObject
     */
    protected $restrictions;

    /**
     * REQUIRED
     * 
     * @var \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\ContentExpandableObject
     */
    protected $_expandable;

    /**
     * @var \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\GenericLinks
     */
    protected $_links;

    /**
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param string $id
     *
     * @return self
     */
    public function setId($id): self
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param string $type
     *
     * @return self
     */
    public function setType($type): self
    {
        $this->type = $type;

        return $this;
    }

    /**
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param string $status
     *
     * @return self
     */
    public function setStatus($status): self
    {
        $this->status = $status;

        return $this;
    }

    /**
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param string $title
     *
     * @return self
     */
    public function setTitle($title): self
    {
        $this->title = $title;

        return $this;
    }

    /**
     * @return \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\Space
     */
    public function getSpace()
    {
        return $this->space;
    }

    /**
     * @param \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\Space $space
     *
     * @return self
     */
    public function setSpace($space): self
    {
        $this->space = $space;

        return $this;
    }

    /**
     * @return \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\ContentHistory
     */
    public function getHistory()
    {
        return $this->history;
    }

    /**
     * @param \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\ContentHistory $history
     *
     * @return self
     */
    public function setHistory($history): self
    {
        $this->history = $history;

        return $this;
    }

    /**
     * @return \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\Version
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * @param \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\Version $version
     *
     * @return self
     */
    public function setVersion($version): self
    {
        $this->version = $version;

        return $this;
    }

    /**
     * @return \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\ContentAncestorsArray
     */
    public function getAncestors()
    {
        return $this->ancestors;
    }

    /**
     * @param \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\ContentAncestorsArray $ancestors
     *
     * @return self
     */
    public function setAncestors($ancestors): self
    {
        $this->ancestors = $ancestors;

        return $this;
    }

    /**
     * @return \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\ContentOperationsArray
     */
    public function getOperations()
    {
        return $this->operations;
    }

    /**
     * @param \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\ContentOperationsArray $operations
     *
     * @return self
     */
    public function setOperations($operations): self
    {
        $this->operations = $operations;

        return $this;
    }

    /**
     * @return \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\ContentChildren
     */
    public function getChildren()
    {
        return $this->children;
    }

    /**
     * @param \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\ContentChildren $children
     *
     * @return self
     */
    public function setChildren($children): self
    {
        $this->children = $children;

        return $this;
    }

    /**
     * @return \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\ContentChildType
     */
    public function getChildTypes()
    {
        return $this->childTypes;
    }

    /**
     * @param \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\ContentChildType $childTypes
     *
     * @return self
     */
    public function setChildTypes($childTypes): self
    {
        $this->childTypes = $childTypes;

        return $this;
    }

    /**
     * @return \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\ContentChildren
     */
    public function getDescendants()
    {
        return $this->descendants;
    }

    /**
     * @param \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\ContentChildren $descendants
     *
     * @return self
     */
    public function setDescendants($descendants): self
    {
        $this->descendants = $descendants;

        return $this;
    }

    /**
     * @return \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\Container
     */
    public function getContainer()
    {
        return $this->container;
    }

    /**
     * @param \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\Container $container
     *
     * @return self
     */
    public function setContainer($container): self
    {
        $this->container = $container;

        return $this;
    }

    /**
     * @return \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\ContentBodyObject
     */
    public function getBody()
    {
        return $this->body;
    }

    /**
     * @param \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\ContentBodyObject $body
     *
     * @return self
     */
    public function setBody($body): self
    {
        $this->body = $body;

        return $this;
    }

    /**
     * @return \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\ContentRestrictionsObject
     */
    public function getRestrictions()
    {
        return $this->restrictions;
    }

    /**
     * @param \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\ContentRestrictionsObject $restrictions
     *
     * @return self
     */
    public function setRestrictions($restrictions): self
    {
        $this->restrictions = $restrictions;

        return $this;
    }

    /**
     * @return \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\ContentExpandableObject
     */
    public function get_expandable()
    {
        return $this->_expandable;
    }

    /**
     * @param \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\ContentExpandableObject $_expandable
     *
     * @return self
     */
    public function set_expandable($_expandable): self
    {
        $this->_expandable = $_expandable;

        return $this;
    }

    /**
     * @return \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\GenericLinks
     */
    public function get_links()
    {
        return $this->_links;
    }

    /**
     * @param \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\GenericLinks $_links
     *
     * @return self
     */
    public function set_links($_links): self
    {
        $this->_links = $_links;

        return $this;
    }

    protected $__customAttributes = [];

    public function __call($name, $arguments)
    {
        if (preg_match('/^(get|set){1}(.+)/', $name, $matches)) {
            if ($matches[1] == 'get') {
                return $this->__customAttributes[$matches[2]];
            } else {
                $this->__customAttributes[$matches[2]] = $arguments[0];
                
                return $this;
            }
        } else {
            throw new \BadMethodCallException(sprintf('Unknown method %s::%s', self::class, $name));
        }
    }
}
