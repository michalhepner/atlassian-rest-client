<?php

declare(strict_types = 1);

namespace MichalHepner\AtlassianRestClient\ConfluenceCloud\Factory;

use MichalHepner\AtlassianRestClient\Factory\AbstractCollectionFactory;
use MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\ContentTemplate;
use MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\ContentTemplateArrayResultsArray;

class ContentTemplateArrayResultsArrayFactory extends AbstractCollectionFactory
{
    protected function getCreatedClass(): string
    {
        return ContentTemplateArrayResultsArray::class;
    }

    protected function getItemClass(): string
    {
        return ContentTemplate::class;
    }
}
