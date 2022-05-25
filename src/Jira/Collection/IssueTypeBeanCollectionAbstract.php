<?php

declare(strict_types=1);

namespace MichalHepner\AtlassianRestClient\Jira\Collection;

use MichalHepner\AtlassianRestClient\Jira\Model\IssueTypeBean;
use MichalHepner\Collection\AbstractObjectCollection;

class IssueTypeBeanCollectionAbstract extends AbstractObjectCollection
{
    public function __construct(array $items = [])
    {
        parent::__construct($items, IssueTypeBean::class);
    }
}
