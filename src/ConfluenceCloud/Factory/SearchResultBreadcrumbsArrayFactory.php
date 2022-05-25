<?php

declare(strict_types = 1);

namespace MichalHepner\AtlassianRestClient\ConfluenceCloud\Factory;

use MichalHepner\AtlassianRestClient\Factory\AbstractCollectionFactory;
use MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\Breadcrumb;
use MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\SearchResultBreadcrumbsArray;

class SearchResultBreadcrumbsArrayFactory extends AbstractCollectionFactory
{
    protected function getCreatedClass(): string
    {
        return SearchResultBreadcrumbsArray::class;
    }

    protected function getItemClass(): string
    {
        return Breadcrumb::class;
    }
}
