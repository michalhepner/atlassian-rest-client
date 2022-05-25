<?php

declare(strict_types=1);

namespace MichalHepner\AtlassianRestClient\Document;

abstract class AbstractNode implements NodeInterface
{
    /**
     * @var null|NodeInterface
     */
    protected $parent;

    public function getParent(): ?NodeInterface
    {
        return $this->parent;
    }

    public function isRoot(): bool
    {
        return $this->getParent() === null;
    }

    public function setParent(?NodeInterface $node): NodeInterface
    {
        $this->parent = $node;

        return $this;
    }
}
