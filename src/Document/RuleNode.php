<?php

declare(strict_types=1);

namespace MichalHepner\AtlassianRestClient\Document;

class RuleNode extends AbstractNode implements TopLevelNodeInterface, TableCellNodeContentInterface
{
    const TYPE = 'rule';

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
