<?php

declare(strict_types = 1);

namespace MichalHepner\AtlassianRestClient\ConfluenceCloud\Model;

class SpacePropertyUpdateVersionObject
{
    /**
     * The new version for the updated space property. Set this to the
     * current version number incremented by one. To get the current
     * version number, use 'Get space property' and retrieve
     * `version.number`.
     * 
     * REQUIRED
     * 
     * @var integer
     */
    protected $number;

    /**
     * If `minorEdit` is set to 'true', no notification email or activity
     * stream will be generated for the change.
     * 
     * @var boolean
     */
    protected $minorEdit;

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
