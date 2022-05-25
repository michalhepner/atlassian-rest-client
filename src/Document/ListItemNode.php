<?php

declare(strict_types=1);

namespace MichalHepner\AtlassianRestClient\Document;

class ListItemNode extends AbstractNode
{
    const TYPE = 'listItem';

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

    public function addChild(TopLevelNodeInterface $node)
    {
        $node->setParent($this);
        $this->children->add($node);

        return $this;
    }

    public function toArray(): array
    {
        return [
            'type' => self::TYPE,
            'content' => $this->children->toArray(),
        ];
    }

    public function getType(): string
    {
        return self::TYPE;
    }
}
