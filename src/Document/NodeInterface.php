<?php

declare(strict_types=1);

namespace MichalHepner\AtlassianRestClient\Document;

interface NodeInterface
{
    public function isRoot(): bool;
    public function getParent(): ?NodeInterface;
    public function setParent(?NodeInterface $node): NodeInterface;
    public function getType(): string;
    public function toArray(): array;
}
