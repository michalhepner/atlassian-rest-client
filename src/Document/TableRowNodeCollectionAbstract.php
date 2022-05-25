<?php

declare(strict_types=1);

namespace MichalHepner\AtlassianRestClient\Document;

use MichalHepner\Collection\AbstractObjectCollection;

class TableRowNodeCollectionAbstract extends AbstractObjectCollection
{
    public function __construct(array $items = [])
    {
        parent::__construct($items, TableRowNode::class);
    }

    public function toArray(): array
    {
        return array_values($this->map(function (TableRowNode $tableRow) {
            return $tableRow->toArray();
        }));
    }
}
