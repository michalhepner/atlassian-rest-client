<?php

declare(strict_types = 1);

namespace MichalHepner\AtlassianRestClient\ConfluenceCloud\Factory;

use MichalHepner\AtlassianRestClient\Factory\AbstractCollectionFactory;
use MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\EmbeddedContent;
use MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\ContentBodyEmbeddedContentArray;

class ContentBodyEmbeddedContentArrayFactory extends AbstractCollectionFactory
{
    protected function getCreatedClass(): string
    {
        return ContentBodyEmbeddedContentArray::class;
    }

    protected function getItemClass(): string
    {
        return EmbeddedContent::class;
    }
}
