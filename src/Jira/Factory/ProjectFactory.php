<?php

declare(strict_types = 1);

namespace MichalHepner\AtlassianRestClient\Jira\Factory;

use MichalHepner\AtlassianRestClient\Factory\AbstractModelFactory;
use MichalHepner\AtlassianRestClient\Jira\Model\Project;

class ProjectFactory extends AbstractModelFactory
{
    protected function getCreatedClass(): string
    {
        return Project::class;
    }
}
