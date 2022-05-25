<?php

declare(strict_types = 1);

namespace MichalHepner\AtlassianRestClient\ConfluenceCloud\Factory;

use MichalHepner\AtlassianRestClient\Factory\AbstractCollectionFactory;
use MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\ContentCreateAncestorsArrayItemsObject;
use MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\ContentCreateAncestorsArray;

class ContentCreateAncestorsArrayFactory extends AbstractCollectionFactory
{
    protected function getCreatedClass(): string
    {
        return ContentCreateAncestorsArray::class;
    }

    protected function getItemClass(): string
    {
        return ContentCreateAncestorsArrayItemsObject::class;
    }
}
