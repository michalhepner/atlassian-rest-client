<?php

declare(strict_types = 1);

namespace MichalHepner\AtlassianRestClient\ConfluenceCloud\Model;

class SpaceDescriptionCreatePlainObject
{
    /**
     * The space description.
     * 
     * @var string
     */
    protected $value;

    /**
     * Set to 'plain'.
     * 
     * @var string
     */
    protected $representation;

    /**
     * @return string
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * @param string $value
     *
     * @return self
     */
    public function setValue($value): self
    {
        $this->value = $value;

        return $this;
    }

    /**
     * @return string
     */
    public function getRepresentation()
    {
        return $this->representation;
    }

    /**
     * @param string $representation
     *
     * @return self
     */
    public function setRepresentation($representation): self
    {
        $this->representation = $representation;

        return $this;
    }
}
