<?php

declare(strict_types = 1);

namespace MichalHepner\AtlassianRestClient\ConfluenceCloud\Factory;

use MichalHepner\AtlassianRestClient\Factory\AbstractModelFactory;
use MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\VersionRestoreParamsObject;

class VersionRestoreParamsObjectFactory extends AbstractModelFactory
{
    protected function getCreatedClass(): string
    {
        return VersionRestoreParamsObject::class;
    }
}
