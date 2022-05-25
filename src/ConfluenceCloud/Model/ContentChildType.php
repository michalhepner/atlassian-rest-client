<?php

declare(strict_types = 1);

namespace MichalHepner\AtlassianRestClient\ConfluenceCloud\Model;

class ContentChildType
{
    /**
     * @var \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\ContentChildTypeAttachmentObject
     */
    protected $attachment;

    /**
     * @var \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\ContentChildTypeCommentObject
     */
    protected $comment;

    /**
     * @var \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\ContentChildTypePageObject
     */
    protected $page;

    /**
     * REQUIRED
     * 
     * @var \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\ContentChildTypeExpandableObject
     */
    protected $_expandable;

    /**
     * @return \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\ContentChildTypeAttachmentObject
     */
    public function getAttachment()
    {
        return $this->attachment;
    }

    /**
     * @param \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\ContentChildTypeAttachmentObject $attachment
     *
     * @return self
     */
    public function setAttachment($attachment): self
    {
        $this->attachment = $attachment;

        return $this;
    }

    /**
     * @return \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\ContentChildTypeCommentObject
     */
    public function getComment()
    {
        return $this->comment;
    }

    /**
     * @param \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\ContentChildTypeCommentObject $comment
     *
     * @return self
     */
    public function setComment($comment): self
    {
        $this->comment = $comment;

        return $this;
    }

    /**
     * @return \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\ContentChildTypePageObject
     */
    public function getPage()
    {
        return $this->page;
    }

    /**
     * @param \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\ContentChildTypePageObject $page
     *
     * @return self
     */
    public function setPage($page): self
    {
        $this->page = $page;

        return $this;
    }

    /**
     * @return \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\ContentChildTypeExpandableObject
     */
    public function get_expandable()
    {
        return $this->_expandable;
    }

    /**
     * @param \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\ContentChildTypeExpandableObject $_expandable
     *
     * @return self
     */
    public function set_expandable($_expandable): self
    {
        $this->_expandable = $_expandable;

        return $this;
    }
}
