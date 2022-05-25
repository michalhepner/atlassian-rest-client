<?php

declare(strict_types = 1);

namespace MichalHepner\AtlassianRestClient\ConfluenceCloud\Factory;

use MichalHepner\AtlassianRestClient\Factory\AbstractCollectionFactory;
use MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\ContentRestriction;
use MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\ContentRestrictionArrayResultsArray;

class ContentRestrictionArrayResultsArrayFactory extends AbstractCollectionFactory
{
    protected function getCreatedClass(): string
    {
        return ContentRestrictionArrayResultsArray::class;
    }

    protected function getItemClass(): string
    {
        return ContentRestriction::class;
    }
}
