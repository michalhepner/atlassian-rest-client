<?php

declare(strict_types=1);

namespace MichalHepner\AtlassianRestClient\Document;

use MichalHepner\Collection\AbstractObjectCollection;

class InlineNodeCollectionAbstract extends AbstractObjectCollection
{
    public function __construct(array $items = [])
    {
        parent::__construct($items, InlineNodeInterface::class);
    }

    public function toArray(): array
    {
        return array_values($this->map(function (InlineNodeInterface $topLevelBlock) {
            return $topLevelBlock->toArray();
        }));
    }
}
