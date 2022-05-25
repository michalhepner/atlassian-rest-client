<?php

declare(strict_types=1);

namespace MichalHepner\AtlassianRestClient\Jira\Factory;

use MichalHepner\AtlassianRestClient\Factory\AbstractCollectionFactory;
use MichalHepner\AtlassianRestClient\Jira\Collection\ComponentCollectionAbstract;
use MichalHepner\AtlassianRestClient\Jira\Model\Component;

class ComponentCollectionFactory extends AbstractCollectionFactory
{
    protected function getCreatedClass(): string
    {
        return ComponentCollectionAbstract::class;
    }

    protected function getItemClass(): string
    {
        return Component::class;
    }
}
