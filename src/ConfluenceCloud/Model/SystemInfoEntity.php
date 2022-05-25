<?php

declare(strict_types = 1);

namespace MichalHepner\AtlassianRestClient\ConfluenceCloud\Model;

class SystemInfoEntity
{
    /**
     * REQUIRED
     * 
     * @var string
     */
    protected $cloudId;

    /**
     * REQUIRED
     * 
     * @var string
     */
    protected $commitHash;

    /**
     * @return string
     */
    public function getCloudId()
    {
        return $this->cloudId;
    }

    /**
     * @param string $cloudId
     *
     * @return self
     */
    public function setCloudId($cloudId): self
    {
        $this->cloudId = $cloudId;

        return $this;
    }

    /**
     * @return string
     */
    public function getCommitHash()
    {
        return $this->commitHash;
    }

    /**
     * @param string $commitHash
     *
     * @return self
     */
    public function setCommitHash($commitHash): self
    {
        $this->commitHash = $commitHash;

        return $this;
    }
}
