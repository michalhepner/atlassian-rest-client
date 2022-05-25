<?php

declare(strict_types = 1);

namespace MichalHepner\AtlassianRestClient\ConfluenceCloud\Factory;

use MichalHepner\AtlassianRestClient\Factory\AbstractModelFactory;
use MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\LookAndFeelUpdated;

class LookAndFeelUpdatedFactory extends AbstractModelFactory
{
    protected function getCreatedClass(): string
    {
        return LookAndFeelUpdated::class;
    }
}
