<?php

declare(strict_types = 1);

namespace MichalHepner\AtlassianRestClient\ConfluenceCloud\Factory;

use MichalHepner\AtlassianRestClient\Factory\AbstractModelFactory;
use MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\SpacePropertyArray;

class SpacePropertyArrayFactory extends AbstractModelFactory
{
    protected function getCreatedClass(): string
    {
        return SpacePropertyArray::class;
    }
}
