<?php

declare(strict_types = 1);

namespace MichalHepner\AtlassianRestClient\ConfluenceCloud\Factory;

use MichalHepner\AtlassianRestClient\Factory\AbstractCollectionFactory;
use MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\Group;
use MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\GroupArrayResultsArray;

class GroupArrayResultsArrayFactory extends AbstractCollectionFactory
{
    protected function getCreatedClass(): string
    {
        return GroupArrayResultsArray::class;
    }

    protected function getItemClass(): string
    {
        return Group::class;
    }
}
