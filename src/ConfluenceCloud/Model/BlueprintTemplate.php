<?php

declare(strict_types = 1);

namespace MichalHepner\AtlassianRestClient\ConfluenceCloud\Model;

class BlueprintTemplate
{
    /**
     * REQUIRED
     * 
     * @var string
     */
    protected $templateId;

    /**
     * REQUIRED
     * 
     * @var \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\BlueprintTemplateOriginalTemplateObject
     */
    protected $originalTemplate;

    /**
     * REQUIRED
     * 
     * @var string
     */
    protected $referencingBlueprint;

    /**
     * REQUIRED
     * 
     * @var string
     */
    protected $name;

    /**
     * REQUIRED
     * 
     * @var string
     */
    protected $description;

    /**
     * REQUIRED
     * 
     * @var \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\BlueprintTemplateLabelsArray
     */
    protected $labels;

    /**
     * REQUIRED
     * 
     * @var string
     */
    protected $templateType;

    /**
     * @var \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\ContentBody
     */
    protected $body;

    /**
     * REQUIRED
     * 
     * @var \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\BlueprintTemplateExpandableObject
     */
    protected $_expandable;

    /**
     * REQUIRED
     * 
     * @var \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\GenericLinks
     */
    protected $_links;

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
     * @return \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\BlueprintTemplateOriginalTemplateObject
     */
    public function getOriginalTemplate()
    {
        return $this->originalTemplate;
    }

    /**
     * @param \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\BlueprintTemplateOriginalTemplateObject $originalTemplate
     *
     * @return self
     */
    public function setOriginalTemplate($originalTemplate): self
    {
        $this->originalTemplate = $originalTemplate;

        return $this;
    }

    /**
     * @return string
     */
    public function getReferencingBlueprint()
    {
        return $this->referencingBlueprint;
    }

    /**
     * @param string $referencingBlueprint
     *
     * @return self
     */
    public function setReferencingBlueprint($referencingBlueprint): self
    {
        $this->referencingBlueprint = $referencingBlueprint;

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
     * @return \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\BlueprintTemplateLabelsArray
     */
    public function getLabels()
    {
        return $this->labels;
    }

    /**
     * @param \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\BlueprintTemplateLabelsArray $labels
     *
     * @return self
     */
    public function setLabels($labels): self
    {
        $this->labels = $labels;

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
     * @return \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\ContentBody
     */
    public function getBody()
    {
        return $this->body;
    }

    /**
     * @param \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\ContentBody $body
     *
     * @return self
     */
    public function setBody($body): self
    {
        $this->body = $body;

        return $this;
    }

    /**
     * @return \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\BlueprintTemplateExpandableObject
     */
    public function get_expandable()
    {
        return $this->_expandable;
    }

    /**
     * @param \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\BlueprintTemplateExpandableObject $_expandable
     *
     * @return self
     */
    public function set_expandable($_expandable): self
    {
        $this->_expandable = $_expandable;

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
