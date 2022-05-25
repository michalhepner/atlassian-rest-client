<?php

declare(strict_types = 1);

namespace MichalHepner\AtlassianRestClient\Jira\Factory;

use MichalHepner\AtlassianRestClient\Factory\AbstractModelFactory;
use MichalHepner\AtlassianRestClient\Jira\Model\SearchResultBean;

class SearchResultBeanFactory extends AbstractModelFactory
{
    const TYPE = SearchResultBean::class;

    protected function getCreatedClass(): string
    {
        return self::TYPE;
    }
}
