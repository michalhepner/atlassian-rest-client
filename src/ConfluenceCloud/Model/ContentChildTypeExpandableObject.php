<?php

declare(strict_types = 1);

namespace MichalHepner\AtlassianRestClient\ConfluenceCloud\Model;

class ContentChildTypeExpandableObject
{
    /**
     * @var string
     */
    protected $all;

    /**
     * @var string
     */
    protected $attachment;

    /**
     * @var string
     */
    protected $comment;

    /**
     * @var string
     */
    protected $page;

    /**
     * @return string
     */
    public function getAll()
    {
        return $this->all;
    }

    /**
     * @param string $all
     *
     * @return self
     */
    public function setAll($all): self
    {
        $this->all = $all;

        return $this;
    }

    /**
     * @return string
     */
    public function getAttachment()
    {
        return $this->attachment;
    }

    /**
     * @param string $attachment
     *
     * @return self
     */
    public function setAttachment($attachment): self
    {
        $this->attachment = $attachment;

        return $this;
    }

    /**
     * @return string
     */
    public function getComment()
    {
        return $this->comment;
    }

    /**
     * @param string $comment
     *
     * @return self
     */
    public function setComment($comment): self
    {
        $this->comment = $comment;

        return $this;
    }

    /**
     * @return string
     */
    public function getPage()
    {
        return $this->page;
    }

    /**
     * @param string $page
     *
     * @return self
     */
    public function setPage($page): self
    {
        $this->page = $page;

        return $this;
    }
}
