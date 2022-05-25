<?php

declare(strict_types = 1);

namespace MichalHepner\AtlassianRestClient\ConfluenceCloud\Factory;

use MichalHepner\AtlassianRestClient\Factory\AbstractCollectionFactory;
use MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\ContentRestrictionUpdate;
use MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\ContentRestrictionUpdateArray;

class ContentRestrictionUpdateArrayFactory extends AbstractCollectionFactory
{
    protected function getCreatedClass(): string
    {
        return ContentRestrictionUpdateArray::class;
    }

    protected function getItemClass(): string
    {
        return ContentRestrictionUpdate::class;
    }
}
