<?php

declare(strict_types = 1);

namespace MichalHepner\AtlassianRestClient\ConfluenceCloud\Factory;

use MichalHepner\AtlassianRestClient\Factory\AbstractCollectionFactory;
use MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\LabelCreate;
use MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\LabelCreateArray;

class LabelCreateArrayFactory extends AbstractCollectionFactory
{
    protected function getCreatedClass(): string
    {
        return LabelCreateArray::class;
    }

    protected function getItemClass(): string
    {
        return LabelCreate::class;
    }
}
