<?php

declare(strict_types = 1);

namespace MichalHepner\AtlassianRestClient\ConfluenceCloud\Model;

class ContentMetadataCurrentuserObject
{
    /**
     * @var \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\ContentMetadataCurrentuserObjectFavouritedObject
     */
    protected $favourited;

    /**
     * @var \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\ContentMetadataCurrentuserObjectLastmodifiedObject
     */
    protected $lastmodified;

    /**
     * @var \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\ContentMetadataCurrentuserObjectLastcontributedObject
     */
    protected $lastcontributed;

    /**
     * @var \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\ContentMetadataCurrentuserObjectViewedObject
     */
    protected $viewed;

    /**
     * @return \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\ContentMetadataCurrentuserObjectFavouritedObject
     */
    public function getFavourited()
    {
        return $this->favourited;
    }

    /**
     * @param \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\ContentMetadataCurrentuserObjectFavouritedObject $favourited
     *
     * @return self
     */
    public function setFavourited($favourited): self
    {
        $this->favourited = $favourited;

        return $this;
    }

    /**
     * @return \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\ContentMetadataCurrentuserObjectLastmodifiedObject
     */
    public function getLastmodified()
    {
        return $this->lastmodified;
    }

    /**
     * @param \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\ContentMetadataCurrentuserObjectLastmodifiedObject $lastmodified
     *
     * @return self
     */
    public function setLastmodified($lastmodified): self
    {
        $this->lastmodified = $lastmodified;

        return $this;
    }

    /**
     * @return \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\ContentMetadataCurrentuserObjectLastcontributedObject
     */
    public function getLastcontributed()
    {
        return $this->lastcontributed;
    }

    /**
     * @param \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\ContentMetadataCurrentuserObjectLastcontributedObject $lastcontributed
     *
     * @return self
     */
    public function setLastcontributed($lastcontributed): self
    {
        $this->lastcontributed = $lastcontributed;

        return $this;
    }

    /**
     * @return \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\ContentMetadataCurrentuserObjectViewedObject
     */
    public function getViewed()
    {
        return $this->viewed;
    }

    /**
     * @param \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\ContentMetadataCurrentuserObjectViewedObject $viewed
     *
     * @return self
     */
    public function setViewed($viewed): self
    {
        $this->viewed = $viewed;

        return $this;
    }
}
