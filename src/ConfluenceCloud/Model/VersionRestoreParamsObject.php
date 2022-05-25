<?php

declare(strict_types = 1);

namespace MichalHepner\AtlassianRestClient\ConfluenceCloud\Model;

class VersionRestoreParamsObject
{
    /**
     * The version number to be restored.
     * 
     * REQUIRED
     * 
     * @var integer
     */
    protected $versionNumber;

    /**
     * Description for the version.
     * 
     * REQUIRED
     * 
     * @var string
     */
    protected $message;

    /**
     * @return integer
     */
    public function getVersionNumber()
    {
        return $this->versionNumber;
    }

    /**
     * @param integer $versionNumber
     *
     * @return self
     */
    public function setVersionNumber($versionNumber): self
    {
        $this->versionNumber = $versionNumber;

        return $this;
    }

    /**
     * @return string
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * @param string $message
     *
     * @return self
     */
    public function setMessage($message): self
    {
        $this->message = $message;

        return $this;
    }
}
