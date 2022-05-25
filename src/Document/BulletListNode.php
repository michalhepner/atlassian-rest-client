<?php

declare(strict_types=1);

namespace MichalHepner\AtlassianRestClient\Document;

class BulletListNode extends AbstractNode implements TopLevelNodeInterface, TableCellNodeContentInterface
{
    const TYPE = 'bulletList';

    /**
     * @var ListItemNodeCollectionAbstract
     */
    protected $children;

    /**
     * @param ListItemNode|ListItemNodeCollectionAbstract|ListItemNode[] $childOrChildren
     */
    public function __construct($childOrChildren = [])
    {
        $this->children = new ListItemNodeCollectionAbstract();

        if ($childOrChildren instanceof ListItemNodeCollectionAbstract || is_array($childOrChildren)) {
            foreach ($childOrChildren as $child) {
                $this->addChild($child);
            }
        } elseif ($childOrChildren instanceof ListItemNode) {
            $this->addChild($childOrChildren);
        } else {
            throw new \InvalidArgumentException(sprintf('%s accepts ListItemNode|ListItemNodeCollection|ListItemNode[]', __METHOD__));
        }
    }

    public function addChild(ListItemNode $child)
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
