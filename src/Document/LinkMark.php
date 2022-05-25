<?php

declare(strict_types=1);

namespace MichalHepner\AtlassianRestClient\Document;

class LinkMark extends AbstractMark
{
    const TYPE = 'link';

    /**
     * @var string
     */
    protected $href;

    public function __construct(string $href)
    {
        $this->href = $href;
    }

    public function getType(): string
    {
        return self::TYPE;
    }

    public function toArray(): array
    {
        return [
            'type' => self::TYPE,
            'attrs' => [
                'href' => $this->href,
            ]
        ];
    }
}
