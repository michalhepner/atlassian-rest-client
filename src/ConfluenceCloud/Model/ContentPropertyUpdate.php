<?php

declare(strict_types = 1);

namespace MichalHepner\AtlassianRestClient\ConfluenceCloud\Model;

class ContentPropertyUpdate
{
    /**
     * The value of the property.
     * 
     * REQUIRED
     * 
     * @var \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\ContentPropertyUpdateValueObject
     */
    protected $value;

    /**
     * The version number of the property.
     * 
     * REQUIRED
     * 
     * @var \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\ContentPropertyUpdateVersionObject
     */
    protected $version;

    /**
     * @return \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\ContentPropertyUpdateValueObject
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * @param \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\ContentPropertyUpdateValueObject $value
     *
     * @return self
     */
    public function setValue($value): self
    {
        $this->value = $value;

        return $this;
    }

    /**
     * @return \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\ContentPropertyUpdateVersionObject
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * @param \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\ContentPropertyUpdateVersionObject $version
     *
     * @return self
     */
    public function setVersion($version): self
    {
        $this->version = $version;

        return $this;
    }
}
