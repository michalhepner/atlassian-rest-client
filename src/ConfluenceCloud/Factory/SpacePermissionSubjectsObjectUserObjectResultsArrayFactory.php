<?php

declare(strict_types = 1);

namespace MichalHepner\AtlassianRestClient\ConfluenceCloud\Factory;

use MichalHepner\AtlassianRestClient\Factory\AbstractCollectionFactory;
use MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\User;
use MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\SpacePermissionSubjectsObjectUserAbstractObjectResultsArray;

class SpacePermissionSubjectsObjectUserObjectResultsArrayFactory extends AbstractCollectionFactory
{
    protected function getCreatedClass(): string
    {
        return SpacePermissionSubjectsObjectUserAbstractObjectResultsArray::class;
    }

    protected function getItemClass(): string
    {
        return User::class;
    }
}
