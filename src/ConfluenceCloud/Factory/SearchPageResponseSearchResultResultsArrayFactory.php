<?php

declare(strict_types = 1);

namespace MichalHepner\AtlassianRestClient\ConfluenceCloud\Factory;

use MichalHepner\AtlassianRestClient\Factory\AbstractCollectionFactory;
use MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\SearchResult;
use MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\SearchPageResponseSearchResultResultsArray;

class SearchPageResponseSearchResultResultsArrayFactory extends AbstractCollectionFactory
{
    protected function getCreatedClass(): string
    {
        return SearchPageResponseSearchResultResultsArray::class;
    }

    protected function getItemClass(): string
    {
        return SearchResult::class;
    }
}
