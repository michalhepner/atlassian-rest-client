<?php

declare(strict_types = 1);

namespace MichalHepner\AtlassianRestClient\Document;

class ParagraphNode extends AbstractNode implements TopLevelNodeInterface, PanelNodeContentInterface, TableCellNodeContentInterface
{
    const TYPE = 'paragraph';

    /**
     * @var InlineNodeCollectionAbstract
     */
    protected $children;

    /**
     * @param InlineNodeInterface|InlineNodeInterface[]|InlineNodeCollectionAbstract|string|string[] $children
     */
    public function __construct($children = [])
    {
        $this->children = new InlineNodeCollectionAbstract();

        if ($children instanceof InlineNodeCollectionAbstract || is_array($children)) {
            foreach ($children as $child) {
                if ($child instanceof InlineNodeInterface) {
                    $this->addChild($child);
                } elseif (is_string($child)) {
                    $this->addChild(new TextNode($child));
                } else {
                    throw new \InvalidArgumentException();
                }
            }
        } elseif ($children instanceof InlineNodeInterface) {
            $this->addChild($children);
        } elseif (is_string($children)) {
            $this->addChild(new TextNode($children));
        } else {
            throw new \InvalidArgumentException();
        }
    }

    public function addChild(InlineNodeInterface $child): self
    {
        $child->setParent($this);
        $this->children->add($child);

        return $this;
    }

    public function getType(): string
    {
        return self::TYPE;
    }

    public function toArray(): array
    {
        return [
            'type' => self::TYPE,
            'content' => $this->children->toArray(),
        ];
    }
}
