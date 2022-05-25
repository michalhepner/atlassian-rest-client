<?php

declare(strict_types = 1);

namespace MichalHepner\AtlassianRestClient\ConfluenceCloud\Factory;

use MichalHepner\AtlassianRestClient\Factory\AbstractCollectionFactory;
use MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\Space;
use MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\SpaceArrayResultsArray;

class SpaceArrayResultsArrayFactory extends AbstractCollectionFactory
{
    protected function getCreatedClass(): string
    {
        return SpaceArrayResultsArray::class;
    }

    protected function getItemClass(): string
    {
        return Space::class;
    }
}
