<?php

declare(strict_types = 1);

namespace MichalHepner\AtlassianRestClient\ConfluenceCloud\Model;

class LookAndFeel
{
    /**
     * REQUIRED
     * 
     * @var \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\LookAndFeelHeadingsObject
     */
    protected $headings;

    /**
     * REQUIRED
     * 
     * @var \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\LookAndFeelLinksObject
     */
    protected $links;

    /**
     * REQUIRED
     * 
     * @var \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\MenusLookAndFeel
     */
    protected $menus;

    /**
     * REQUIRED
     * 
     * @var \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\HeaderLookAndFeel
     */
    protected $header;

    /**
     * REQUIRED
     * 
     * @var \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\ContentLookAndFeel
     */
    protected $content;

    /**
     * REQUIRED
     * 
     * @var \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\LookAndFeelBordersAndDividersObject
     */
    protected $bordersAndDividers;

    /**
     * @return \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\LookAndFeelHeadingsObject
     */
    public function getHeadings()
    {
        return $this->headings;
    }

    /**
     * @param \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\LookAndFeelHeadingsObject $headings
     *
     * @return self
     */
    public function setHeadings($headings): self
    {
        $this->headings = $headings;

        return $this;
    }

    /**
     * @return \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\LookAndFeelLinksObject
     */
    public function getLinks()
    {
        return $this->links;
    }

    /**
     * @param \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\LookAndFeelLinksObject $links
     *
     * @return self
     */
    public function setLinks($links): self
    {
        $this->links = $links;

        return $this;
    }

    /**
     * @return \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\MenusLookAndFeel
     */
    public function getMenus()
    {
        return $this->menus;
    }

    /**
     * @param \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\MenusLookAndFeel $menus
     *
     * @return self
     */
    public function setMenus($menus): self
    {
        $this->menus = $menus;

        return $this;
    }

    /**
     * @return \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\HeaderLookAndFeel
     */
    public function getHeader()
    {
        return $this->header;
    }

    /**
     * @param \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\HeaderLookAndFeel $header
     *
     * @return self
     */
    public function setHeader($header): self
    {
        $this->header = $header;

        return $this;
    }

    /**
     * @return \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\ContentLookAndFeel
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * @param \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\ContentLookAndFeel $content
     *
     * @return self
     */
    public function setContent($content): self
    {
        $this->content = $content;

        return $this;
    }

    /**
     * @return \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\LookAndFeelBordersAndDividersObject
     */
    public function getBordersAndDividers()
    {
        return $this->bordersAndDividers;
    }

    /**
     * @param \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\LookAndFeelBordersAndDividersObject $bordersAndDividers
     *
     * @return self
     */
    public function setBordersAndDividers($bordersAndDividers): self
    {
        $this->bordersAndDividers = $bordersAndDividers;

        return $this;
    }
}
