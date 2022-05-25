<?php

declare(strict_types=1);

namespace MichalHepner\AtlassianRestClient\Document;

class StrongMark extends AbstractMark
{
    const TYPE = 'strong';

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
