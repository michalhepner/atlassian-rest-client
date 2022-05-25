<?php

declare(strict_types=1);

namespace MichalHepner\AtlassianRestClient\Document;

class MentionNode extends AbstractNode implements InlineNodeInterface
{
    const TYPE = 'mention';

    const ACCESS_LEVEL_NONE = 'NONE';
    const ACCESS_LEVEL_SITE = 'SITE';
    const ACCESS_LEVEL_APPLICATION = 'APPLICATION';
    const ACCESS_LEVEL_CONTAINER = 'CONTAINER';

    const USER_TYPE_DEFAULT = 'DEFAULT';
    const USER_TYPE_SPECIAL = 'SPECIAL';
    const USER_TYPE_APP = 'APP';

    /**
     * @var string
     */
    protected $id;

    /**
     * @var string|null
     */
    protected $accessLevel;

    /**
     * @var string|null
     */
    protected $userType;

    /**
     * @var string|null
     */
    protected $text;

    public function __construct(string $id)
    {
        $this->id = $id;
    }

    /**
     * @return null|string
     */
    public function getText(): ?string
    {
        return $this->text;
    }

    /**
     * @param null|string $text
     *
     * @return MentionNode
     */
    public function setText(?string $text): MentionNode
    {
        $this->text = $text;

        return $this;
    }

    /**
     * @return null|string
     */
    public function getAccessLevel(): ?string
    {
        return $this->accessLevel;
    }

    /**
     * @param null|string $accessLevel
     *
     * @return MentionNode
     */
    public function setAccessLevel(?string $accessLevel): MentionNode
    {
        $this->accessLevel = $accessLevel;

        return $this;
    }

    /**
     * @return null|string
     */
    public function getUserType(): ?string
    {
        return $this->userType;
    }

    /**
     * @param null|string $userType
     *
     * @return MentionNode
     */
    public function setUserType(?string $userType): MentionNode
    {
        $this->userType = $userType;

        return $this;
    }

    public function getType(): string
    {
        return self::TYPE;
    }

    public function toArray(): array
    {
        $data = [
            'type' => self::TYPE,
            'attrs' => [
                'id' => $this->id,
            ]
        ];

        !empty($this->text) && $data['attrs']['text'] = $this->text;
        !empty($this->userType) && $data['attrs']['userType'] = $this->userType;
        !empty($this->accessLevel) && $data['attrs']['accessLevel'] = $this->accessLevel;

        return $data;
    }
}
