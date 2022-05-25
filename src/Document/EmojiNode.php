<?php

declare(strict_types=1);

namespace MichalHepner\AtlassianRestClient\Document;

class EmojiNode extends AbstractNode implements InlineNodeInterface
{
    public function __construct()
    {
        throw new \Exception('Not implemented');
    }

    public function getType(): string
    {
        throw new \Exception('Not implemented');
    }

    public function toArray(): array
    {
        throw new \Exception('Not implemented');
    }
}
