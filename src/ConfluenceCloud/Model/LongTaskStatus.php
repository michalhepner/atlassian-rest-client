<?php

declare(strict_types = 1);

namespace MichalHepner\AtlassianRestClient\ConfluenceCloud\Model;

class LongTaskStatus
{
    /**
     * REQUIRED
     * 
     * @var string
     */
    protected $id;

    /**
     * REQUIRED
     * 
     * @var \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\LongTaskStatusNameObject
     */
    protected $name;

    /**
     * REQUIRED
     * 
     * @var integer
     */
    protected $elapsedTime;

    /**
     * REQUIRED
     * 
     * @var integer
     */
    protected $percentageComplete;

    /**
     * REQUIRED
     * 
     * @var boolean
     */
    protected $successful;

    /**
     * REQUIRED
     * 
     * @var \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\LongTaskStatusMessagesArray
     */
    protected $messages;

    /**
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param string $id
     *
     * @return self
     */
    public function setId($id): self
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @return \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\LongTaskStatusNameObject
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\LongTaskStatusNameObject $name
     *
     * @return self
     */
    public function setName($name): self
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return integer
     */
    public function getElapsedTime()
    {
        return $this->elapsedTime;
    }

    /**
     * @param integer $elapsedTime
     *
     * @return self
     */
    public function setElapsedTime($elapsedTime): self
    {
        $this->elapsedTime = $elapsedTime;

        return $this;
    }

    /**
     * @return integer
     */
    public function getPercentageComplete()
    {
        return $this->percentageComplete;
    }

    /**
     * @param integer $percentageComplete
     *
     * @return self
     */
    public function setPercentageComplete($percentageComplete): self
    {
        $this->percentageComplete = $percentageComplete;

        return $this;
    }

    /**
     * @return boolean
     */
    public function getSuccessful()
    {
        return $this->successful;
    }

    /**
     * @param boolean $successful
     *
     * @return self
     */
    public function setSuccessful($successful): self
    {
        $this->successful = $successful;

        return $this;
    }

    /**
     * @return \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\LongTaskStatusMessagesArray
     */
    public function getMessages()
    {
        return $this->messages;
    }

    /**
     * @param \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\LongTaskStatusMessagesArray $messages
     *
     * @return self
     */
    public function setMessages($messages): self
    {
        $this->messages = $messages;

        return $this;
    }
}
