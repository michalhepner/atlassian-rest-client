<?php

declare(strict_types = 1);

namespace MichalHepner\AtlassianRestClient\ConfluenceCloud\Model;

class ContentProperty
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
     * The value of the content property. This can be empty or a complex object. 
     * 
     * REQUIRED
     * 
     * @var \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\ContentPropertyValueObject
     */
    protected $value;

    /**
     * @var \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\ContentPropertyVersionObject
     */
    protected $version;

    /**
     * @var \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\Content
     */
    protected $content;

    /**
     * REQUIRED
     * 
     * @var \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\GenericLinks
     */
    protected $_links;

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
     * @return \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\ContentPropertyValueObject
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * @param \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\ContentPropertyValueObject $value
     *
     * @return self
     */
    public function setValue($value): self
    {
        $this->value = $value;

        return $this;
    }

    /**
     * @return \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\ContentPropertyVersionObject
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * @param \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\ContentPropertyVersionObject $version
     *
     * @return self
     */
    public function setVersion($version): self
    {
        $this->version = $version;

        return $this;
    }

    /**
     * @return \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\Content
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * @param \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\Content $content
     *
     * @return self
     */
    public function setContent($content): self
    {
        $this->content = $content;

        return $this;
    }

    /**
     * @return \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\GenericLinks
     */
    public function get_links()
    {
        return $this->_links;
    }

    /**
     * @param \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\GenericLinks $_links
     *
     * @return self
     */
    public function set_links($_links): self
    {
        $this->_links = $_links;

        return $this;
    }
}
