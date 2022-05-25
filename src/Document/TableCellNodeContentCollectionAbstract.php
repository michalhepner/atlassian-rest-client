<?php

declare(strict_types=1);

namespace MichalHepner\AtlassianRestClient\Document;

use MichalHepner\Collection\AbstractObjectCollection;

class TableCellNodeContentCollectionAbstract extends AbstractObjectCollection
{
    public function __construct(array $items = [])
    {
        parent::__construct($items, TableCellNodeContentInterface::class);
    }

    public function toArray(): array
    {
        return array_values($this->map(function (TableCellNodeContentInterface $tableCellContent) {
            return $tableCellContent->toArray();
        }));
    }
}
