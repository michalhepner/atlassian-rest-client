<?php

declare(strict_types=1);

namespace MichalHepner\AtlassianRestClient\Document;

abstract class AbstractMark implements MarkInterface
{
    /**
     * @var NodeInterface
     */
    protected $parent;

    public function getParent(): NodeInterface
    {
        return $this->parent;
    }

    public function setParent(NodeInterface $node): MarkInterface
    {
        $this->parent = $node;

        return $this;
    }
}
