<?php

declare(strict_types = 1);

namespace MichalHepner\AtlassianRestClient\ConfluenceCloud\Factory;

use MichalHepner\AtlassianRestClient\Factory\AbstractModelFactory;
use MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\LabelCreate;

class LabelCreateFactory extends AbstractModelFactory
{
    protected function getCreatedClass(): string
    {
        return LabelCreate::class;
    }
}
