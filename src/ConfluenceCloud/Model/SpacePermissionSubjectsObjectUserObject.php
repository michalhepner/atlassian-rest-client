<?php

declare(strict_types = 1);

namespace MichalHepner\AtlassianRestClient\ConfluenceCloud\Model;

class SpacePermissionSubjectsObjectUserObject
{
    /**
     * REQUIRED
     *
     * @var \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\SpacePermissionSubjectsObjectUserAbstractObjectResultsArray
     */
    protected $results;

    /**
     * REQUIRED
     *
     * @var integer
     */
    protected $size;

    /**
     * @return \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\SpacePermissionSubjectsObjectUserAbstractObjectResultsArray
     */
    public function getResults()
    {
        return $this->results;
    }

    /**
     * @param \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\SpacePermissionSubjectsObjectUserAbstractObjectResultsArray $results
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
