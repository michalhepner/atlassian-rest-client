<?php

declare(strict_types = 1);

namespace MichalHepner\AtlassianRestClient\ConfluenceCloud\Factory;

use MichalHepner\AtlassianRestClient\Factory\AbstractCollectionFactory;
use MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\AuditRecord;
use MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\AuditRecordArrayResultsArray;

class AuditRecordArrayResultsArrayFactory extends AbstractCollectionFactory
{
    protected function getCreatedClass(): string
    {
        return AuditRecordArrayResultsArray::class;
    }

    protected function getItemClass(): string
    {
        return AuditRecord::class;
    }
}
