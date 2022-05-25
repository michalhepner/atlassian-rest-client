<?php

declare(strict_types = 1);

namespace MichalHepner\AtlassianRestClient\ConfluenceCloud\Model;

class ContentBodyCreate
{
    /**
     * The body of the content in the relevant format.
     * 
     * REQUIRED
     * 
     * @var string
     */
    protected $value;

    /**
     * The content format type. Set the value of this property to 
     * the name of the format being used, e.g. 'storage'.
     * 
     * REQUIRED
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
