<?php

declare(strict_types = 1);

namespace MichalHepner\AtlassianRestClient\ConfluenceCloud\Factory;

use MichalHepner\AtlassianRestClient\Factory\AbstractCollectionFactory;
use MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\Version;
use MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\VersionArrayResultsArray;

class VersionArrayResultsArrayFactory extends AbstractCollectionFactory
{
    protected function getCreatedClass(): string
    {
        return VersionArrayResultsArray::class;
    }

    protected function getItemClass(): string
    {
        return Version::class;
    }
}
