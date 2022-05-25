<?php

declare(strict_types = 1);

namespace MichalHepner\AtlassianRestClient\ConfluenceCloud\Model;

class ContentBodyEmbeddedContentArray extends \MichalHepner\Collection\AbstractObjectCollection
{
    public function __construct(array $items = [])
    {
        parent::__construct($items, EmbeddedContent::class);
    }
}
