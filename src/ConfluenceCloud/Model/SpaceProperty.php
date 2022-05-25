<?php

declare(strict_types = 1);

namespace MichalHepner\AtlassianRestClient\ConfluenceCloud\Model;

class SpaceProperty
{
    /**
     * REQUIRED
     * 
     * @var integer
     */
    protected $id;

    /**
     * REQUIRED
     * 
     * @var string
     */
    protected $key;

    /**
     * REQUIRED
     * 
     * @var \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\SpacePropertyValueObject
     */
    protected $value;

    /**
     * @var \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\SpacePropertyVersionObject
     */
    protected $version;

    /**
     * @var \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\Space
     */
    protected $space;

    /**
     * REQUIRED
     * 
     * @var \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\SpacePropertyExpandableObject
     */
    protected $_expandable;

    /**
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param integer $id
     *
     * @return self
     */
    public function setId($id): self
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @return string
     */
    public function getKey()
    {
        return $this->key;
    }

    /**
     * @param string $key
     *
     * @return self
     */
    public function setKey($key): self
    {
        $this->key = $key;

        return $this;
    }

    /**
     * @return \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\SpacePropertyValueObject
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * @param \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\SpacePropertyValueObject $value
     *
     * @return self
     */
    public function setValue($value): self
    {
        $this->value = $value;

        return $this;
    }

    /**
     * @return \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\SpacePropertyVersionObject
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * @param \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\SpacePropertyVersionObject $version
     *
     * @return self
     */
    public function setVersion($version): self
    {
        $this->version = $version;

        return $this;
    }

    /**
     * @return \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\Space
     */
    public function getSpace()
    {
        return $this->space;
    }

    /**
     * @param \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\Space $space
     *
     * @return self
     */
    public function setSpace($space): self
    {
        $this->space = $space;

        return $this;
    }

    /**
     * @return \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\SpacePropertyExpandableObject
     */
    public function get_expandable()
    {
        return $this->_expandable;
    }

    /**
     * @param \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\SpacePropertyExpandableObject $_expandable
     *
     * @return self
     */
    public function set_expandable($_expandable): self
    {
        $this->_expandable = $_expandable;

        return $this;
    }
}
