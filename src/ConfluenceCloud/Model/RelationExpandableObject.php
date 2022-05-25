<?php

declare(strict_types = 1);

namespace MichalHepner\AtlassianRestClient\ConfluenceCloud\Model;

class RelationExpandableObject
{
    /**
     * REQUIRED
     * 
     * @var string
     */
    protected $relationData;

    /**
     * REQUIRED
     * 
     * @var string
     */
    protected $source;

    /**
     * REQUIRED
     * 
     * @var string
     */
    protected $target;

    /**
     * @return string
     */
    public function getRelationData()
    {
        return $this->relationData;
    }

    /**
     * @param string $relationData
     *
     * @return self
     */
    public function setRelationData($relationData): self
    {
        $this->relationData = $relationData;

        return $this;
    }

    /**
     * @return string
     */
    public function getSource()
    {
        return $this->source;
    }

    /**
     * @param string $source
     *
     * @return self
     */
    public function setSource($source): self
    {
        $this->source = $source;

        return $this;
    }

    /**
     * @return string
     */
    public function getTarget()
    {
        return $this->target;
    }

    /**
     * @param string $target
     *
     * @return self
     */
    public function setTarget($target): self
    {
        $this->target = $target;

        return $this;
    }
}
