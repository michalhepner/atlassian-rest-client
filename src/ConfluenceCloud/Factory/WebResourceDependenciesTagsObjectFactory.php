<?php

declare(strict_types = 1);

namespace MichalHepner\AtlassianRestClient\ConfluenceCloud\Factory;

use MichalHepner\AtlassianRestClient\Factory\AbstractModelFactory;
use MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\WebResourceDependenciesTagsObject;

class WebResourceDependenciesTagsObjectFactory extends AbstractModelFactory
{
    protected function getCreatedClass(): string
    {
        return WebResourceDependenciesTagsObject::class;
    }
}
