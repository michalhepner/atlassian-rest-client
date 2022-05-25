<?php

declare(strict_types = 1);

namespace MichalHepner\AtlassianRestClient\Jira;

final class Endpoint
{
    const GET_SEARCH = '/rest/api/3/search';
    const GET_MYSELF = '/rest/api/3/myself';
    const GET_PROJECT = '/rest/api/3/project/%s';
    const POST_ISSUE = '/rest/api/3/issue';
}
