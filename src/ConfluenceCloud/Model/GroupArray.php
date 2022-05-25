<?php

declare(strict_types = 1);

namespace MichalHepner\AtlassianRestClient\ConfluenceCloud\Model;

class GroupArray
{
    /**
     * REQUIRED
     * 
     * @var \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\GroupArrayResultsArray
     */
    protected $results;

    /**
     * REQUIRED
     * 
     * @var integer
     */
    protected $start;

    /**
     * REQUIRED
     * 
     * @var integer
     */
    protected $limit;

    /**
     * REQUIRED
     * 
     * @var integer
     */
    protected $size;

    /**
     * @return \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\GroupArrayResultsArray
     */
    public function getResults()
    {
        return $this->results;
    }

    /**
     * @param \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\GroupArrayResultsArray $results
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
    public function getStart()
    {
        return $this->start;
    }

    /**
     * @param integer $start
     *
     * @return self
     */
    public function setStart($start): self
    {
        $this->start = $start;

        return $this;
    }

    /**
     * @return integer
     */
    public function getLimit()
    {
        return $this->limit;
    }

    /**
     * @param integer $limit
     *
     * @return self
     */
    public function setLimit($limit): self
    {
        $this->limit = $limit;

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
