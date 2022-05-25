<?php

declare(strict_types=1);

namespace MichalHepner\AtlassianRestClient\Jira\Helper;

use MichalHepner\AtlassianRestClient\Jira\Model\IssueBean;

class IssueBeanHelper
{
    public static function getUrl(string $instanceUrl, IssueBean $issueBean): string
    {
        return implode('/', [
            preg_replace('/\/*$/', '', $instanceUrl),
            'browse',
            $issueBean->getKey()
        ]);
    }
}
