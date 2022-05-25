<?php

declare(strict_types=1);

namespace MichalHepner\AtlassianRestClient\Document;

use MichalHepner\Collection\AbstractObjectCollection;

class ParagraphNodeCollectionAbstract extends AbstractObjectCollection
{
    public function __construct(array $items = [])
    {
        parent::__construct($items, ParagraphNode::class);
    }

    public function toArray()
    {
        return array_values($this->map(function (ParagraphNode $paragraph) {
            return $paragraph->toArray();
        }));
    }
}
