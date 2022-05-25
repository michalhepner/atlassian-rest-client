<?php

declare(strict_types = 1);

namespace MichalHepner\AtlassianRestClient\ConfluenceCloud\Factory;

use MichalHepner\AtlassianRestClient\Factory\AbstractModelFactory;
use MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\ButtonLookAndFeel;

class ButtonLookAndFeelFactory extends AbstractModelFactory
{
    protected function getCreatedClass(): string
    {
        return ButtonLookAndFeel::class;
    }
}
