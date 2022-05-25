<?php

declare(strict_types = 1);

namespace MichalHepner\AtlassianRestClient\ConfluenceCloud\Factory;

use MichalHepner\AtlassianRestClient\Factory\AbstractCollectionFactory;
use MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\SpaceDescriptionEmbeddedContentArrayItemsObject;
use MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\SpaceDescriptionEmbeddedContentArray;

class SpaceDescriptionEmbeddedContentArrayFactory extends AbstractCollectionFactory
{
    protected function getCreatedClass(): string
    {
        return SpaceDescriptionEmbeddedContentArray::class;
    }

    protected function getItemClass(): string
    {
        return SpaceDescriptionEmbeddedContentArrayItemsObject::class;
    }
}
