<?php

declare(strict_types=1);

namespace MichalHepner\AtlassianRestClient\Document;

class StrikeMark extends AbstractMark
{
    const TYPE = 'strike';

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
