<?php

declare(strict_types = 1);

namespace MichalHepner\AtlassianRestClient\ConfluenceCloud\Model;

class ContentMetadataCurrentuserObjectLastmodifiedObject
{
    /**
     * @var \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\Version
     */
    protected $version;

    /**
     * @var string
     */
    protected $friendlyLastModified;

    /**
     * @return \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\Version
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * @param \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\Version $version
     *
     * @return self
     */
    public function setVersion($version): self
    {
        $this->version = $version;

        return $this;
    }

    /**
     * @return string
     */
    public function getFriendlyLastModified()
    {
        return $this->friendlyLastModified;
    }

    /**
     * @param string $friendlyLastModified
     *
     * @return self
     */
    public function setFriendlyLastModified($friendlyLastModified): self
    {
        $this->friendlyLastModified = $friendlyLastModified;

        return $this;
    }
}
