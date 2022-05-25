<?php

declare(strict_types = 1);

namespace MichalHepner\AtlassianRestClient\ConfluenceCloud\Factory;

use MichalHepner\AtlassianRestClient\Factory\AbstractCollectionFactory;
use MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\ContentProperty;
use MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\ContentPropertyArrayResultsArray;

class ContentPropertyArrayResultsArrayFactory extends AbstractCollectionFactory
{
    protected function getCreatedClass(): string
    {
        return ContentPropertyArrayResultsArray::class;
    }

    protected function getItemClass(): string
    {
        return ContentProperty::class;
    }
}
