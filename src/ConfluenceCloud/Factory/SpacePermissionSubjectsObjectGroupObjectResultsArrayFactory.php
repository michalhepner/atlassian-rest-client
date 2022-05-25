<?php

declare(strict_types = 1);

namespace MichalHepner\AtlassianRestClient\ConfluenceCloud\Factory;

use MichalHepner\AtlassianRestClient\Factory\AbstractCollectionFactory;
use MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\Group;
use MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\SpacePermissionSubjectsObjectGroupAbstractObjectResultsArray;

class SpacePermissionSubjectsObjectGroupObjectResultsArrayFactory extends AbstractCollectionFactory
{
    protected function getCreatedClass(): string
    {
        return SpacePermissionSubjectsObjectGroupAbstractObjectResultsArray::class;
    }

    protected function getItemClass(): string
    {
        return Group::class;
    }
}
