<?php

declare(strict_types = 1);

namespace MichalHepner\AtlassianRestClient\ConfluenceCloud\Factory;

use MichalHepner\AtlassianRestClient\Factory\AbstractCollectionFactory;
use MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\Label;
use MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\ContentTemplateCreateLabelsArray;

class ContentTemplateCreateLabelsArrayFactory extends AbstractCollectionFactory
{
    protected function getCreatedClass(): string
    {
        return ContentTemplateCreateLabelsArray::class;
    }

    protected function getItemClass(): string
    {
        return Label::class;
    }
}
