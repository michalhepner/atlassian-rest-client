<?php

declare(strict_types = 1);

namespace MichalHepner\AtlassianRestClient\ConfluenceCloud\Model;

class UserDetailsBusinessObject
{
    /**
     * This property has been deprecated due to privacy changes. There is no replacement. See the
     * [migration guide](https://developer.atlassian.com/cloud/confluence/deprecation-notice-user-privacy-api-migration-guide/)
     * for details.
     * 
     * REQUIRED
     * 
     * @var string
     */
    protected $position;

    /**
     * This property has been deprecated due to privacy changes. There is no replacement. See the
     * [migration guide](https://developer.atlassian.com/cloud/confluence/deprecation-notice-user-privacy-api-migration-guide/)
     * for details.
     * 
     * REQUIRED
     * 
     * @var string
     */
    protected $department;

    /**
     * This property has been deprecated due to privacy changes. There is no replacement. See the
     * [migration guide](https://developer.atlassian.com/cloud/confluence/deprecation-notice-user-privacy-api-migration-guide/)
     * for details.
     * 
     * REQUIRED
     * 
     * @var string
     */
    protected $location;

    /**
     * @return string
     */
    public function getPosition()
    {
        return $this->position;
    }

    /**
     * @param string $position
     *
     * @return self
     */
    public function setPosition($position): self
    {
        $this->position = $position;

        return $this;
    }

    /**
     * @return string
     */
    public function getDepartment()
    {
        return $this->department;
    }

    /**
     * @param string $department
     *
     * @return self
     */
    public function setDepartment($department): self
    {
        $this->department = $department;

        return $this;
    }

    /**
     * @return string
     */
    public function getLocation()
    {
        return $this->location;
    }

    /**
     * @param string $location
     *
     * @return self
     */
    public function setLocation($location): self
    {
        $this->location = $location;

        return $this;
    }
}
