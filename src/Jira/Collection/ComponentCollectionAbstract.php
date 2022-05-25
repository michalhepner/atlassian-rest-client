<?php

declare(strict_types=1);

namespace MichalHepner\AtlassianRestClient\Jira\Collection;

use MichalHepner\AtlassianRestClient\Jira\Model\Component;
use MichalHepner\Collection\AbstractObjectCollection;

class ComponentCollectionAbstract extends AbstractObjectCollection
{
    public function __construct(array $items = [])
    {
        parent::__construct($items, Component::class);
    }
}
