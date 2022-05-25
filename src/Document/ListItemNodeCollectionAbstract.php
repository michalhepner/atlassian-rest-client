<?php

declare(strict_types=1);

namespace MichalHepner\AtlassianRestClient\Document;

use MichalHepner\Collection\AbstractObjectCollection;

class ListItemNodeCollectionAbstract extends AbstractObjectCollection
{
    public function __construct(array $items = [])
    {
        parent::__construct($items, ListItemNode::class);
    }

    public function toArray(): array
    {
        return array_values($this->map(function (ListItemNode $item) {
            return $item->toArray();
        }));
    }
}
