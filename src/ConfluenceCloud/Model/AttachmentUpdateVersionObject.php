<?php

declare(strict_types = 1);

namespace MichalHepner\AtlassianRestClient\ConfluenceCloud\Model;

class AttachmentUpdateVersionObject
{
    /**
     * The version number.
     * 
     * REQUIRED
     * 
     * @var integer
     */
    protected $number;

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
}
