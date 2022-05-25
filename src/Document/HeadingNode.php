<?php

declare(strict_types=1);

namespace MichalHepner\AtlassianRestClient\Document;

class HeadingNode extends AbstractNode implements TopLevelNodeInterface, TableCellNodeContentInterface
{
    const TYPE = 'heading';

    /**
     * @var int
     */
    protected $level;

    /**
     * @var InlineNodeCollectionAbstract
     */
    protected $children;

    /**
     * @param int                                                                            $level
     * @param InlineNodeInterface|InlineNodeInterface[]|InlineNodeCollectionAbstract|string|string[] $children
     */
    public function __construct(int $level, $children = [])
    {
        $this->level = $level;
        $this->children = new InlineNodeCollectionAbstract();

        if ($children instanceof InlineNodeCollectionAbstract || is_array($children)) {
            foreach ($children as $child) {
                if ($child instanceof InlineNodeCollectionAbstract) {
                    $this->addChild($child);
                } elseif (is_string($child)) {
                    $this->addChild(new TextNode($child));
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

    public function addChild(InlineNodeInterface $node): self
    {
        $node->setParent($this);
        $this->children->add($node);

        return $this;
    }

    public static function createLevel1($children = []): self
    {
        return new self(1, $children);
    }

    public static function createLevel2($children = []): self
    {
        return new self(2, $children);
    }

    public static function createLevel3($children = []): self
    {
        return new self(3, $children);
    }

    public static function createLevel4($children = []): self
    {
        return new self(4, $children);
    }

    public static function createLevel5($children = []): self
    {
        return new self(5, $children);
    }

    public static function createLevel6($children = []): self
    {
        return new self(6, $children);
    }

    public function getType(): string
    {
        return self::TYPE;
    }

    public function toArray(): array
    {
        return [
            'type' => self::TYPE,
            'attrs' => [
                'level' => $this->level,
            ],
            'content' => $this->children->toArray()
        ];
    }
}
