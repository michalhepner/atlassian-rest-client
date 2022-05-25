<?php

declare(strict_types = 1);

namespace MichalHepner\AtlassianRestClient\ConfluenceCloud\Model;

class UserExpandableObject
{
    /**
     * @var string
     */
    protected $operations;

    /**
     * @var string
     */
    protected $details;

    /**
     * @var string
     */
    protected $personalSpace;

    /**
     * @return string
     */
    public function getOperations()
    {
        return $this->operations;
    }

    /**
     * @param string $operations
     *
     * @return self
     */
    public function setOperations($operations): self
    {
        $this->operations = $operations;

        return $this;
    }

    /**
     * @return string
     */
    public function getDetails()
    {
        return $this->details;
    }

    /**
     * @param string $details
     *
     * @return self
     */
    public function setDetails($details): self
    {
        $this->details = $details;

        return $this;
    }

    /**
     * @return string
     */
    public function getPersonalSpace()
    {
        return $this->personalSpace;
    }

    /**
     * @param string $personalSpace
     *
     * @return self
     */
    public function setPersonalSpace($personalSpace): self
    {
        $this->personalSpace = $personalSpace;

        return $this;
    }
}
