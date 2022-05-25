<?php

declare(strict_types = 1);

namespace MichalHepner\AtlassianRestClient\ConfluenceCloud\Factory;

use MichalHepner\AtlassianRestClient\Factory\AbstractCollectionFactory;
use MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\Watch;
use MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\WatchArrayResultsArray;

class WatchArrayResultsArrayFactory extends AbstractCollectionFactory
{
    protected function getCreatedClass(): string
    {
        return WatchArrayResultsArray::class;
    }

    protected function getItemClass(): string
    {
        return Watch::class;
    }
}
