<?php

declare(strict_types = 1);

namespace MichalHepner\AtlassianRestClient\ConfluenceCloud\Model;

class ContentMetadataCurrentuserObjectLastcontributedObject
{
    /**
     * @var string
     */
    protected $status;

    /**
     * @var string
     */
    protected $when;

    /**
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param string $status
     *
     * @return self
     */
    public function setStatus($status): self
    {
        $this->status = $status;

        return $this;
    }

    /**
     * @return string
     */
    public function getWhen()
    {
        return $this->when;
    }

    /**
     * @param string $when
     *
     * @return self
     */
    public function setWhen($when): self
    {
        $this->when = $when;

        return $this;
    }
}
