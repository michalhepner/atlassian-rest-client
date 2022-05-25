<?php

declare(strict_types = 1);

namespace MichalHepner\AtlassianRestClient\ConfluenceCloud\Factory;

use MichalHepner\AtlassianRestClient\Factory\AbstractCollectionFactory;
use MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\MessageArgsArrayItemsObject;
use MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\MessageArgsArray;

class MessageArgsArrayFactory extends AbstractCollectionFactory
{
    protected function getCreatedClass(): string
    {
        return MessageArgsArray::class;
    }

    protected function getItemClass(): string
    {
        return MessageArgsArrayItemsObject::class;
    }
}
