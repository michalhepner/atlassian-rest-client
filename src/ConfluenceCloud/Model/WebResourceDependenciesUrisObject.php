<?php

declare(strict_types = 1);

namespace MichalHepner\AtlassianRestClient\ConfluenceCloud\Model;

class WebResourceDependenciesUrisObject
{
    /**
     * @var string
     */
    protected $all;

    /**
     * @var string
     */
    protected $css;

    /**
     * @var string
     */
    protected $js;

    /**
     * @return string
     */
    public function getAll()
    {
        return $this->all;
    }

    /**
     * @param string $all
     *
     * @return self
     */
    public function setAll($all): self
    {
        $this->all = $all;

        return $this;
    }

    /**
     * @return string
     */
    public function getCss()
    {
        return $this->css;
    }

    /**
     * @param string $css
     *
     * @return self
     */
    public function setCss($css): self
    {
        $this->css = $css;

        return $this;
    }

    /**
     * @return string
     */
    public function getJs()
    {
        return $this->js;
    }

    /**
     * @param string $js
     *
     * @return self
     */
    public function setJs($js): self
    {
        $this->js = $js;

        return $this;
    }
}
