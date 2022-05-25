<?php

declare(strict_types=1);

namespace MichalHepner\AtlassianRestClient\ConfluenceCloud\Helper;

class UrlHelper
{
    public static function getUrl(string $instanceUrl, string $relativeUrl): string
    {
        return implode('/', [
            preg_replace('/[\/]*$/', '', $instanceUrl),
            'wiki',
            preg_replace('/^[\/]*/', '', $relativeUrl)
        ]);
    }
}
