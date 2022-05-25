<?php

declare(strict_types = 1);

namespace MichalHepner\AtlassianRestClient\ConfluenceCloud\Model;

class ContentPropertyCreateNoKey
{
    /**
     * REQUIRED
     * 
     * @var \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\PropertyValue
     */
    protected $value;

    /**
     * @return \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\PropertyValue
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * @param \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\PropertyValue $value
     *
     * @return self
     */
    public function setValue($value): self
    {
        $this->value = $value;

        return $this;
    }
}
