<?php

declare(strict_types = 1);

namespace MichalHepner\AtlassianRestClient\ConfluenceCloud\Factory;

use MichalHepner\AtlassianRestClient\Factory\AbstractModelFactory;
use MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\EmbeddedContent;

class EmbeddedContentFactory extends AbstractModelFactory
{
    protected function getCreatedClass(): string
    {
        return EmbeddedContent::class;
    }
}
