<?php

declare(strict_types = 1);

namespace MichalHepner\AtlassianRestClient\ConfluenceCloud\Model;

class UserWatch
{
    /**
     * REQUIRED
     * 
     * @var boolean
     */
    protected $watching;

    /**
     * @return boolean
     */
    public function getWatching()
    {
        return $this->watching;
    }

    /**
     * @param boolean $watching
     *
     * @return self
     */
    public function setWatching($watching): self
    {
        $this->watching = $watching;

        return $this;
    }
}
