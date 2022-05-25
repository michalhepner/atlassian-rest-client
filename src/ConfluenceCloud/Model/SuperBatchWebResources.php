<?php

declare(strict_types = 1);

namespace MichalHepner\AtlassianRestClient\ConfluenceCloud\Model;

class SuperBatchWebResources
{
    /**
     * @var \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\SuperBatchWebResourcesUrisObject
     */
    protected $uris;

    /**
     * @var \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\SuperBatchWebResourcesTagsObject
     */
    protected $tags;

    /**
     * @var string
     */
    protected $metatags;

    /**
     * @return \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\SuperBatchWebResourcesUrisObject
     */
    public function getUris()
    {
        return $this->uris;
    }

    /**
     * @param \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\SuperBatchWebResourcesUrisObject $uris
     *
     * @return self
     */
    public function setUris($uris): self
    {
        $this->uris = $uris;

        return $this;
    }

    /**
     * @return \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\SuperBatchWebResourcesTagsObject
     */
    public function getTags()
    {
        return $this->tags;
    }

    /**
     * @param \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\SuperBatchWebResourcesTagsObject $tags
     *
     * @return self
     */
    public function setTags($tags): self
    {
        $this->tags = $tags;

        return $this;
    }

    /**
     * @return string
     */
    public function getMetatags()
    {
        return $this->metatags;
    }

    /**
     * @param string $metatags
     *
     * @return self
     */
    public function setMetatags($metatags): self
    {
        $this->metatags = $metatags;

        return $this;
    }
}
