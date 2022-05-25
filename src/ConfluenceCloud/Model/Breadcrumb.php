<?php

declare(strict_types = 1);

namespace MichalHepner\AtlassianRestClient\ConfluenceCloud\Model;

class Breadcrumb
{
    /**
     * REQUIRED
     * 
     * @var string
     */
    protected $label;

    /**
     * REQUIRED
     * 
     * @var string
     */
    protected $url;

    /**
     * REQUIRED
     * 
     * @var string
     */
    protected $separator;

    /**
     * @return string
     */
    public function getLabel()
    {
        return $this->label;
    }

    /**
     * @param string $label
     *
     * @return self
     */
    public function setLabel($label): self
    {
        $this->label = $label;

        return $this;
    }

    /**
     * @return string
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * @param string $url
     *
     * @return self
     */
    public function setUrl($url): self
    {
        $this->url = $url;

        return $this;
    }

    /**
     * @return string
     */
    public function getSeparator()
    {
        return $this->separator;
    }

    /**
     * @param string $separator
     *
     * @return self
     */
    public function setSeparator($separator): self
    {
        $this->separator = $separator;

        return $this;
    }
}
