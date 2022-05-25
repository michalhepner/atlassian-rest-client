<?php

declare(strict_types = 1);

namespace MichalHepner\AtlassianRestClient\ConfluenceCloud\Model;

class ContainerLookAndFeel
{
    /**
     * REQUIRED
     * 
     * @var string
     */
    protected $background;

    /**
     * REQUIRED
     * 
     * @var string
     */
    protected $backgroundColor;

    /**
     * REQUIRED
     * 
     * @var string
     */
    protected $backgroundImage;

    /**
     * REQUIRED
     * 
     * @var string
     */
    protected $backgroundSize;

    /**
     * REQUIRED
     * 
     * @var string
     */
    protected $padding;

    /**
     * REQUIRED
     * 
     * @var string
     */
    protected $borderRadius;

    /**
     * @return string
     */
    public function getBackground()
    {
        return $this->background;
    }

    /**
     * @param string $background
     *
     * @return self
     */
    public function setBackground($background): self
    {
        $this->background = $background;

        return $this;
    }

    /**
     * @return string
     */
    public function getBackgroundColor()
    {
        return $this->backgroundColor;
    }

    /**
     * @param string $backgroundColor
     *
     * @return self
     */
    public function setBackgroundColor($backgroundColor): self
    {
        $this->backgroundColor = $backgroundColor;

        return $this;
    }

    /**
     * @return string
     */
    public function getBackgroundImage()
    {
        return $this->backgroundImage;
    }

    /**
     * @param string $backgroundImage
     *
     * @return self
     */
    public function setBackgroundImage($backgroundImage): self
    {
        $this->backgroundImage = $backgroundImage;

        return $this;
    }

    /**
     * @return string
     */
    public function getBackgroundSize()
    {
        return $this->backgroundSize;
    }

    /**
     * @param string $backgroundSize
     *
     * @return self
     */
    public function setBackgroundSize($backgroundSize): self
    {
        $this->backgroundSize = $backgroundSize;

        return $this;
    }

    /**
     * @return string
     */
    public function getPadding()
    {
        return $this->padding;
    }

    /**
     * @param string $padding
     *
     * @return self
     */
    public function setPadding($padding): self
    {
        $this->padding = $padding;

        return $this;
    }

    /**
     * @return string
     */
    public function getBorderRadius()
    {
        return $this->borderRadius;
    }

    /**
     * @param string $borderRadius
     *
     * @return self
     */
    public function setBorderRadius($borderRadius): self
    {
        $this->borderRadius = $borderRadius;

        return $this;
    }
}
