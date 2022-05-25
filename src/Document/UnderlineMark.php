<?php

declare(strict_types=1);

namespace MichalHepner\AtlassianRestClient\Document;

class UnderlineMark extends AbstractMark
{
    const TYPE = 'underline';

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
