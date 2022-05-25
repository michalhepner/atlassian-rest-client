<?php

declare(strict_types = 1);

namespace MichalHepner\AtlassianRestClient\ConfluenceCloud\Model;

class ContentChildTypeAttachmentObject
{
    /**
     * REQUIRED
     * 
     * @var boolean
     */
    protected $value;

    /**
     * REQUIRED
     * 
     * @var \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\GenericLinks
     */
    protected $_links;

    /**
     * @return boolean
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * @param boolean $value
     *
     * @return self
     */
    public function setValue($value): self
    {
        $this->value = $value;

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
