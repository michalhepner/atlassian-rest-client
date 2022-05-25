<?php

declare(strict_types = 1);

namespace MichalHepner\AtlassianRestClient\ConfluenceCloud\Model;

class OperationCheckResult
{
    /**
     * The operation itself.
     * 
     * REQUIRED
     * 
     * @var string
     */
    protected $operation;

    /**
     * The space or content type that the operation applies to.
     * 
     * REQUIRED
     * 
     * @var string
     */
    protected $targetType;

    /**
     * @return string
     */
    public function getOperation()
    {
        return $this->operation;
    }

    /**
     * @param string $operation
     *
     * @return self
     */
    public function setOperation($operation): self
    {
        $this->operation = $operation;

        return $this;
    }

    /**
     * @return string
     */
    public function getTargetType()
    {
        return $this->targetType;
    }

    /**
     * @param string $targetType
     *
     * @return self
     */
    public function setTargetType($targetType): self
    {
        $this->targetType = $targetType;

        return $this;
    }
}
