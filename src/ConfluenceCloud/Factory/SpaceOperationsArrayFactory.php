<?php

declare(strict_types = 1);

namespace MichalHepner\AtlassianRestClient\ConfluenceCloud\Factory;

use MichalHepner\AtlassianRestClient\Factory\AbstractCollectionFactory;
use MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\OperationCheckResult;
use MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\SpaceOperationsArray;

class SpaceOperationsArrayFactory extends AbstractCollectionFactory
{
    protected function getCreatedClass(): string
    {
        return SpaceOperationsArray::class;
    }

    protected function getItemClass(): string
    {
        return OperationCheckResult::class;
    }
}
