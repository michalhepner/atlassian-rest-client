<?php

declare(strict_types = 1);

namespace MichalHepner\AtlassianRestClient\Document;

class TableNode extends AbstractNode implements TopLevelNodeInterface
{
    const TYPE = 'table';

    const LAYOUT_DEFAULT = 'default';
    const LAYOUT_FULL_WIDTH = 'full-width';
    const LAYOUT_WIDE = 'wide';

    /**
     * @var TableRowNodeCollectionAbstract
     */
    protected $children;

    /**
     * @var string
     */
    protected $layout = self::LAYOUT_DEFAULT;

    /**
     * @param TableRowNodeCollectionAbstract|TableRowNode|TableRowNode[] $children
     */
    public function __construct($children = [])
    {
        $this->children = new TableRowNodeCollectionAbstract();

        if ($children instanceof TableRowNodeCollectionAbstract || is_array($children)) {
            foreach ($children as $child) {
                $this->addChild($child);
            }
        } elseif ($children instanceof TableRowNode) {
            $this->addChild($children);
        } else {
            throw new \InvalidArgumentException();
        }
    }

    public function addChild(TableRowNode $node): self
    {
        $node->setParent($this);
        $this->children->add($node);

        return $this;
    }

    /**
     * @return string
     */
    public function getLayout(): string
    {
        return $this->layout;
    }

    /**
     * @param string $layout
     *
     * @return TableNode
     */
    public function setLayout(string $layout): TableNode
    {
        $this->layout = $layout;

        return $this;
    }

    public function getType(): string
    {
        return self::TYPE;
    }

    public function toArray(): array
    {
        $data = [
            'type' => self::TYPE,
            'content' => $this->children->toArray(),
        ];

        !empty($this->layout) && $data['attrs'] = ['layout' => $this->layout];

        return $data;
    }
}
