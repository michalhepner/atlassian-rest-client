<?php

declare(strict_types = 1);

namespace MichalHepner\AtlassianRestClient\ConfluenceCloud\Model;

class ContentRestrictionExpandableObject
{
    /**
     * @var string
     */
    protected $restrictions;

    /**
     * @var string
     */
    protected $content;

    /**
     * @return string
     */
    public function getRestrictions()
    {
        return $this->restrictions;
    }

    /**
     * @param string $restrictions
     *
     * @return self
     */
    public function setRestrictions($restrictions): self
    {
        $this->restrictions = $restrictions;

        return $this;
    }

    /**
     * @return string
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * @param string $content
     *
     * @return self
     */
    public function setContent($content): self
    {
        $this->content = $content;

        return $this;
    }
}
