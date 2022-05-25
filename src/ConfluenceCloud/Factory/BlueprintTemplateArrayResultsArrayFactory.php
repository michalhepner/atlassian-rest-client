<?php

declare(strict_types = 1);

namespace MichalHepner\AtlassianRestClient\ConfluenceCloud\Factory;

use MichalHepner\AtlassianRestClient\Factory\AbstractCollectionFactory;
use MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\BlueprintTemplate;
use MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\BlueprintTemplateArrayResultsArray;

class BlueprintTemplateArrayResultsArrayFactory extends AbstractCollectionFactory
{
    protected function getCreatedClass(): string
    {
        return BlueprintTemplateArrayResultsArray::class;
    }

    protected function getItemClass(): string
    {
        return BlueprintTemplate::class;
    }
}
