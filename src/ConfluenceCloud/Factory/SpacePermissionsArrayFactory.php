<?php

declare(strict_types = 1);

namespace MichalHepner\AtlassianRestClient\ConfluenceCloud\Factory;

use MichalHepner\AtlassianRestClient\Factory\AbstractCollectionFactory;
use MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\SpacePermission;
use MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\SpacePermissionsArray;

class SpacePermissionsArrayFactory extends AbstractCollectionFactory
{
    protected function getCreatedClass(): string
    {
        return SpacePermissionsArray::class;
    }

    protected function getItemClass(): string
    {
        return SpacePermission::class;
    }
}
