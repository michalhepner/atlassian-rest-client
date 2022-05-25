<?php

declare(strict_types = 1);

namespace MichalHepner\AtlassianRestClient\ConfluenceCloud\Factory;

use MichalHepner\AtlassianRestClient\Factory\AbstractCollectionFactory;
use MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\ContentUpdateAncestorsArrayItemsObject;
use MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\ContentUpdateAncestorsArray;

class ContentUpdateAncestorsArrayFactory extends AbstractCollectionFactory
{
    protected function getCreatedClass(): string
    {
        return ContentUpdateAncestorsArray::class;
    }

    protected function getItemClass(): string
    {
        return ContentUpdateAncestorsArrayItemsObject::class;
    }
}
