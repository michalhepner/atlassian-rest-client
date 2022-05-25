<?php

declare(strict_types = 1);

namespace MichalHepner\AtlassianRestClient\ConfluenceCloud\Model;

class CopyPageHierarchyTitleOptions
{
    /**
     * @var string
     */
    protected $prefix;

    /**
     * @var string
     */
    protected $replace;

    /**
     * @var string
     */
    protected $search;

    /**
     * @return string
     */
    public function getPrefix()
    {
        return $this->prefix;
    }

    /**
     * @param string $prefix
     *
     * @return self
     */
    public function setPrefix($prefix): self
    {
        $this->prefix = $prefix;

        return $this;
    }

    /**
     * @return string
     */
    public function getReplace()
    {
        return $this->replace;
    }

    /**
     * @param string $replace
     *
     * @return self
     */
    public function setReplace($replace): self
    {
        $this->replace = $replace;

        return $this;
    }

    /**
     * @return string
     */
    public function getSearch()
    {
        return $this->search;
    }

    /**
     * @param string $search
     *
     * @return self
     */
    public function setSearch($search): self
    {
        $this->search = $search;

        return $this;
    }
}
