<?php

declare(strict_types=1);

namespace MichalHepner\AtlassianRestClient\Document;

class EmMark extends AbstractMark
{
    const TYPE = 'em';

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
