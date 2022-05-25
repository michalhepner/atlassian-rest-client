<?php

declare(strict_types = 1);

namespace MichalHepner\AtlassianRestClient\ConfluenceCloud\Model;

class WebResourceDependencies
{
    /**
     * @var \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\WebResourceDependenciesKeysArray
     */
    protected $keys;

    /**
     * @var \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\WebResourceDependenciesContextsArray
     */
    protected $contexts;

    /**
     * @var \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\WebResourceDependenciesUrisObject
     */
    protected $uris;

    /**
     * @var \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\WebResourceDependenciesTagsObject
     */
    protected $tags;

    /**
     * @var \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\SuperBatchWebResources
     */
    protected $superbatch;

    /**
     * @return \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\WebResourceDependenciesKeysArray
     */
    public function getKeys()
    {
        return $this->keys;
    }

    /**
     * @param \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\WebResourceDependenciesKeysArray $keys
     *
     * @return self
     */
    public function setKeys($keys): self
    {
        $this->keys = $keys;

        return $this;
    }

    /**
     * @return \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\WebResourceDependenciesContextsArray
     */
    public function getContexts()
    {
        return $this->contexts;
    }

    /**
     * @param \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\WebResourceDependenciesContextsArray $contexts
     *
     * @return self
     */
    public function setContexts($contexts): self
    {
        $this->contexts = $contexts;

        return $this;
    }

    /**
     * @return \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\WebResourceDependenciesUrisObject
     */
    public function getUris()
    {
        return $this->uris;
    }

    /**
     * @param \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\WebResourceDependenciesUrisObject $uris
     *
     * @return self
     */
    public function setUris($uris): self
    {
        $this->uris = $uris;

        return $this;
    }

    /**
     * @return \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\WebResourceDependenciesTagsObject
     */
    public function getTags()
    {
        return $this->tags;
    }

    /**
     * @param \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\WebResourceDependenciesTagsObject $tags
     *
     * @return self
     */
    public function setTags($tags): self
    {
        $this->tags = $tags;

        return $this;
    }

    /**
     * @return \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\SuperBatchWebResources
     */
    public function getSuperbatch()
    {
        return $this->superbatch;
    }

    /**
     * @param \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\SuperBatchWebResources $superbatch
     *
     * @return self
     */
    public function setSuperbatch($superbatch): self
    {
        $this->superbatch = $superbatch;

        return $this;
    }
}
