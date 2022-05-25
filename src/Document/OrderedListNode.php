<?php

declare(strict_types=1);

namespace MichalHepner\AtlassianRestClient\Document;

class OrderedListNode extends AbstractNode implements TopLevelNodeInterface, TableCellNodeContentInterface
{
    const TYPE = 'orderedList';

    /**
     * @var ListItemNodeCollectionAbstract
     */
    protected $children;

    /**
     * @param ListItemNode|ListItemNodeCollectionAbstract|ListItemNode[] $children
     */
    public function __construct($children = [])
    {
        $this->children = new ListItemNodeCollectionAbstract();

        if ($children instanceof ListItemNodeCollectionAbstract || is_array($children)) {
            foreach ($children as $child) {
                $this->addChild($child);
            }
        } elseif ($children instanceof ListItemNode) {
            $this->addChild($children);
        } else {
            throw new \InvalidArgumentException();
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
