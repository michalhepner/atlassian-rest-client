<?php

declare(strict_types = 1);

namespace MichalHepner\AtlassianRestClient\Jira\Factory;

use MichalHepner\AtlassianRestClient\Factory\AbstractCollectionFactory;
use MichalHepner\AtlassianRestClient\Jira\Collection\IssueTypeBeanCollectionAbstract;
use MichalHepner\AtlassianRestClient\Jira\Model\IssueTypeBean;

class IssueTypeBeanCollectionFactory extends AbstractCollectionFactory
{
    protected function getCreatedClass(): string
    {
        return IssueTypeBeanCollectionAbstract::class;
    }

    protected function getItemClass(): string
    {
        return IssueTypeBean::class;
    }
}
