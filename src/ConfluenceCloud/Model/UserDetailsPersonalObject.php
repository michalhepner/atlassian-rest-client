<?php

declare(strict_types = 1);

namespace MichalHepner\AtlassianRestClient\ConfluenceCloud\Model;

class UserDetailsPersonalObject
{
    /**
     * This property has been deprecated due to privacy changes. There is no replacement. See the
     * [migration guide](https://developer.atlassian.com/cloud/confluence/deprecation-notice-user-privacy-api-migration-guide/)
     * for details.
     * 
     * @var string
     */
    protected $phone;

    /**
     * This property has been deprecated due to privacy changes. There is no replacement. See the
     * [migration guide](https://developer.atlassian.com/cloud/confluence/deprecation-notice-user-privacy-api-migration-guide/)
     * for details.
     * 
     * @var string
     */
    protected $im;

    /**
     * This property has been deprecated due to privacy changes. There is no replacement. See the
     * [migration guide](https://developer.atlassian.com/cloud/confluence/deprecation-notice-user-privacy-api-migration-guide/)
     * for details.
     * 
     * @var string
     */
    protected $website;

    /**
     * This property has been deprecated due to privacy changes. There is no replacement. See the
     * [migration guide](https://developer.atlassian.com/cloud/confluence/deprecation-notice-user-privacy-api-migration-guide/)
     * for details.
     * 
     * @var string
     */
    protected $email;

    /**
     * @return string
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * @param string $phone
     *
     * @return self
     */
    public function setPhone($phone): self
    {
        $this->phone = $phone;

        return $this;
    }

    /**
     * @return string
     */
    public function getIm()
    {
        return $this->im;
    }

    /**
     * @param string $im
     *
     * @return self
     */
    public function setIm($im): self
    {
        $this->im = $im;

        return $this;
    }

    /**
     * @return string
     */
    public function getWebsite()
    {
        return $this->website;
    }

    /**
     * @param string $website
     *
     * @return self
     */
    public function setWebsite($website): self
    {
        $this->website = $website;

        return $this;
    }

    /**
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param string $email
     *
     * @return self
     */
    public function setEmail($email): self
    {
        $this->email = $email;

        return $this;
    }
}
