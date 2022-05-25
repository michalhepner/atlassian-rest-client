<?php

declare(strict_types = 1);

namespace MichalHepner\AtlassianRestClient\ConfluenceCloud\Model;

class Message
{
    /**
     * REQUIRED
     * 
     * @var string
     */
    protected $translation;

    /**
     * REQUIRED
     * 
     * @var \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\MessageArgsArray
     */
    protected $args;

    /**
     * @return string
     */
    public function getTranslation()
    {
        return $this->translation;
    }

    /**
     * @param string $translation
     *
     * @return self
     */
    public function setTranslation($translation): self
    {
        $this->translation = $translation;

        return $this;
    }

    /**
     * @return \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\MessageArgsArray
     */
    public function getArgs()
    {
        return $this->args;
    }

    /**
     * @param \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\MessageArgsArray $args
     *
     * @return self
     */
    public function setArgs($args): self
    {
        $this->args = $args;

        return $this;
    }
}
