<?php

declare(strict_types = 1);

namespace MichalHepner\AtlassianRestClient\ConfluenceCloud\Model;

class ContentBodyObjectExpandableObject
{
    /**
     * @var string
     */
    protected $editor;

    /**
     * @var string
     */
    protected $view;

    /**
     * @var string
     */
    protected $export_view;

    /**
     * @var string
     */
    protected $styled_view;

    /**
     * @var string
     */
    protected $storage;

    /**
     * @var string
     */
    protected $editor2;

    /**
     * @var string
     */
    protected $anonymous_export_view;

    /**
     * @return string
     */
    public function getEditor()
    {
        return $this->editor;
    }

    /**
     * @param string $editor
     *
     * @return self
     */
    public function setEditor($editor): self
    {
        $this->editor = $editor;

        return $this;
    }

    /**
     * @return string
     */
    public function getView()
    {
        return $this->view;
    }

    /**
     * @param string $view
     *
     * @return self
     */
    public function setView($view): self
    {
        $this->view = $view;

        return $this;
    }

    /**
     * @return string
     */
    public function getExport_view()
    {
        return $this->export_view;
    }

    /**
     * @param string $export_view
     *
     * @return self
     */
    public function setExport_view($export_view): self
    {
        $this->export_view = $export_view;

        return $this;
    }

    /**
     * @return string
     */
    public function getStyled_view()
    {
        return $this->styled_view;
    }

    /**
     * @param string $styled_view
     *
     * @return self
     */
    public function setStyled_view($styled_view): self
    {
        $this->styled_view = $styled_view;

        return $this;
    }

    /**
     * @return string
     */
    public function getStorage()
    {
        return $this->storage;
    }

    /**
     * @param string $storage
     *
     * @return self
     */
    public function setStorage($storage): self
    {
        $this->storage = $storage;

        return $this;
    }

    /**
     * @return string
     */
    public function getEditor2()
    {
        return $this->editor2;
    }

    /**
     * @param string $editor2
     *
     * @return self
     */
    public function setEditor2($editor2): self
    {
        $this->editor2 = $editor2;

        return $this;
    }

    /**
     * @return string
     */
    public function getAnonymous_export_view()
    {
        return $this->anonymous_export_view;
    }

    /**
     * @param string $anonymous_export_view
     *
     * @return self
     */
    public function setAnonymous_export_view($anonymous_export_view): self
    {
        $this->anonymous_export_view = $anonymous_export_view;

        return $this;
    }
}
