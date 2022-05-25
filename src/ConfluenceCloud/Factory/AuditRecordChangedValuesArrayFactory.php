<?php

declare(strict_types = 1);

namespace MichalHepner\AtlassianRestClient\ConfluenceCloud\Factory;

use MichalHepner\AtlassianRestClient\Factory\AbstractCollectionFactory;
use MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\ChangedValue;
use MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\AuditRecordChangedValuesArray;

class AuditRecordChangedValuesArrayFactory extends AbstractCollectionFactory
{
    protected function getCreatedClass(): string
    {
        return AuditRecordChangedValuesArray::class;
    }

    protected function getItemClass(): string
    {
        return ChangedValue::class;
    }
}
