<?php

declare(strict_types = 1);

namespace MichalHepner\AtlassianRestClient\ConfluenceCloud\Model;

class LongTaskStatusNameObject
{
    /**
     * REQUIRED
     *
     * @var string
     */
    protected $key;

    /**
     * REQUIRED
     *
     * @var \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\LongTaskStatusNameAbstractObjectArgsArray
     */
    protected $args;

    /**
     * @return string
     */
    public function getKey()
    {
        return $this->key;
    }

    /**
     * @param string $key
     *
     * @return self
     */
    public function setKey($key): self
    {
        $this->key = $key;

        return $this;
    }

    /**
     * @return \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\LongTaskStatusNameAbstractObjectArgsArray
     */
    public function getArgs()
    {
        return $this->args;
    }

    /**
     * @param \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\LongTaskStatusNameAbstractObjectArgsArray $args
     *
     * @return self
     */
    public function setArgs($args): self
    {
        $this->args = $args;

        return $this;
    }
}
