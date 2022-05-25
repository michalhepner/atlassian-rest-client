<?php

declare(strict_types = 1);

namespace MichalHepner\AtlassianRestClient\ConfluenceCloud\Model;

class VersionRestore
{
    /**
     * Set to 'RESTORE'.
     * 
     * REQUIRED
     * 
     * @var string
     */
    protected $operationKey;

    /**
     * REQUIRED
     * 
     * @var \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\VersionRestoreParamsObject
     */
    protected $params;

    /**
     * @return string
     */
    public function getOperationKey()
    {
        return $this->operationKey;
    }

    /**
     * @param string $operationKey
     *
     * @return self
     */
    public function setOperationKey($operationKey): self
    {
        $this->operationKey = $operationKey;

        return $this;
    }

    /**
     * @return \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\VersionRestoreParamsObject
     */
    public function getParams()
    {
        return $this->params;
    }

    /**
     * @param \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\VersionRestoreParamsObject $params
     *
     * @return self
     */
    public function setParams($params): self
    {
        $this->params = $params;

        return $this;
    }
}
