<?php

declare(strict_types = 1);

namespace MichalHepner\AtlassianRestClient\ConfluenceCloud\Factory;

use MichalHepner\AtlassianRestClient\Factory\AbstractCollectionFactory;
use MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\ContentRestrictionUpdateRestrictionsObjectUserArrayItemsObject;
use MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\ContentRestrictionUpdateRestrictionsAbstractObjectUserArray;

class ContentRestrictionUpdateRestrictionsObjectUserArrayFactory extends AbstractCollectionFactory
{
    protected function getCreatedClass(): string
    {
        return ContentRestrictionUpdateRestrictionsAbstractObjectUserArray::class;
    }

    protected function getItemClass(): string
    {
        return ContentRestrictionUpdateRestrictionsObjectUserArrayItemsObject::class;
    }
}
