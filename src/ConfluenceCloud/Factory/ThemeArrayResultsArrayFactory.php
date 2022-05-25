<?php

declare(strict_types = 1);

namespace MichalHepner\AtlassianRestClient\ConfluenceCloud\Factory;

use MichalHepner\AtlassianRestClient\Factory\AbstractCollectionFactory;
use MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\ThemeNoLinks;
use MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\ThemeArrayResultsArray;

class ThemeArrayResultsArrayFactory extends AbstractCollectionFactory
{
    protected function getCreatedClass(): string
    {
        return ThemeArrayResultsArray::class;
    }

    protected function getItemClass(): string
    {
        return ThemeNoLinks::class;
    }
}
