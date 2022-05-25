<?php

declare(strict_types=1);

namespace MichalHepner\AtlassianRestClient\Document;

class BlockquoteNode extends AbstractNode implements TopLevelNodeInterface, TableCellNodeContentInterface
{
    const TYPE = 'blockquote';

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
            throw new \InvalidArgumentException(sprintf('%s accepts TopLevelNode|TopLevelNodeCollection|TopLevelNode[]', __METHOD__));
        }
    }

    public function addChild(TopLevelNodeInterface $child)
    {
        $child->setParent($this);
        $this->children->add($child);

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
