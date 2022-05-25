<?php

declare(strict_types = 1);

namespace MichalHepner\AtlassianRestClient\ConfluenceCloud\Factory;

use MichalHepner\AtlassianRestClient\Factory\AbstractCollectionFactory;
use MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\AffectedObject;
use MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\AuditRecordAssociatedObjectsArray;

class AuditRecordAssociatedObjectsArrayFactory extends AbstractCollectionFactory
{
    protected function getCreatedClass(): string
    {
        return AuditRecordAssociatedObjectsArray::class;
    }

    protected function getItemClass(): string
    {
        return AffectedObject::class;
    }
}
