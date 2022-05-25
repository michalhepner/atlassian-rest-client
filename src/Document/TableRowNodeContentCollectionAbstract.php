<?php

declare(strict_types=1);

namespace MichalHepner\AtlassianRestClient\Document;

use MichalHepner\Collection\AbstractObjectCollection;

class TableRowNodeContentCollectionAbstract extends AbstractObjectCollection
{
    public function __construct(array $items = [])
    {
        parent::__construct($items, TableRowNodeContentInterface::class);
    }

    public function toArray(): array
    {
        return array_values($this->map(function (TableRowNodeContentInterface $tableRowContent) {
            return $tableRowContent->toArray();
        }));
    }
}
