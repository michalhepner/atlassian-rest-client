<?php

declare(strict_types = 1);

namespace MichalHepner\AtlassianRestClient\Jira\Collection;

use MichalHepner\AtlassianRestClient\Jira\Model\ChangeItemBean;
use MichalHepner\Collection\AbstractObjectCollection;

class ChangeItemBeanCollectionAbstract extends AbstractObjectCollection
{
    public function __construct(array $items = [])
    {
        parent::__construct($items, ChangeItemBean::class);
    }
}
