<?php

declare(strict_types = 1);

namespace MichalHepner\AtlassianRestClient\ConfluenceCloud\Factory;

use MichalHepner\AtlassianRestClient\Factory\AbstractCollectionFactory;
use MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\Message;
use MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\LongTaskStatusMessagesArray;

class LongTaskStatusMessagesArrayFactory extends AbstractCollectionFactory
{
    protected function getCreatedClass(): string
    {
        return LongTaskStatusMessagesArray::class;
    }

    protected function getItemClass(): string
    {
        return Message::class;
    }
}
