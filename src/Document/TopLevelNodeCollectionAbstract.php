<?php

declare(strict_types=1);

namespace MichalHepner\AtlassianRestClient\Document;

use MichalHepner\Collection\AbstractObjectCollection;

class TopLevelNodeCollectionAbstract extends AbstractObjectCollection
{
    public function __construct(array $items = [])
    {
        parent::__construct($items, TopLevelNodeInterface::class);
    }

    public function toArray(): array
    {
        return array_values($this->map(function (TopLevelNodeInterface $topLevelBlock) {
            return $topLevelBlock->toArray();
        }));
    }
}
