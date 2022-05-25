<?php

declare(strict_types = 1);

namespace MichalHepner\AtlassianRestClient\ConfluenceCloud\Model;

class LabelCreate
{
    /**
     * The prefix for the label.
     * 
     * REQUIRED
     * 
     * @var string
     */
    protected $prefix;

    /**
     * The name of the label, which will be shown in the UI.
     * 
     * REQUIRED
     * 
     * @var string
     */
    protected $name;

    /**
     * @return string
     */
    public function getPrefix()
    {
        return $this->prefix;
    }

    /**
     * @param string $prefix
     *
     * @return self
     */
    public function setPrefix($prefix): self
    {
        $this->prefix = $prefix;

        return $this;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     *
     * @return self
     */
    public function setName($name): self
    {
        $this->name = $name;

        return $this;
    }
}
