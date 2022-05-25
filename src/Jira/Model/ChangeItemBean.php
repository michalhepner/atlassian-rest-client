<?php

declare(strict_types = 1);

namespace MichalHepner\AtlassianRestClient\Jira\Model;

class ChangeItemBean
{
    /**
     * The name of the field changed.
     *
     * @var string
     */
    protected $field;

    /**
     * The type of the field changed.
     *
     * @var string
     */
    protected $fieldtype;

    /**
     * The ID of the field changed.
     *
     * @var string
     */
    protected $fieldId;

    /**
     * The details of the original value.
     *
     * @var string
     */
    protected $from;

    /**
     * The details of the original value as a string.
     *
     * @var string
     */
    protected $fromString;

    /**
     * The details of the new value.
     *
     * @var string
     */
    protected $to;

    /**
     * The details of the new value as a string.
     *
     * @var string
     */
    protected $toString;

    /**
     * @return string
     */
    public function getField(): string
    {
        return $this->field;
    }

    /**
     * @param string $field
     *
     * @return ChangeItemBean
     */
    public function setField(string $field): ChangeItemBean
    {
        $this->field = $field;

        return $this;
    }

    /**
     * @return string
     */
    public function getFieldtype(): string
    {
        return $this->fieldtype;
    }

    /**
     * @param string $fieldtype
     *
     * @return ChangeItemBean
     */
    public function setFieldtype(string $fieldtype): ChangeItemBean
    {
        $this->fieldtype = $fieldtype;

        return $this;
    }

    /**
     * @return string
     */
    public function getFieldId(): string
    {
        return $this->fieldId;
    }

    /**
     * @param string $fieldId
     *
     * @return ChangeItemBean
     */
    public function setFieldId(string $fieldId): ChangeItemBean
    {
        $this->fieldId = $fieldId;

        return $this;
    }

    /**
     * @return string
     */
    public function getFrom(): string
    {
        return $this->from;
    }

    /**
     * @param string $from
     *
     * @return ChangeItemBean
     */
    public function setFrom(string $from): ChangeItemBean
    {
        $this->from = $from;

        return $this;
    }

    /**
     * @return string
     */
    public function getFromString(): string
    {
        return $this->fromString;
    }

    /**
     * @param string $fromString
     *
     * @return ChangeItemBean
     */
    public function setFromString(string $fromString): ChangeItemBean
    {
        $this->fromString = $fromString;

        return $this;
    }

    /**
     * @return string
     */
    public function getTo(): string
    {
        return $this->to;
    }

    /**
     * @param string $to
     *
     * @return ChangeItemBean
     */
    public function setTo(string $to): ChangeItemBean
    {
        $this->to = $to;

        return $this;
    }

    /**
     * @return string
     */
    public function getToString(): string
    {
        return $this->toString;
    }

    /**
     * @param string $toString
     *
     * @return ChangeItemBean
     */
    public function setToString(string $toString): ChangeItemBean
    {
        $this->toString = $toString;

        return $this;
    }
}