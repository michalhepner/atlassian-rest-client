<?php

declare(strict_types = 1);

namespace MichalHepner\AtlassianRestClient\ConfluenceCloud\Model;

class SpacePropertyVersionObject
{
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
}
