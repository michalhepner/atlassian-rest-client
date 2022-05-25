<?php

declare(strict_types = 1);

namespace MichalHepner\AtlassianRestClient\ConfluenceCloud\Model;

class SpaceHistoryObject
{
    /**
     * REQUIRED
     * 
     * @var string
     */
    protected $createdDate;

    /**
     * @return string
     */
    public function getCreatedDate()
    {
        return $this->createdDate;
    }

    /**
     * @param string $createdDate
     *
     * @return self
     */
    public function setCreatedDate($createdDate): self
    {
        $this->createdDate = $createdDate;

        return $this;
    }
}
