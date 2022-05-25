<?php

declare(strict_types = 1);

namespace MichalHepner\AtlassianRestClient\ConfluenceCloud\Factory;

use MichalHepner\AtlassianRestClient\Factory\AbstractModelFactory;
use MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\ContentCommentExtensionsObjectResolutionObject;

class ContentCommentExtensionsObjectResolutionObjectFactory extends AbstractModelFactory
{
    protected function getCreatedClass(): string
    {
        return ContentCommentExtensionsObjectResolutionObject::class;
    }
}
