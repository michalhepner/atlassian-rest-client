<?php

declare(strict_types = 1);

namespace MichalHepner\AtlassianRestClient\Jira\Factory;

use MichalHepner\AtlassianRestClient\Factory\AbstractModelFactory;
use MichalHepner\AtlassianRestClient\Jira\Model\Component;

class ComponentFactory extends AbstractModelFactory
{
    protected function getCreatedClass(): string
    {
        return Component::class;
    }
}
