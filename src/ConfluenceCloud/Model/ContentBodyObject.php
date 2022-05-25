<?php

declare(strict_types = 1);

namespace MichalHepner\AtlassianRestClient\ConfluenceCloud\Model;

class ContentBodyObject
{
    /**
     * @var \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\ContentBody
     */
    protected $view;

    /**
     * @var \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\ContentBody
     */
    protected $export_view;

    /**
     * @var \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\ContentBody
     */
    protected $styled_view;

    /**
     * @var \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\ContentBody
     */
    protected $storage;

    /**
     * @var \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\ContentBody
     */
    protected $editor2;

    /**
     * @var \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\ContentBody
     */
    protected $anonymous_export_view;

    /**
     * REQUIRED
     * 
     * @var \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\ContentBodyObjectExpandableObject
     */
    protected $_expandable;

    /**
     * @return \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\ContentBody
     */
    public function getView()
    {
        return $this->view;
    }

    /**
     * @param \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\ContentBody $view
     *
     * @return self
     */
    public function setView($view): self
    {
        $this->view = $view;

        return $this;
    }

    /**
     * @return \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\ContentBody
     */
    public function getExport_view()
    {
        return $this->export_view;
    }

    /**
     * @param \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\ContentBody $export_view
     *
     * @return self
     */
    public function setExport_view($export_view): self
    {
        $this->export_view = $export_view;

        return $this;
    }

    /**
     * @return \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\ContentBody
     */
    public function getStyled_view()
    {
        return $this->styled_view;
    }

    /**
     * @param \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\ContentBody $styled_view
     *
     * @return self
     */
    public function setStyled_view($styled_view): self
    {
        $this->styled_view = $styled_view;

        return $this;
    }

    /**
     * @return \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\ContentBody
     */
    public function getStorage()
    {
        return $this->storage;
    }

    /**
     * @param \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\ContentBody $storage
     *
     * @return self
     */
    public function setStorage($storage): self
    {
        $this->storage = $storage;

        return $this;
    }

    /**
     * @return \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\ContentBody
     */
    public function getEditor2()
    {
        return $this->editor2;
    }

    /**
     * @param \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\ContentBody $editor2
     *
     * @return self
     */
    public function setEditor2($editor2): self
    {
        $this->editor2 = $editor2;

        return $this;
    }

    /**
     * @return \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\ContentBody
     */
    public function getAnonymous_export_view()
    {
        return $this->anonymous_export_view;
    }

    /**
     * @param \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\ContentBody $anonymous_export_view
     *
     * @return self
     */
    public function setAnonymous_export_view($anonymous_export_view): self
    {
        $this->anonymous_export_view = $anonymous_export_view;

        return $this;
    }

    /**
     * @return \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\ContentBodyObjectExpandableObject
     */
    public function get_expandable()
    {
        return $this->_expandable;
    }

    /**
     * @param \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\ContentBodyObjectExpandableObject $_expandable
     *
     * @return self
     */
    public function set_expandable($_expandable): self
    {
        $this->_expandable = $_expandable;

        return $this;
    }
}
