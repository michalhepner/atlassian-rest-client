<?php

declare(strict_types = 1);

namespace MichalHepner\AtlassianRestClient\Jira\Factory;

use MichalHepner\AtlassianRestClient\Factory\AbstractCollectionFactory;
use MichalHepner\AtlassianRestClient\Jira\Collection\IssueBeanCollectionAbstract;
use MichalHepner\AtlassianRestClient\Jira\Model\IssueBean;

class IssueBeanCollectionFactory extends AbstractCollectionFactory
{
    protected function getCreatedClass(): string
    {
        return IssueBeanCollectionAbstract::class;
    }

    protected function getItemClass(): string
    {
        return IssueBean::class;
    }
}
