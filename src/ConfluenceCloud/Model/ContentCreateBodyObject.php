<?php

declare(strict_types = 1);

namespace MichalHepner\AtlassianRestClient\ConfluenceCloud\Model;

class ContentCreateBodyObject
{
    /**
     * @var \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\ContentBodyCreate
     */
    protected $view;

    /**
     * @var \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\ContentBodyCreate
     */
    protected $export_view;

    /**
     * @var \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\ContentBodyCreate
     */
    protected $styled_view;

    /**
     * @var \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\ContentBodyCreate
     */
    protected $storage;

    /**
     * @var \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\ContentBodyCreate
     */
    protected $editor2;

    /**
     * @var \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\ContentBodyCreate
     */
    protected $anonymous_export_view;

    /**
     * @return \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\ContentBodyCreate
     */
    public function getView()
    {
        return $this->view;
    }

    /**
     * @param \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\ContentBodyCreate $view
     *
     * @return self
     */
    public function setView($view): self
    {
        $this->view = $view;

        return $this;
    }

    /**
     * @return \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\ContentBodyCreate
     */
    public function getExport_view()
    {
        return $this->export_view;
    }

    /**
     * @param \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\ContentBodyCreate $export_view
     *
     * @return self
     */
    public function setExport_view($export_view): self
    {
        $this->export_view = $export_view;

        return $this;
    }

    /**
     * @return \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\ContentBodyCreate
     */
    public function getStyled_view()
    {
        return $this->styled_view;
    }

    /**
     * @param \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\ContentBodyCreate $styled_view
     *
     * @return self
     */
    public function setStyled_view($styled_view): self
    {
        $this->styled_view = $styled_view;

        return $this;
    }

    /**
     * @return \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\ContentBodyCreate
     */
    public function getStorage()
    {
        return $this->storage;
    }

    /**
     * @param \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\ContentBodyCreate $storage
     *
     * @return self
     */
    public function setStorage($storage): self
    {
        $this->storage = $storage;

        return $this;
    }

    /**
     * @return \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\ContentBodyCreate
     */
    public function getEditor2()
    {
        return $this->editor2;
    }

    /**
     * @param \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\ContentBodyCreate $editor2
     *
     * @return self
     */
    public function setEditor2($editor2): self
    {
        $this->editor2 = $editor2;

        return $this;
    }

    /**
     * @return \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\ContentBodyCreate
     */
    public function getAnonymous_export_view()
    {
        return $this->anonymous_export_view;
    }

    /**
     * @param \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\ContentBodyCreate $anonymous_export_view
     *
     * @return self
     */
    public function setAnonymous_export_view($anonymous_export_view): self
    {
        $this->anonymous_export_view = $anonymous_export_view;

        return $this;
    }
}
