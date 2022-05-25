<?php

declare(strict_types = 1);

namespace MichalHepner\AtlassianRestClient\ConfluenceCloud\Model;

class VersionExpandableObject
{
    /**
     * REQUIRED
     * 
     * @var string
     */
    protected $content;

    /**
     * REQUIRED
     * 
     * @var string
     */
    protected $collaborators;

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

    /**
     * @return string
     */
    public function getCollaborators()
    {
        return $this->collaborators;
    }

    /**
     * @param string $collaborators
     *
     * @return self
     */
    public function setCollaborators($collaborators): self
    {
        $this->collaborators = $collaborators;

        return $this;
    }
}
