<?php

declare(strict_types = 1);

namespace MichalHepner\AtlassianRestClient\ConfluenceCloud\Model;

class SpacePermissionSubjectsObjectGroupObject
{
    /**
     * REQUIRED
     *
     * @var \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\SpacePermissionSubjectsObjectGroupAbstractObjectResultsArray
     */
    protected $results;

    /**
     * REQUIRED
     *
     * @var integer
     */
    protected $size;

    /**
     * @return \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\SpacePermissionSubjectsObjectGroupAbstractObjectResultsArray
     */
    public function getResults()
    {
        return $this->results;
    }

    /**
     * @param \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\SpacePermissionSubjectsObjectGroupAbstractObjectResultsArray $results
     *
     * @return self
     */
    public function setResults($results): self
    {
        $this->results = $results;

        return $this;
    }

    /**
     * @return integer
     */
    public function getSize()
    {
        return $this->size;
    }

    /**
     * @param integer $size
     *
     * @return self
     */
    public function setSize($size): self
    {
        $this->size = $size;

        return $this;
    }
}
