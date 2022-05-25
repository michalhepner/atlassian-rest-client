<?php

declare(strict_types = 1);

namespace MichalHepner\AtlassianRestClient\ConfluenceCloud\Model;

class Label
{
    /**
     * REQUIRED
     * 
     * @var string
     */
    protected $prefix;

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
    protected $id;

    /**
     * REQUIRED
     * 
     * @var string
     */
    protected $label;

    /**
     * @return string
     */
    public function getPrefix()
    {
        return $this->prefix;
    }

    /**
     * @param string $prefix
     *
     * @return self
     */
    public function setPrefix($prefix): self
    {
        $this->prefix = $prefix;

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
    public function getLabel()
    {
        return $this->label;
    }

    /**
     * @param string $label
     *
     * @return self
     */
    public function setLabel($label): self
    {
        $this->label = $label;

        return $this;
    }
}
