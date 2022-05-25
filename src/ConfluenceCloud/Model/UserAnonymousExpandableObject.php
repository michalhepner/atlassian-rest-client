<?php

declare(strict_types = 1);

namespace MichalHepner\AtlassianRestClient\ConfluenceCloud\Model;

class UserAnonymousExpandableObject
{
    /**
     * @var string
     */
    protected $operations;

    /**
     * @return string
     */
    public function getOperations()
    {
        return $this->operations;
    }

    /**
     * @param string $operations
     *
     * @return self
     */
    public function setOperations($operations): self
    {
        $this->operations = $operations;

        return $this;
    }
}
