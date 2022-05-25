<?php

declare(strict_types = 1);

namespace MichalHepner\AtlassianRestClient\Jira\Collection;

use MichalHepner\AtlassianRestClient\Jira\Model\IssueBean;
use MichalHepner\Collection\CollectionInterface;
use MichalHepner\Collection\AbstractObjectCollection;

class IssueBeanCollectionAbstract extends AbstractObjectCollection
{
    public function __construct(array $items = [])
    {
        parent::__construct($items, IssueBean::class);
    }

    public function filterWithResolutionDate(): IssueBeanCollectionAbstract
    {
        return $this->filter(function (IssueBean $issueBean) {
            return (bool) $issueBean->getFields()['resolutiondate'];
        });
    }

    public function groupByCreatedYear(): CollectionInterface
    {
        return $this->group(function (IssueBean $issueBean) {
            return (new \DateTime($issueBean->getFields()['created']))->format('Y');
        });
    }

    public function groupByCreatedMonth(): CollectionInterface
    {
        return $this->group(function (IssueBean $issueBean) {
            return (new \DateTime($issueBean->getFields()['created']))->format('m');
        });
    }

    public function groupByCreatedYearMonth(): CollectionInterface
    {
        return $this->group(function (IssueBean $issueBean) {
            return (new \DateTime($issueBean->getFields()['created']))->format('Y.m');
        });
    }
}
