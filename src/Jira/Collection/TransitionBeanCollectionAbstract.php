<?php

namespace MichalHepner\AtlassianRestClient\Jira\Collection;

use MichalHepner\AtlassianRestClient\Jira\Model\TransitionBean;
use MichalHepner\Collection\AbstractObjectCollection;

class TransitionBeanCollectionAbstract extends AbstractObjectCollection
{
    public function __construct(array $items = [])
    {
        parent::__construct($items, TransitionBean::class);
    }
}
