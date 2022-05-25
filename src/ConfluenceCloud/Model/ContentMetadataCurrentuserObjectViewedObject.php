<?php

declare(strict_types = 1);

namespace MichalHepner\AtlassianRestClient\ConfluenceCloud\Model;

class ContentMetadataCurrentuserObjectViewedObject
{
    /**
     * @var string
     */
    protected $lastSeen;

    /**
     * @var string
     */
    protected $friendlyLastSeen;

    /**
     * @return string
     */
    public function getLastSeen()
    {
        return $this->lastSeen;
    }

    /**
     * @param string $lastSeen
     *
     * @return self
     */
    public function setLastSeen($lastSeen): self
    {
        $this->lastSeen = $lastSeen;

        return $this;
    }

    /**
     * @return string
     */
    public function getFriendlyLastSeen()
    {
        return $this->friendlyLastSeen;
    }

    /**
     * @param string $friendlyLastSeen
     *
     * @return self
     */
    public function setFriendlyLastSeen($friendlyLastSeen): self
    {
        $this->friendlyLastSeen = $friendlyLastSeen;

        return $this;
    }
}
