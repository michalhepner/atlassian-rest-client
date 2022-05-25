<?php

declare(strict_types = 1);

namespace MichalHepner\AtlassianRestClient\ConfluenceCloud\Model;

class ContentRestrictionsObject
{
    /**
     * @var \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\ContentRestriction
     */
    protected $read;

    /**
     * @var \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\ContentRestriction
     */
    protected $update;

    /**
     * REQUIRED
     * 
     * @var \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\GenericLinks
     */
    protected $_links;

    /**
     * @return \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\ContentRestriction
     */
    public function getRead()
    {
        return $this->read;
    }

    /**
     * @param \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\ContentRestriction $read
     *
     * @return self
     */
    public function setRead($read): self
    {
        $this->read = $read;

        return $this;
    }

    /**
     * @return \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\ContentRestriction
     */
    public function getUpdate()
    {
        return $this->update;
    }

    /**
     * @param \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\ContentRestriction $update
     *
     * @return self
     */
    public function setUpdate($update): self
    {
        $this->update = $update;

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
