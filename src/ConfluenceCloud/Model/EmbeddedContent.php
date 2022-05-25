<?php

declare(strict_types = 1);

namespace MichalHepner\AtlassianRestClient\ConfluenceCloud\Model;

class EmbeddedContent
{
    /**
     * @var integer
     */
    protected $entityId;

    /**
     * @var \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\Embeddable
     */
    protected $entity;

    /**
     * @return integer
     */
    public function getEntityId()
    {
        return $this->entityId;
    }

    /**
     * @param integer $entityId
     *
     * @return self
     */
    public function setEntityId($entityId): self
    {
        $this->entityId = $entityId;

        return $this;
    }

    /**
     * @return \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\Embeddable
     */
    public function getEntity()
    {
        return $this->entity;
    }

    /**
     * @param \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\Embeddable $entity
     *
     * @return self
     */
    public function setEntity($entity): self
    {
        $this->entity = $entity;

        return $this;
    }
}
