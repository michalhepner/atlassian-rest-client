<?php

declare(strict_types=1);

namespace MichalHepner\AtlassianRestClient\Document;

use MichalHepner\Collection\AbstractObjectCollection;

class PanelNodeContentCollectionAbstract extends AbstractObjectCollection
{
    public function __construct(array $items = [])
    {
        parent::__construct($items, PanelNodeContentInterface::class);
    }

    public function toArray(): array
    {
        return array_values($this->map(function (PanelNodeContentInterface $panelContent) {
            return $panelContent->toArray();
        }));
    }
}
