<?php

declare(strict_types = 1);

namespace MichalHepner\AtlassianRestClient\ConfluenceCloud\Model;

class SpaceUpdate
{
    /**
     * The name of the space.
     * 
     * @var string
     */
    protected $name;

    /**
     * @var \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\SpaceDescriptionCreate
     */
    protected $description;

    /**
     * The page to set as the homepage of the space.
     * 
     * @var \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\SpaceUpdateHomepageObject
     */
    protected $homepage;

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     *
     * @return self
     */
    public function setName($name): self
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\SpaceDescriptionCreate
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\SpaceDescriptionCreate $description
     *
     * @return self
     */
    public function setDescription($description): self
    {
        $this->description = $description;

        return $this;
    }

    /**
     * @return \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\SpaceUpdateHomepageObject
     */
    public function getHomepage()
    {
        return $this->homepage;
    }

    /**
     * @param \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\SpaceUpdateHomepageObject $homepage
     *
     * @return self
     */
    public function setHomepage($homepage): self
    {
        $this->homepage = $homepage;

        return $this;
    }
}
