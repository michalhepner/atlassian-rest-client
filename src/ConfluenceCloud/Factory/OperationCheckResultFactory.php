<?php

declare(strict_types = 1);

namespace MichalHepner\AtlassianRestClient\ConfluenceCloud\Factory;

use MichalHepner\AtlassianRestClient\Factory\AbstractModelFactory;
use MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\OperationCheckResult;

class OperationCheckResultFactory extends AbstractModelFactory
{
    protected function getCreatedClass(): string
    {
        return OperationCheckResult::class;
    }
}
