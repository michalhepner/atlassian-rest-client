<?php

declare(strict_types = 1);

namespace MichalHepner\AtlassianRestClient\ConfluenceCloud\Model;

class ContentTemplateCreate
{
    /**
     * The name of the new template.
     * 
     * REQUIRED
     * 
     * @var string
     */
    protected $name;

    /**
     * The type of the new template. Set to `page`.
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
     * A description of the new template.
     * 
     * @var string
     */
    protected $description;

    /**
     * Labels for the new template.
     * 
     * @var \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\ContentTemplateCreateLabelsArray
     */
    protected $labels;

    /**
     * The key for the space of the new template. Only applies to space templates. 
     * If the spaceKey is not specified, the template will be created as a global 
     * template.
     * 
     * @var \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\ContentTemplateCreateSpaceObject
     */
    protected $space;

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
     * @return \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\ContentTemplateCreateLabelsArray
     */
    public function getLabels()
    {
        return $this->labels;
    }

    /**
     * @param \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\ContentTemplateCreateLabelsArray $labels
     *
     * @return self
     */
    public function setLabels($labels): self
    {
        $this->labels = $labels;

        return $this;
    }

    /**
     * @return \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\ContentTemplateCreateSpaceObject
     */
    public function getSpace()
    {
        return $this->space;
    }

    /**
     * @param \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\ContentTemplateCreateSpaceObject $space
     *
     * @return self
     */
    public function setSpace($space): self
    {
        $this->space = $space;

        return $this;
    }
}
