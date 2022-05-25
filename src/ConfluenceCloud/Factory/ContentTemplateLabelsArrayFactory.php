<?php

declare(strict_types = 1);

namespace MichalHepner\AtlassianRestClient\ConfluenceCloud\Factory;

use MichalHepner\AtlassianRestClient\Factory\AbstractCollectionFactory;
use MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\Label;
use MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\ContentTemplateLabelsArray;

class ContentTemplateLabelsArrayFactory extends AbstractCollectionFactory
{
    protected function getCreatedClass(): string
    {
        return ContentTemplateLabelsArray::class;
    }

    protected function getItemClass(): string
    {
        return Label::class;
    }
}
