<?php

declare(strict_types = 1);

namespace MichalHepner\AtlassianRestClient\ConfluenceCloud\Model;

class ContentMetadataCurrentuserObjectFavouritedObject
{
    /**
     * @var boolean
     */
    protected $isFavourite;

    /**
     * @var string
     */
    protected $favouritedDate;

    /**
     * @return boolean
     */
    public function getIsFavourite()
    {
        return $this->isFavourite;
    }

    /**
     * @param boolean $isFavourite
     *
     * @return self
     */
    public function setIsFavourite($isFavourite): self
    {
        $this->isFavourite = $isFavourite;

        return $this;
    }

    /**
     * @return string
     */
    public function getFavouritedDate()
    {
        return $this->favouritedDate;
    }

    /**
     * @param string $favouritedDate
     *
     * @return self
     */
    public function setFavouritedDate($favouritedDate): self
    {
        $this->favouritedDate = $favouritedDate;

        return $this;
    }
}
