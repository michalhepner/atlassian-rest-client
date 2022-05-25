<?php

declare(strict_types = 1);

namespace MichalHepner\AtlassianRestClient\ConfluenceCloud\Model;

class RelationData
{
    /**
     * @var \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\User
     */
    protected $createdBy;

    /**
     * @var string
     */
    protected $createdDate;

    /**
     * @var string
     */
    protected $friendlyCreatedDate;

    /**
     * @return \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\User
     */
    public function getCreatedBy()
    {
        return $this->createdBy;
    }

    /**
     * @param \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\User $createdBy
     *
     * @return self
     */
    public function setCreatedBy($createdBy): self
    {
        $this->createdBy = $createdBy;

        return $this;
    }

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

    /**
     * @return string
     */
    public function getFriendlyCreatedDate()
    {
        return $this->friendlyCreatedDate;
    }

    /**
     * @param string $friendlyCreatedDate
     *
     * @return self
     */
    public function setFriendlyCreatedDate($friendlyCreatedDate): self
    {
        $this->friendlyCreatedDate = $friendlyCreatedDate;

        return $this;
    }
}
