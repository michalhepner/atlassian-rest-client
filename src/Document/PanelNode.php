<?php

declare(strict_types=1);

namespace MichalHepner\AtlassianRestClient\Document;

class PanelNode extends AbstractNode implements TopLevelNodeInterface, TableCellNodeContentInterface
{
    const TYPE = 'panel';

    const PANEL_TYPE_INFO = 'info';
    const PANEL_TYPE_NOTE = 'note';
    const PANEL_TYPE_WARNING = 'warning';
    const PANEL_TYPE_SUCCESS = 'success';
    const PANEL_TYPE_ERROR = 'error';

    /**
     * @var string
     */
    protected $panelType;

    /**
     * @var PanelNodeContentCollectionAbstract
     */
    protected $children;

    /**
     * @param string                                                                           $panelType
     * @param PanelNodeContentInterface|PanelNodeContentCollectionAbstract|PanelNodeContentInterface[] $children
     */
    public function __construct($panelType, $children = [])
    {
        $this->panelType = $panelType;
        $this->children = new PanelNodeContentCollectionAbstract();

        if ($children instanceof PanelNodeContentCollectionAbstract || is_array($children)) {
            foreach ($children as $child) {
                $this->addChild($child);
            }
        } elseif ($children instanceof PanelNodeContentInterface) {
            $this->addChild($children);
        } else {
            throw new \InvalidArgumentException();
        }
    }

    /**
     * @param PanelNodeContentInterface|PanelNodeContentCollectionAbstract|PanelNodeContentInterface[] $children
     *
     * @return self
     */
    public static function createInfo($children = []): self
    {
        return new self(self::PANEL_TYPE_INFO, $children);
    }

    /**
     * @param PanelNodeContentInterface|PanelNodeContentCollectionAbstract|PanelNodeContentInterface[] $children
     *
     * @return self
     */
    public static function createNote($children = []): self
    {
        return new self(self::PANEL_TYPE_NOTE, $children);
    }

    /**
     * @param PanelNodeContentInterface|PanelNodeContentCollectionAbstract|PanelNodeContentInterface[] $children
     *
     * @return self
     */
    public static function createWarning($children = []): self
    {
        return new self(self::PANEL_TYPE_WARNING, $children);
    }

    /**
     * @param PanelNodeContentInterface|PanelNodeContentCollectionAbstract|PanelNodeContentInterface[] $children
     *
     * @return self
     */
    public static function createSuccess($children = []): self
    {
        return new self(self::PANEL_TYPE_SUCCESS, $children);
    }

    /**
     * @param PanelNodeContentInterface|PanelNodeContentCollectionAbstract|PanelNodeContentInterface[] $children
     *
     * @return self
     */
    public static function createError($children = []): self
    {
        return new self(self::PANEL_TYPE_ERROR, $children);
    }

    public function addChild(PanelNodeContentInterface $child)
    {
        $child->setParent($this);
        $this->children->add($child);

        return $this;
    }

    public function toArray(): array
    {
        return [
            'type' => self::TYPE,
            'attrs' => [
                'panelType' => $this->panelType
            ],
            'content' => $this->children->toArray(),
        ];
    }

    public function getType(): string
    {
        return self::TYPE;
    }
}
