<?php

declare(strict_types = 1);

namespace MichalHepner\AtlassianRestClient\ConfluenceCloud\Factory;

use MichalHepner\AtlassianRestClient\Factory\AbstractCollectionFactory;
use MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\Label;
use MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\ContentTemplateUpdateLabelsArray;

class ContentTemplateUpdateLabelsArrayFactory extends AbstractCollectionFactory
{
    protected function getCreatedClass(): string
    {
        return ContentTemplateUpdateLabelsArray::class;
    }

    protected function getItemClass(): string
    {
        return Label::class;
    }
}
