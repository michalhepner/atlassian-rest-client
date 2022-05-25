<?php

declare(strict_types = 1);

namespace MichalHepner\AtlassianRestClient\ConfluenceCloud\Model;

class ContentRestrictionUpdateRestrictionsObjectGroupArrayItemsObject
{
    /**
     * Set to 'group'.
     * 
     * REQUIRED
     * 
     * @var string
     */
    protected $type;

    /**
     * The name of the group.
     * 
     * REQUIRED
     * 
     * @var string
     */
    protected $name;

    /**
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param string $type
     *
     * @return self
     */
    public function setType($type): self
    {
        $this->type = $type;

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
