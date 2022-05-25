<?php

declare(strict_types = 1);

namespace MichalHepner\AtlassianRestClient\Document;

class TextNode extends AbstractNode implements InlineNodeInterface
{
    const TYPE = 'text';

    /**
     * @var string
     */
    protected $text;

    /**
     * @var MarkCollectionAbstract
     */
    protected $marks;

    /**
     * @param string                                       $text
     * @param MarkCollectionAbstract|MarkInterface|MarkInterface[] $marks
     */
    public function __construct(string $text, $marks = [])
    {
        $this->text = $text;
        $this->marks = new MarkCollectionAbstract();

        if (is_array($marks) || $marks instanceof MarkCollectionAbstract) {
            foreach ($marks as $mark) {
                $this->addMark($mark);
            }
        } elseif ($marks instanceof MarkInterface) {
            $this->addMark($marks);
        } else {
            throw new \InvalidArgumentException();
        }
    }

    /**
     * @param string                                       $text
     * @param MarkCollectionAbstract|MarkInterface|MarkInterface[] $marks
     *
     * @return self
     */
    public static function create(string $text, $marks = []): self
    {
        return new self($text, $marks);
    }

    public function getMarks(): MarkCollectionAbstract
    {
        return $this->marks;
    }

    public function addMark(MarkInterface $mark): self
    {
        $mark->setParent($this);
        $this->marks->add($mark);

        return $this;
    }

    public function setStrong(): self
    {
        $this->marks->hasInstanceof(StrongMark::class) && $this->marks->add(new StrongMark());

        return $this;
    }

    public function unsetStrong(): self
    {
        $this->marks->hasInstanceof(StrongMark::class) && $this->marks->removeInstanceof(StrongMark::class);

        return $this;
    }

    public function setLink(string $href): self
    {
        $this->unsetLink();
        $this->marks->add(new LinkMark($href));

        return $this;
    }

    public function unsetLink(): self
    {
        $this->marks->hasInstanceof(LinkMark::class) && $this->marks->removeInstanceof(LinkMark::class);

        return $this;
    }

    public function toArray(): array
    {
        $data = [
            'type' => self::TYPE,
            'text' => $this->text,
        ];

        !$this->marks->isEmpty() && $data['marks'] = $this->marks->toArray();

        return $data;
    }

    public function __toString()
    {
        return $this->text;
    }

    public function getType(): string
    {
        return self::TYPE;
    }
}
