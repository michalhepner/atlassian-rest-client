<?php

declare(strict_types = 1);

namespace MichalHepner\AtlassianRestClient\ConfluenceCloud\Factory;

use MichalHepner\AtlassianRestClient\Factory\AbstractCollectionFactory;
use MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\ContentBlueprintDraftAncestorsArrayItemsObject;
use MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\ContentBlueprintDraftAncestorsArray;

class ContentBlueprintDraftAncestorsArrayFactory extends AbstractCollectionFactory
{
    protected function getCreatedClass(): string
    {
        return ContentBlueprintDraftAncestorsArray::class;
    }

    protected function getItemClass(): string
    {
        return ContentBlueprintDraftAncestorsArrayItemsObject::class;
    }
}
