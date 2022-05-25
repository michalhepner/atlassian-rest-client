<?php

declare(strict_types = 1);

namespace MichalHepner\AtlassianRestClient\Jira\Model;

class ErrorCollection
{
    /**
     * @var array
     */
    protected $errorMessages;

    /**
     * @var array
     */
    protected $errors;

    /**
     * @var int
     */
    protected $status;

    /**
     * @return array
     */
    public function getErrorMessages(): array
    {
        return $this->errorMessages;
    }

    /**
     * @param array $errorMessages
     *
     * @return ErrorCollection
     */
    public function setErrorMessages(array $errorMessages): ErrorCollection
    {
        $this->errorMessages = $errorMessages;

        return $this;
    }

    /**
     * @return array
     */
    public function getErrors(): array
    {
        return $this->errors;
    }

    /**
     * @param array $errors
     *
     * @return ErrorCollection
     */
    public function setErrors(array $errors): ErrorCollection
    {
        $this->errors = $errors;

        return $this;
    }

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
     * @return ErrorCollection
     */
    public function setStatus(int $status): ErrorCollection
    {
        $this->status = $status;

        return $this;
    }
}
