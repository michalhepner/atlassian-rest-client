<?php

declare(strict_types = 1);

namespace MichalHepner\AtlassianRestClient\ConfluenceCloud\Factory;

use MichalHepner\AtlassianRestClient\Factory\AbstractCollectionFactory;
use MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\AffectedObject;
use MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\AuditRecordCreateAssociatedObjectsArray;

class AuditRecordCreateAssociatedObjectsArrayFactory extends AbstractCollectionFactory
{
    protected function getCreatedClass(): string
    {
        return AuditRecordCreateAssociatedObjectsArray::class;
    }

    protected function getItemClass(): string
    {
        return AffectedObject::class;
    }
}
