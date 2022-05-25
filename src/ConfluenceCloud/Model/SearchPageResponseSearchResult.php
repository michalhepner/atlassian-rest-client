<?php

declare(strict_types = 1);

namespace MichalHepner\AtlassianRestClient\ConfluenceCloud\Model;

class SearchPageResponseSearchResult
{
    /**
     * REQUIRED
     * 
     * @var \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\SearchPageResponseSearchResultResultsArray
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
     * REQUIRED
     * 
     * @var integer
     */
    protected $totalSize;

    /**
     * REQUIRED
     * 
     * @var string
     */
    protected $cqlQuery;

    /**
     * REQUIRED
     * 
     * @var integer
     */
    protected $searchDuration;

    /**
     * REQUIRED
     * 
     * @var \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\GenericLinks
     */
    protected $_links;

    /**
     * @return \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\SearchPageResponseSearchResultResultsArray
     */
    public function getResults()
    {
        return $this->results;
    }

    /**
     * @param \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\SearchPageResponseSearchResultResultsArray $results
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

    /**
     * @return integer
     */
    public function getTotalSize()
    {
        return $this->totalSize;
    }

    /**
     * @param integer $totalSize
     *
     * @return self
     */
    public function setTotalSize($totalSize): self
    {
        $this->totalSize = $totalSize;

        return $this;
    }

    /**
     * @return string
     */
    public function getCqlQuery()
    {
        return $this->cqlQuery;
    }

    /**
     * @param string $cqlQuery
     *
     * @return self
     */
    public function setCqlQuery($cqlQuery): self
    {
        $this->cqlQuery = $cqlQuery;

        return $this;
    }

    /**
     * @return integer
     */
    public function getSearchDuration()
    {
        return $this->searchDuration;
    }

    /**
     * @param integer $searchDuration
     *
     * @return self
     */
    public function setSearchDuration($searchDuration): self
    {
        $this->searchDuration = $searchDuration;

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
