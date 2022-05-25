<?php

declare(strict_types=1);

namespace MichalHepner\AtlassianRestClient\Document;

class HardBreakNode extends AbstractNode implements InlineNodeInterface
{
    const TYPE = 'hardBreak';

    public function getType(): string
    {
        return self::TYPE;
    }

    public function toArray(): array
    {
        return [
            'type' => self::TYPE,
        ];
    }
}
