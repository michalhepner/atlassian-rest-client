<?php

declare(strict_types = 1);

namespace MichalHepner\AtlassianRestClient\Jira\Model;

class EditMetaBean
{
    /**
     * A list of editable field details.
     *
     * @var array
     */
    protected $fields;

    /**
     * @return object
     */
    public function getFields()
    {
        return $this->fields;
    }

    /**
     * @param object $fields
     *
     * @return EditMetaBean
     */
    public function setFields($fields): EditMetaBean
    {
        $this->fields = $fields;

        return $this;
    }
}
