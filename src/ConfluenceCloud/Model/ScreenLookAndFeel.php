<?php

declare(strict_types = 1);

namespace MichalHepner\AtlassianRestClient\ConfluenceCloud\Model;

class ScreenLookAndFeel
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
    protected $gutterTop;

    /**
     * REQUIRED
     * 
     * @var string
     */
    protected $gutterRight;

    /**
     * REQUIRED
     * 
     * @var string
     */
    protected $gutterBottom;

    /**
     * REQUIRED
     * 
     * @var string
     */
    protected $gutterLeft;

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
    public function getGutterTop()
    {
        return $this->gutterTop;
    }

    /**
     * @param string $gutterTop
     *
     * @return self
     */
    public function setGutterTop($gutterTop): self
    {
        $this->gutterTop = $gutterTop;

        return $this;
    }

    /**
     * @return string
     */
    public function getGutterRight()
    {
        return $this->gutterRight;
    }

    /**
     * @param string $gutterRight
     *
     * @return self
     */
    public function setGutterRight($gutterRight): self
    {
        $this->gutterRight = $gutterRight;

        return $this;
    }

    /**
     * @return string
     */
    public function getGutterBottom()
    {
        return $this->gutterBottom;
    }

    /**
     * @param string $gutterBottom
     *
     * @return self
     */
    public function setGutterBottom($gutterBottom): self
    {
        $this->gutterBottom = $gutterBottom;

        return $this;
    }

    /**
     * @return string
     */
    public function getGutterLeft()
    {
        return $this->gutterLeft;
    }

    /**
     * @param string $gutterLeft
     *
     * @return self
     */
    public function setGutterLeft($gutterLeft): self
    {
        $this->gutterLeft = $gutterLeft;

        return $this;
    }
}
