<?php

declare(strict_types = 1);

namespace MichalHepner\AtlassianRestClient\ConfluenceCloud\Model;

class UsersUserKeys
{
    /**
     * REQUIRED
     * 
     * @var \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\UsersUserKeysUsersArray
     */
    protected $users;

    /**
     * REQUIRED
     * 
     * @var \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\UsersUserKeysUserKeysArray
     */
    protected $userKeys;

    /**
     * @var \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\GenericLinks
     */
    protected $_links;

    /**
     * @return \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\UsersUserKeysUsersArray
     */
    public function getUsers()
    {
        return $this->users;
    }

    /**
     * @param \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\UsersUserKeysUsersArray $users
     *
     * @return self
     */
    public function setUsers($users): self
    {
        $this->users = $users;

        return $this;
    }

    /**
     * @return \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\UsersUserKeysUserKeysArray
     */
    public function getUserKeys()
    {
        return $this->userKeys;
    }

    /**
     * @param \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\UsersUserKeysUserKeysArray $userKeys
     *
     * @return self
     */
    public function setUserKeys($userKeys): self
    {
        $this->userKeys = $userKeys;

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
