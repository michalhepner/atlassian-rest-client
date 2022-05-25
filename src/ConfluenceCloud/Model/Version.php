<?php

declare(strict_types = 1);

namespace MichalHepner\AtlassianRestClient\ConfluenceCloud\Model;

class Version
{
    /**
     * REQUIRED
     * 
     * @var \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\User
     */
    protected $by;

    /**
     * REQUIRED
     * 
     * @var string
     */
    protected $when;

    /**
     * REQUIRED
     * 
     * @var string
     */
    protected $friendlyWhen;

    /**
     * REQUIRED
     * 
     * @var string
     */
    protected $message;

    /**
     * REQUIRED
     * 
     * @var integer
     */
    protected $number;

    /**
     * REQUIRED
     * 
     * @var boolean
     */
    protected $minorEdit;

    /**
     * @var \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\Content
     */
    protected $content;

    /**
     * @var \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\UsersUserKeys
     */
    protected $collaborators;

    /**
     * REQUIRED
     * 
     * @var \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\VersionExpandableObject
     */
    protected $_expandable;

    /**
     * REQUIRED
     * 
     * @var \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\GenericLinks
     */
    protected $_links;

    /**
     * @return \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\User
     */
    public function getBy()
    {
        return $this->by;
    }

    /**
     * @param \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\User $by
     *
     * @return self
     */
    public function setBy($by): self
    {
        $this->by = $by;

        return $this;
    }

    /**
     * @return string
     */
    public function getWhen()
    {
        return $this->when;
    }

    /**
     * @param string $when
     *
     * @return self
     */
    public function setWhen($when): self
    {
        $this->when = $when;

        return $this;
    }

    /**
     * @return string
     */
    public function getFriendlyWhen()
    {
        return $this->friendlyWhen;
    }

    /**
     * @param string $friendlyWhen
     *
     * @return self
     */
    public function setFriendlyWhen($friendlyWhen): self
    {
        $this->friendlyWhen = $friendlyWhen;

        return $this;
    }

    /**
     * @return string
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * @param string $message
     *
     * @return self
     */
    public function setMessage($message): self
    {
        $this->message = $message;

        return $this;
    }

    /**
     * @return integer
     */
    public function getNumber()
    {
        return $this->number;
    }

    /**
     * @param integer $number
     *
     * @return self
     */
    public function setNumber($number): self
    {
        $this->number = $number;

        return $this;
    }

    /**
     * @return boolean
     */
    public function getMinorEdit()
    {
        return $this->minorEdit;
    }

    /**
     * @param boolean $minorEdit
     *
     * @return self
     */
    public function setMinorEdit($minorEdit): self
    {
        $this->minorEdit = $minorEdit;

        return $this;
    }

    /**
     * @return \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\Content
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * @param \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\Content $content
     *
     * @return self
     */
    public function setContent($content): self
    {
        $this->content = $content;

        return $this;
    }

    /**
     * @return \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\UsersUserKeys
     */
    public function getCollaborators()
    {
        return $this->collaborators;
    }

    /**
     * @param \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\UsersUserKeys $collaborators
     *
     * @return self
     */
    public function setCollaborators($collaborators): self
    {
        $this->collaborators = $collaborators;

        return $this;
    }

    /**
     * @return \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\VersionExpandableObject
     */
    public function get_expandable()
    {
        return $this->_expandable;
    }

    /**
     * @param \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\VersionExpandableObject $_expandable
     *
     * @return self
     */
    public function set_expandable($_expandable): self
    {
        $this->_expandable = $_expandable;

        return $this;
    }

    /**
     * @return \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\GenericLinks
     */
    public function get_links()
    {
        return $this->_links;
    }

    /**
     * @param \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\GenericLinks $_links
     *
     * @return self
     */
    public function set_links($_links): self
    {
        $this->_links = $_links;

        return $this;
    }
}
