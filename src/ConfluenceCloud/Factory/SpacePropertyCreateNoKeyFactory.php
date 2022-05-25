<?php

declare(strict_types = 1);

namespace MichalHepner\AtlassianRestClient\ConfluenceCloud\Factory;

use MichalHepner\AtlassianRestClient\Factory\AbstractModelFactory;
use MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\SpacePropertyCreateNoKey;

class SpacePropertyCreateNoKeyFactory extends AbstractModelFactory
{
    protected function getCreatedClass(): string
    {
        return SpacePropertyCreateNoKey::class;
    }
}
