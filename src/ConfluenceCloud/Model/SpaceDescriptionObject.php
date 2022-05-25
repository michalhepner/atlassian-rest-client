<?php

declare(strict_types = 1);

namespace MichalHepner\AtlassianRestClient\ConfluenceCloud\Model;

class SpaceDescriptionObject
{
    /**
     * @var \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\SpaceDescription
     */
    protected $plain;

    /**
     * @var \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\SpaceDescription
     */
    protected $view;

    /**
     * @return \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\SpaceDescription
     */
    public function getPlain()
    {
        return $this->plain;
    }

    /**
     * @param \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\SpaceDescription $plain
     *
     * @return self
     */
    public function setPlain($plain): self
    {
        $this->plain = $plain;

        return $this;
    }

    /**
     * @return \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\SpaceDescription
     */
    public function getView()
    {
        return $this->view;
    }

    /**
     * @param \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\SpaceDescription $view
     *
     * @return self
     */
    public function setView($view): self
    {
        $this->view = $view;

        return $this;
    }
}
