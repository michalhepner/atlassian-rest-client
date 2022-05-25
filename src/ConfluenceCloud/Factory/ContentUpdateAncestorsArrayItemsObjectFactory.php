<?php

declare(strict_types = 1);

namespace MichalHepner\AtlassianRestClient\ConfluenceCloud\Factory;

use MichalHepner\AtlassianRestClient\Factory\AbstractModelFactory;
use MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\ContentUpdateAncestorsArrayItemsObject;

class ContentUpdateAncestorsArrayItemsObjectFactory extends AbstractModelFactory
{
    protected function getCreatedClass(): string
    {
        return ContentUpdateAncestorsArrayItemsObject::class;
    }
}
