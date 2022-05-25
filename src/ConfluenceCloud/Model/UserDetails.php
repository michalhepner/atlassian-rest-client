<?php

declare(strict_types = 1);

namespace MichalHepner\AtlassianRestClient\ConfluenceCloud\Model;

class UserDetails
{
    /**
     * @var \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\UserDetailsBusinessObject
     */
    protected $business;

    /**
     * @var \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\UserDetailsPersonalObject
     */
    protected $personal;

    /**
     * @return \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\UserDetailsBusinessObject
     */
    public function getBusiness()
    {
        return $this->business;
    }

    /**
     * @param \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\UserDetailsBusinessObject $business
     *
     * @return self
     */
    public function setBusiness($business): self
    {
        $this->business = $business;

        return $this;
    }

    /**
     * @return \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\UserDetailsPersonalObject
     */
    public function getPersonal()
    {
        return $this->personal;
    }

    /**
     * @param \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\UserDetailsPersonalObject $personal
     *
     * @return self
     */
    public function setPersonal($personal): self
    {
        $this->personal = $personal;

        return $this;
    }
}
