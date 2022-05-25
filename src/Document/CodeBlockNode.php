<?php

declare(strict_types=1);

namespace MichalHepner\AtlassianRestClient\Document;

class CodeBlockNode extends AbstractNode implements TopLevelNodeInterface, TableCellNodeContentInterface
{
    const TYPE = 'codeBlock';

    /**
     * @var TextNode
     */
    protected $text;

    /**
     * @var string
     */
    protected $language;

    /**
     * @param string|TextNode $text
     * @param string          $language
     */
    public function __construct($text, string $language = 'text')
    {
        if (is_string($text)) {
            $text = new TextNode($text);
        } elseif (!$text instanceof TextNode) {
            throw new \InvalidArgumentException();
        }

        $text->setParent($this);
        $this->text = $text;
        $this->language = $language;
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
                'language' => $this->language,
            ],
            'content' => [
                $this->text->toArray(),
            ],
        ];
    }
}
