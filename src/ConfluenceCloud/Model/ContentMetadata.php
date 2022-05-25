<?php

declare(strict_types = 1);

namespace MichalHepner\AtlassianRestClient\ConfluenceCloud\Model;

class ContentMetadata
{
    /**
     * @var \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\ContentMetadataCurrentuserObject
     */
    protected $currentuser;

    /**
     * @var \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\GenericLinks
     */
    protected $properties;

    /**
     * @var \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\ContentMetadataFrontendObject
     */
    protected $frontend;

    /**
     * @var \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\LabelArray
     */
    protected $labels;

    /**
     * @return \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\ContentMetadataCurrentuserObject
     */
    public function getCurrentuser()
    {
        return $this->currentuser;
    }

    /**
     * @param \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\ContentMetadataCurrentuserObject $currentuser
     *
     * @return self
     */
    public function setCurrentuser($currentuser): self
    {
        $this->currentuser = $currentuser;

        return $this;
    }

    /**
     * @return \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\GenericLinks
     */
    public function getProperties()
    {
        return $this->properties;
    }

    /**
     * @param \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\GenericLinks $properties
     *
     * @return self
     */
    public function setProperties($properties): self
    {
        $this->properties = $properties;

        return $this;
    }

    /**
     * @return \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\ContentMetadataFrontendObject
     */
    public function getFrontend()
    {
        return $this->frontend;
    }

    /**
     * @param \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\ContentMetadataFrontendObject $frontend
     *
     * @return self
     */
    public function setFrontend($frontend): self
    {
        $this->frontend = $frontend;

        return $this;
    }

    /**
     * @return \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\LabelArray
     */
    public function getLabels()
    {
        return $this->labels;
    }

    /**
     * @param \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\LabelArray $labels
     *
     * @return self
     */
    public function setLabels($labels): self
    {
        $this->labels = $labels;

        return $this;
    }
}
