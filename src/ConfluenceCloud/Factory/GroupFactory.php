<?php

declare(strict_types = 1);

namespace MichalHepner\AtlassianRestClient\ConfluenceCloud\Factory;

use MichalHepner\AtlassianRestClient\Factory\AbstractModelFactory;
use MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\Group;

class GroupFactory extends AbstractModelFactory
{
    protected function getCreatedClass(): string
    {
        return Group::class;
    }
}
