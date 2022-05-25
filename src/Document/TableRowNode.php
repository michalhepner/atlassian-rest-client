<?php

declare(strict_types=1);

namespace MichalHepner\AtlassianRestClient\Document;

class TableRowNode extends AbstractNode
{
    const TYPE = 'tableRow';

    /**
     * @var TableRowNodeContentCollectionAbstract
     */
    protected $children;

    /**
     * @param TableRowNodeContentCollectionAbstract|TableRowNodeContentInterface|TableRowNodeContentInterface[] $children
     */
    public function __construct($children = [])
    {
        $this->children = new TableRowNodeContentCollectionAbstract();

        if ($children instanceof TableRowNodeContentCollectionAbstract || is_array($children)) {
            foreach ($children as $child) {
                $this->addChild($child);
            }
        } elseif ($children instanceof TableRowNodeContentInterface) {
            $this->addChild($children);
        } else {
            throw new \InvalidArgumentException();
        }
    }

    public function addChild(TableRowNodeContentInterface $node): self
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
