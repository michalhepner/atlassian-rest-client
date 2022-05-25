<?php

declare(strict_types=1);

namespace MichalHepner\AtlassianRestClient\Document;

use MichalHepner\Collection\AbstractObjectCollection;

class MarkCollectionAbstract extends AbstractObjectCollection
{
    public function __construct(array $items = [])
    {
        parent::__construct($items, MarkInterface::class);
    }

    public function toArray(): array
    {
        return array_values($this->map(function (MarkInterface $mark) {
            return $mark->toArray();
        }));
    }

    public function hasInstanceof(string $class): bool
    {
        return $this->some(function (MarkInterface $mark) use ($class) {
            return $mark instanceof $class;
        });
    }

    public function removeInstanceof(string $class): self
    {
        foreach ($this->items as $key => $value) {
            if ($value instanceof $class) {
                unset($this->items[$key]);
            }
        }

        return $this;
    }
}
