<?php

declare(strict_types = 1);

namespace MichalHepner\AtlassianRestClient\ConfluenceCloud\Model;

class AffectedObject
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
    protected $objectType;

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
    public function getObjectType()
    {
        return $this->objectType;
    }

    /**
     * @param string $objectType
     *
     * @return self
     */
    public function setObjectType($objectType): self
    {
        $this->objectType = $objectType;

        return $this;
    }
}
