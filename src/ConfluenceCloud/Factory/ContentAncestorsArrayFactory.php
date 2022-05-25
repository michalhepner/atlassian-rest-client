<?php

declare(strict_types = 1);

namespace MichalHepner\AtlassianRestClient\ConfluenceCloud\Factory;

use MichalHepner\AtlassianRestClient\Factory\AbstractCollectionFactory;
use MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\Content;
use MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\ContentAncestorsArray;

class ContentAncestorsArrayFactory extends AbstractCollectionFactory
{
    protected function getCreatedClass(): string
    {
        return ContentAncestorsArray::class;
    }

    protected function getItemClass(): string
    {
        return Content::class;
    }
}
