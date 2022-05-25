<?php

declare(strict_types = 1);

namespace MichalHepner\AtlassianRestClient\ConfluenceCloud\Model;

class Relation
{
    /**
     * REQUIRED
     * 
     * @var string
     */
    protected $name;

    /**
     * @var \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\RelationData
     */
    protected $relationData;

    /**
     * @var \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\RelationSourceObject
     */
    protected $source;

    /**
     * @var \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\RelationTargetObject
     */
    protected $target;

    /**
     * REQUIRED
     * 
     * @var \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\RelationExpandableObject
     */
    protected $_expandable;

    /**
     * REQUIRED
     * 
     * @var \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\GenericLinks
     */
    protected $_links;

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     *
     * @return self
     */
    public function setName($name): self
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\RelationData
     */
    public function getRelationData()
    {
        return $this->relationData;
    }

    /**
     * @param \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\RelationData $relationData
     *
     * @return self
     */
    public function setRelationData($relationData): self
    {
        $this->relationData = $relationData;

        return $this;
    }

    /**
     * @return \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\RelationSourceObject
     */
    public function getSource()
    {
        return $this->source;
    }

    /**
     * @param \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\RelationSourceObject $source
     *
     * @return self
     */
    public function setSource($source): self
    {
        $this->source = $source;

        return $this;
    }

    /**
     * @return \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\RelationTargetObject
     */
    public function getTarget()
    {
        return $this->target;
    }

    /**
     * @param \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\RelationTargetObject $target
     *
     * @return self
     */
    public function setTarget($target): self
    {
        $this->target = $target;

        return $this;
    }

    /**
     * @return \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\RelationExpandableObject
     */
    public function get_expandable()
    {
        return $this->_expandable;
    }

    /**
     * @param \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\RelationExpandableObject $_expandable
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
}
