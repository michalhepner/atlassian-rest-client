<?php

declare(strict_types = 1);

namespace MichalHepner\AtlassianRestClient\ConfluenceCloud\Model;

class ContentBody
{
    /**
     * REQUIRED
     * 
     * @var string
     */
    protected $value;

    /**
     * REQUIRED
     * 
     * @var string
     */
    protected $representation;

    /**
     * @var \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\ContentBodyEmbeddedContentArray
     */
    protected $embeddedContent;

    /**
     * @var \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\WebResourceDependencies
     */
    protected $webresource;

    /**
     * REQUIRED
     * 
     * @var \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\ContentBodyExpandableObject
     */
    protected $_expandable;

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

    /**
     * @return \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\ContentBodyEmbeddedContentArray
     */
    public function getEmbeddedContent()
    {
        return $this->embeddedContent;
    }

    /**
     * @param \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\ContentBodyEmbeddedContentArray $embeddedContent
     *
     * @return self
     */
    public function setEmbeddedContent($embeddedContent): self
    {
        $this->embeddedContent = $embeddedContent;

        return $this;
    }

    /**
     * @return \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\WebResourceDependencies
     */
    public function getWebresource()
    {
        return $this->webresource;
    }

    /**
     * @param \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\WebResourceDependencies $webresource
     *
     * @return self
     */
    public function setWebresource($webresource): self
    {
        $this->webresource = $webresource;

        return $this;
    }

    /**
     * @return \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\ContentBodyExpandableObject
     */
    public function get_expandable()
    {
        return $this->_expandable;
    }

    /**
     * @param \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\ContentBodyExpandableObject $_expandable
     *
     * @return self
     */
    public function set_expandable($_expandable): self
    {
        $this->_expandable = $_expandable;

        return $this;
    }
}
