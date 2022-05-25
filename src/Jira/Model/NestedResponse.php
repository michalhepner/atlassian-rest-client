<?php

declare(strict_types=1);

namespace MichalHepner\AtlassianRestClient\Jira\Model;

class NestedResponse
{
    /**
     * @var int
     */
    protected $status;

    /**
     * @var ErrorCollection
     */
    protected $errorCollection;

    /**
     * @return int
     */
    public function getStatus(): int
    {
        return $this->status;
    }

    /**
     * @param int $status
     *
     * @return NestedResponse
     */
    public function setStatus(int $status): NestedResponse
    {
        $this->status = $status;

        return $this;
    }

    /**
     * @return ErrorCollection
     */
    public function getErrorCollection(): ErrorCollection
    {
        return $this->errorCollection;
    }

    /**
     * @param ErrorCollection $errorCollection
     *
     * @return NestedResponse
     */
    public function setErrorCollection(ErrorCollection $errorCollection): NestedResponse
    {
        $this->errorCollection = $errorCollection;

        return $this;
    }
}
