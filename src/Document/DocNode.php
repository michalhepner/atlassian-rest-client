<?php

declare(strict_types=1);

namespace MichalHepner\AtlassianRestClient\Document;

class DocNode extends AbstractNode
{
    const TYPE = 'doc';
    const VERSION = 1;

    /**
     * @var TopLevelNodeCollectionAbstract
     */
    protected $children;

    /**
     * @param TopLevelNodeInterface|TopLevelNodeCollectionAbstract|TopLevelNodeInterface[] $childOrChildren
     */
    public function __construct($childOrChildren = [])
    {
        $this->children = new TopLevelNodeCollectionAbstract();

        if ($childOrChildren instanceof TopLevelNodeCollectionAbstract || is_array($childOrChildren)) {
            foreach ($childOrChildren as $child) {
                $this->addChild($child);
            }
        } elseif ($childOrChildren instanceof TopLevelNodeInterface) {
            $this->addChild($childOrChildren);
        } else {
            throw new \InvalidArgumentException();
        }
    }

    /**
     * @param TopLevelNodeInterface|TopLevelNodeCollectionAbstract|TopLevelNodeInterface[] $childOrChildren
     *
     * @return self
     */
    public static function create($childOrChildren = []): self
    {
        return new self($childOrChildren);
    }

    public function toArray(): array
    {
        return [
            'version' => self::VERSION,
            'type' => self::TYPE,
            'content' => $this->children->toArray(),
        ];
    }

    public function addChild(TopLevelNodeInterface $child): self
    {
        $child->setParent($this);
        $this->children->add($child);

        return $this;
    }

    public function getType(): string
    {
        return self::TYPE;
    }
}
