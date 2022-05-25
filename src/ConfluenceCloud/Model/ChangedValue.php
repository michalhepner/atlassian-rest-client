<?php

declare(strict_types = 1);

namespace MichalHepner\AtlassianRestClient\ConfluenceCloud\Model;

class ChangedValue
{
    /**
     * REQUIRED
     * 
     * @var string
     */
    protected $name;

    /**
     * REQUIRED
     * 
     * @var string
     */
    protected $oldValue;

    /**
     * REQUIRED
     * 
     * @var string
     */
    protected $newValue;

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

    /**
     * @return string
     */
    public function getOldValue()
    {
        return $this->oldValue;
    }

    /**
     * @param string $oldValue
     *
     * @return self
     */
    public function setOldValue($oldValue): self
    {
        $this->oldValue = $oldValue;

        return $this;
    }

    /**
     * @return string
     */
    public function getNewValue()
    {
        return $this->newValue;
    }

    /**
     * @param string $newValue
     *
     * @return self
     */
    public function setNewValue($newValue): self
    {
        $this->newValue = $newValue;

        return $this;
    }
}
