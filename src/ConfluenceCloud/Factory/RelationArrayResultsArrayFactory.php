<?php

declare(strict_types = 1);

namespace MichalHepner\AtlassianRestClient\ConfluenceCloud\Factory;

use MichalHepner\AtlassianRestClient\Factory\AbstractCollectionFactory;
use MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\Relation;
use MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\RelationArrayResultsArray;

class RelationArrayResultsArrayFactory extends AbstractCollectionFactory
{
    protected function getCreatedClass(): string
    {
        return RelationArrayResultsArray::class;
    }

    protected function getItemClass(): string
    {
        return Relation::class;
    }
}
