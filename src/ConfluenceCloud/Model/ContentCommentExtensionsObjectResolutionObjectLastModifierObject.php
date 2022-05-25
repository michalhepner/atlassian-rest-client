<?php

declare(strict_types = 1);

namespace MichalHepner\AtlassianRestClient\ConfluenceCloud\Model;

class ContentCommentExtensionsObjectResolutionObjectLastModifierObject
{
    /**
     * @var string
     */
    protected $type;

    /**
     * @var \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\Icon
     */
    protected $profilePicture;

    /**
     * @var string
     */
    protected $displayName;

    /**
     * @var \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\ContentCommentExtensionsObjectResolutionObjectLastModifierAbstractObjectOperationsArray
     */
    protected $operations;

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

    /**
     * @return \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\Icon
     */
    public function getProfilePicture()
    {
        return $this->profilePicture;
    }

    /**
     * @param \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\Icon $profilePicture
     *
     * @return self
     */
    public function setProfilePicture($profilePicture): self
    {
        $this->profilePicture = $profilePicture;

        return $this;
    }

    /**
     * @return string
     */
    public function getDisplayName()
    {
        return $this->displayName;
    }

    /**
     * @param string $displayName
     *
     * @return self
     */
    public function setDisplayName($displayName): self
    {
        $this->displayName = $displayName;

        return $this;
    }

    /**
     * @return \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\ContentCommentExtensionsObjectResolutionObjectLastModifierAbstractObjectOperationsArray
     */
    public function getOperations()
    {
        return $this->operations;
    }

    /**
     * @param \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\ContentCommentExtensionsObjectResolutionObjectLastModifierAbstractObjectOperationsArray $operations
     *
     * @return self
     */
    public function setOperations($operations): self
    {
        $this->operations = $operations;

        return $this;
    }
}
