<?php

declare(strict_types = 1);

namespace MichalHepner\AtlassianRestClient\ConfluenceCloud\Model;

class ContentTemplateUpdate
{
    /**
     * The ID of the template being updated.
     * 
     * REQUIRED
     * 
     * @var string
     */
    protected $templateId;

    /**
     * The name of the template. Set to the current `name` if this field is 
     * not being updated.
     * 
     * REQUIRED
     * 
     * @var string
     */
    protected $name;

    /**
     * The type of the template. Set to `page`.
     * 
     * REQUIRED
     * 
     * @var string
     */
    protected $templateType;

    /**
     * REQUIRED
     * 
     * @var \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\ContentBodyCreate
     */
    protected $body;

    /**
     * A description of the template.
     * 
     * @var string
     */
    protected $description;

    /**
     * Labels for the template.
     * 
     * @var \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\ContentTemplateUpdateLabelsArray
     */
    protected $labels;

    /**
     * The key for the space of the template. Required if the template is a 
     * space template. Set this to the current `space.key`.
     * 
     * @var \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\ContentTemplateUpdateSpaceObject
     */
    protected $space;

    /**
     * @return string
     */
    public function getTemplateId()
    {
        return $this->templateId;
    }

    /**
     * @param string $templateId
     *
     * @return self
     */
    public function setTemplateId($templateId): self
    {
        $this->templateId = $templateId;

        return $this;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     *
     * @return self
     */
    public function setName($name): self
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return string
     */
    public function getTemplateType()
    {
        return $this->templateType;
    }

    /**
     * @param string $templateType
     *
     * @return self
     */
    public function setTemplateType($templateType): self
    {
        $this->templateType = $templateType;

        return $this;
    }

    /**
     * @return \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\ContentBodyCreate
     */
    public function getBody()
    {
        return $this->body;
    }

    /**
     * @param \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\ContentBodyCreate $body
     *
     * @return self
     */
    public function setBody($body): self
    {
        $this->body = $body;

        return $this;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param string $description
     *
     * @return self
     */
    public function setDescription($description): self
    {
        $this->description = $description;

        return $this;
    }

    /**
     * @return \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\ContentTemplateUpdateLabelsArray
     */
    public function getLabels()
    {
        return $this->labels;
    }

    /**
     * @param \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\ContentTemplateUpdateLabelsArray $labels
     *
     * @return self
     */
    public function setLabels($labels): self
    {
        $this->labels = $labels;

        return $this;
    }

    /**
     * @return \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\ContentTemplateUpdateSpaceObject
     */
    public function getSpace()
    {
        return $this->space;
    }

    /**
     * @param \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\ContentTemplateUpdateSpaceObject $space
     *
     * @return self
     */
    public function setSpace($space): self
    {
        $this->space = $space;

        return $this;
    }
}
