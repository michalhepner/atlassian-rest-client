<?php

declare(strict_types = 1);

namespace MichalHepner\AtlassianRestClient\Jira\Collection;

use MichalHepner\AtlassianRestClient\Jira\Model\LinkGroupBean;
use MichalHepner\Collection\AbstractObjectCollection;

class LinkGroupBeanCollectionAbstract extends AbstractObjectCollection
{
    public function __construct(array $items = [])
    {
        parent::__construct($items, LinkGroupBean::class);
    }
}
