<?php

declare(strict_types = 1);

namespace MichalHepner\AtlassianRestClient\ConfluenceCloud\Factory;

use MichalHepner\AtlassianRestClient\Factory\AbstractModelFactory;
use MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\ContentComment;

class ContentCommentFactory extends AbstractModelFactory
{
    protected function getCreatedClass(): string
    {
        return ContentComment::class;
    }
}
