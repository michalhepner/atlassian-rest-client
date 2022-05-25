<?php

declare(strict_types=1);

namespace MichalHepner\AtlassianRestClient\Document;

class CodeMark extends AbstractMark
{
    const TYPE = 'code';

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
