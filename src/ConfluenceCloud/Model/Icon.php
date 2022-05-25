<?php

declare(strict_types = 1);

namespace MichalHepner\AtlassianRestClient\ConfluenceCloud\Model;

class Icon
{
    /**
     * REQUIRED
     * 
     * @var string
     */
    protected $path;

    /**
     * REQUIRED
     * 
     * @var integer
     */
    protected $width;

    /**
     * REQUIRED
     * 
     * @var integer
     */
    protected $height;

    /**
     * REQUIRED
     * 
     * @var boolean
     */
    protected $isDefault;

    /**
     * @return string
     */
    public function getPath()
    {
        return $this->path;
    }

    /**
     * @param string $path
     *
     * @return self
     */
    public function setPath($path): self
    {
        $this->path = $path;

        return $this;
    }

    /**
     * @return integer
     */
    public function getWidth()
    {
        return $this->width;
    }

    /**
     * @param integer $width
     *
     * @return self
     */
    public function setWidth($width): self
    {
        $this->width = $width;

        return $this;
    }

    /**
     * @return integer
     */
    public function getHeight()
    {
        return $this->height;
    }

    /**
     * @param integer $height
     *
     * @return self
     */
    public function setHeight($height): self
    {
        $this->height = $height;

        return $this;
    }

    /**
     * @return boolean
     */
    public function getIsDefault()
    {
        return $this->isDefault;
    }

    /**
     * @param boolean $isDefault
     *
     * @return self
     */
    public function setIsDefault($isDefault): self
    {
        $this->isDefault = $isDefault;

        return $this;
    }
}
