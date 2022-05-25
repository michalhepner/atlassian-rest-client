<?php

declare(strict_types=1);

namespace MichalHepner\AtlassianRestClient\Document;

use MichalHepner\Collection\AbstractObjectCollection;

class NodeCollectionAbstract extends AbstractObjectCollection
{
    public function __construct(array $items = [])
    {
        parent::__construct($items, NodeInterface::class);
    }

    public function toArray(): array
    {
        return array_values($this->map(function (NodeInterface $node) {
            return $node->toArray();
        }));
    }
}
