<?php

declare(strict_types = 1);

namespace MichalHepner\AtlassianRestClient\ConfluenceCloud\Model;

class SpacePropertyUpdate
{
    /**
     * The value of the property.
     * 
     * REQUIRED
     * 
     * @var \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\SpacePropertyUpdateValueObject
     */
    protected $value;

    /**
     * The version number of the property.
     * 
     * REQUIRED
     * 
     * @var \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\SpacePropertyUpdateVersionObject
     */
    protected $version;

    /**
     * @return \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\SpacePropertyUpdateValueObject
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * @param \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\SpacePropertyUpdateValueObject $value
     *
     * @return self
     */
    public function setValue($value): self
    {
        $this->value = $value;

        return $this;
    }

    /**
     * @return \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\SpacePropertyUpdateVersionObject
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * @param \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\SpacePropertyUpdateVersionObject $version
     *
     * @return self
     */
    public function setVersion($version): self
    {
        $this->version = $version;

        return $this;
    }
}
