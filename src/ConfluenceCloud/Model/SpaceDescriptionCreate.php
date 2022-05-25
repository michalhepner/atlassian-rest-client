<?php

declare(strict_types = 1);

namespace MichalHepner\AtlassianRestClient\ConfluenceCloud\Model;

class SpaceDescriptionCreate
{
    /**
     * REQUIRED
     * 
     * @var \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\SpaceDescriptionCreatePlainObject
     */
    protected $plain;

    /**
     * @return \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\SpaceDescriptionCreatePlainObject
     */
    public function getPlain()
    {
        return $this->plain;
    }

    /**
     * @param \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\SpaceDescriptionCreatePlainObject $plain
     *
     * @return self
     */
    public function setPlain($plain): self
    {
        $this->plain = $plain;

        return $this;
    }
}
