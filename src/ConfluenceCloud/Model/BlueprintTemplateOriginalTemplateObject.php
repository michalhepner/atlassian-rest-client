<?php

declare(strict_types = 1);

namespace MichalHepner\AtlassianRestClient\ConfluenceCloud\Model;

class BlueprintTemplateOriginalTemplateObject
{
    /**
     * REQUIRED
     * 
     * @var string
     */
    protected $pluginKey;

    /**
     * REQUIRED
     * 
     * @var string
     */
    protected $moduleKey;

    /**
     * @return string
     */
    public function getPluginKey()
    {
        return $this->pluginKey;
    }

    /**
     * @param string $pluginKey
     *
     * @return self
     */
    public function setPluginKey($pluginKey): self
    {
        $this->pluginKey = $pluginKey;

        return $this;
    }

    /**
     * @return string
     */
    public function getModuleKey()
    {
        return $this->moduleKey;
    }

    /**
     * @param string $moduleKey
     *
     * @return self
     */
    public function setModuleKey($moduleKey): self
    {
        $this->moduleKey = $moduleKey;

        return $this;
    }
}
