<?php

declare(strict_types = 1);

namespace MichalHepner\AtlassianRestClient\ConfluenceCloud\Model;

class AttachmentUpdateContainerObject
{
    /**
     * The `id` of the parent content.
     * 
     * REQUIRED
     * 
     * @var string
     */
    protected $id;

    /**
     * The content type. You can only attach attachments to content 
     * of type: `page`, `blogpost`.
     * 
     * REQUIRED
     * 
     * @var string
     */
    protected $type;

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
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param string $type
     *
     * @return self
     */
    public function setType($type): self
    {
        $this->type = $type;

        return $this;
    }
}
