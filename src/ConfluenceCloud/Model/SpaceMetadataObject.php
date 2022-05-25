<?php

declare(strict_types = 1);

namespace MichalHepner\AtlassianRestClient\ConfluenceCloud\Model;

class SpaceMetadataObject
{
    /**
     * REQUIRED
     * 
     * @var \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\LabelArray
     */
    protected $labels;

    /**
     * @return \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\LabelArray
     */
    public function getLabels()
    {
        return $this->labels;
    }

    /**
     * @param \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\LabelArray $labels
     *
     * @return self
     */
    public function setLabels($labels): self
    {
        $this->labels = $labels;

        return $this;
    }
}
