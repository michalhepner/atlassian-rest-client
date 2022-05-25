<?php

declare(strict_types=1);

namespace MichalHepner\AtlassianRestClient\Document;

class TextColorMark extends AbstractMark
{
    const TYPE = 'textColor';

    /**
     * @var string
     */
    protected $color;

    public function __construct(string $color)
    {
        $this->color = $color;
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
                'color' => $this->color,
            ],
        ];
    }
}
