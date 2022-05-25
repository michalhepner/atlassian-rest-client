<?php

declare(strict_types = 1);

namespace MichalHepner\AtlassianRestClient\ConfluenceCloud\Model;

class ContentLookAndFeel
{
    /**
     * REQUIRED
     * 
     * @var \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\ScreenLookAndFeel
     */
    protected $screen;

    /**
     * REQUIRED
     * 
     * @var \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\ContainerLookAndFeel
     */
    protected $container;

    /**
     * REQUIRED
     * 
     * @var \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\ContainerLookAndFeel
     */
    protected $header;

    /**
     * REQUIRED
     * 
     * @var \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\ContainerLookAndFeel
     */
    protected $body;

    /**
     * @return \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\ScreenLookAndFeel
     */
    public function getScreen()
    {
        return $this->screen;
    }

    /**
     * @param \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\ScreenLookAndFeel $screen
     *
     * @return self
     */
    public function setScreen($screen): self
    {
        $this->screen = $screen;

        return $this;
    }

    /**
     * @return \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\ContainerLookAndFeel
     */
    public function getContainer()
    {
        return $this->container;
    }

    /**
     * @param \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\ContainerLookAndFeel $container
     *
     * @return self
     */
    public function setContainer($container): self
    {
        $this->container = $container;

        return $this;
    }

    /**
     * @return \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\ContainerLookAndFeel
     */
    public function getHeader()
    {
        return $this->header;
    }

    /**
     * @param \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\ContainerLookAndFeel $header
     *
     * @return self
     */
    public function setHeader($header): self
    {
        $this->header = $header;

        return $this;
    }

    /**
     * @return \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\ContainerLookAndFeel
     */
    public function getBody()
    {
        return $this->body;
    }

    /**
     * @param \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\ContainerLookAndFeel $body
     *
     * @return self
     */
    public function setBody($body): self
    {
        $this->body = $body;

        return $this;
    }
}
