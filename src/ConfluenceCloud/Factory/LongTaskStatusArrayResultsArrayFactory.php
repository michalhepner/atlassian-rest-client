<?php

declare(strict_types = 1);

namespace MichalHepner\AtlassianRestClient\ConfluenceCloud\Factory;

use MichalHepner\AtlassianRestClient\Factory\AbstractCollectionFactory;
use MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\LongTaskStatus;
use MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\LongTaskStatusArrayResultsArray;

class LongTaskStatusArrayResultsArrayFactory extends AbstractCollectionFactory
{
    protected function getCreatedClass(): string
    {
        return LongTaskStatusArrayResultsArray::class;
    }

    protected function getItemClass(): string
    {
        return LongTaskStatus::class;
    }
}
