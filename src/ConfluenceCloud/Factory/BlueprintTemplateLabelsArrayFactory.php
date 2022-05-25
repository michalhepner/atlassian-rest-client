<?php

declare(strict_types = 1);

namespace MichalHepner\AtlassianRestClient\ConfluenceCloud\Factory;

use MichalHepner\AtlassianRestClient\Factory\AbstractCollectionFactory;
use MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\Label;
use MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\BlueprintTemplateLabelsArray;

class BlueprintTemplateLabelsArrayFactory extends AbstractCollectionFactory
{
    protected function getCreatedClass(): string
    {
        return BlueprintTemplateLabelsArray::class;
    }

    protected function getItemClass(): string
    {
        return Label::class;
    }
}
