<?php

declare(strict_types = 1);

namespace MichalHepner\AtlassianRestClient\ConfluenceCloud\Model;

class RetentionPeriod
{
    /**
     * The number of units for the retention period.
     * 
     * REQUIRED
     * 
     * @var integer
     */
    protected $number;

    /**
     * The unit of time that the retention period is measured in.
     * 
     * REQUIRED
     * 
     * @var string
     */
    protected $units;

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
     * @return string
     */
    public function getUnits()
    {
        return $this->units;
    }

    /**
     * @param string $units
     *
     * @return self
     */
    public function setUnits($units): self
    {
        $this->units = $units;

        return $this;
    }
}
