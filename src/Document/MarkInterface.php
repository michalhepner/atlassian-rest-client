<?php

declare(strict_types = 1);

namespace MichalHepner\AtlassianRestClient\Document;

interface MarkInterface
{
    public function getType(): string;
    public function toArray(): array;
    public function getParent(): NodeInterface;
    public function setParent(NodeInterface $node): MarkInterface;
}
