<?php

namespace MichalHepner\AtlassianRestClient\Jira\Collection;

use MichalHepner\AtlassianRestClient\Jira\Model\SimpleLinkBean;
use MichalHepner\Collection\AbstractObjectCollection;

class SimpleLinkBeanCollection extends AbstractObjectCollection
{
    public function __construct(array $items = [])
    {
        parent::__construct($items, SimpleLinkBean::class);
    }
}
