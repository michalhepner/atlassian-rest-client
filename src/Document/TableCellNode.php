<?php

declare(strict_types=1);

namespace MichalHepner\AtlassianRestClient\Document;

class TableCellNode extends AbstractNode implements TableRowNodeContentInterface
{
    const TYPE = 'tableCell';

    /**
     * @var TableCellNodeContentCollectionAbstract
     */
    protected $children;

    /**
     * @var string|null
     */
    protected $background;

    /**
     * @var int
     */
    protected $colspan = 1;

    /**
     * @var int
     */
    protected $rowspan = 1;

    /**
     * @param TableCellNodeContentCollectionAbstract|TableCellNodeContentInterface|TableCellNodeContentInterface[] $children
     */
    public function __construct($children = [])
    {
        $this->children = new TableCellNodeContentCollectionAbstract();

        if ($children instanceof TableCellNodeContentCollectionAbstract || is_array($children)) {
            foreach ($children as $child) {
                $this->addChild($child);
            }
        } elseif ($children instanceof TableCellNodeContentInterface) {
            $this->addChild($children);
        } else {
            throw new \InvalidArgumentException();
        }
    }

    public function addChild(TableCellNodeContentInterface $node): self
    {
        $node->setParent($this);
        $this->children->add($node);

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
            'attrs' => [],
        ];


        !empty($this->background) && $data['attrs']['background'] = $this->background;
        !empty($this->colspan) && $data['attrs']['colspan'] = $this->colspan;
        !empty($this->rowspan) && $data['attrs']['rowspan'] = $this->rowspan;

        return $data;
    }
}
