<?php

declare(strict_types = 1);

namespace MichalHepner\AtlassianRestClient\ConfluenceCloud\Model;

class ContentHistoryContributorsObject
{
    /**
     * @var \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\UsersUserKeys
     */
    protected $publishers;

    /**
     * @return \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\UsersUserKeys
     */
    public function getPublishers()
    {
        return $this->publishers;
    }

    /**
     * @param \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\UsersUserKeys $publishers
     *
     * @return self
     */
    public function setPublishers($publishers): self
    {
        $this->publishers = $publishers;

        return $this;
    }
}
