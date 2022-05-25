<?php

namespace MichalHepner\AtlassianRestClient\Jira\Collection;

use MichalHepner\AtlassianRestClient\Jira\Model\ChangeHistoryBean;
use MichalHepner\Collection\AbstractObjectCollection;

class ChangeHistoryBeanCollectionAbstract extends AbstractObjectCollection
{
    public function __construct(array $items = [])
    {
        parent::__construct($items, ChangeHistoryBean::class);
    }
}
