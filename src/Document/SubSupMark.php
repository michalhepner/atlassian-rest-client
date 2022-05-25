<?php

declare(strict_types=1);

namespace MichalHepner\AtlassianRestClient\Document;

class SubSupMark extends AbstractMark
{
    const TYPE = 'subsup';
    const TYPE_SUB = 'sub';
    const TYPE_SUP = 'sup';

    /**
     * @var string
     */
    protected $type;

    public function __construct(string $type)
    {
        $this->type = $type;
    }

    public static function createSub(): self
    {
        return new self(self::TYPE_SUB);
    }

    public static function createSup(): self
    {
        return new self(self::TYPE_SUP);
    }

    public function getType(): string
    {
        return self::TYPE;
    }

    public function toArray(): array
    {
        return [
            'type' => self::TYPE,
        ];
    }
}
