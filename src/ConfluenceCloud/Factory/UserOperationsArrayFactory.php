<?php

declare(strict_types = 1);

namespace MichalHepner\AtlassianRestClient\ConfluenceCloud\Factory;

use MichalHepner\AtlassianRestClient\Factory\AbstractCollectionFactory;
use MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\OperationCheckResult;
use MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\UserOperationsArray;

class UserOperationsArrayFactory extends AbstractCollectionFactory
{
    protected function getCreatedClass(): string
    {
        return UserOperationsArray::class;
    }

    protected function getItemClass(): string
    {
        return OperationCheckResult::class;
    }
}
