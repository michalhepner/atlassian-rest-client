<?php

declare(strict_types = 1);

namespace MichalHepner\AtlassianRestClient\ConfluenceCloud\Model;

class AuditRecordCreate
{
    /**
     * The user that actioned the event. If `author` is not specified, then all 
     * `author` properties will be set to null/empty, except for `type` which 
     * will be set to 'user'.
     * 
     * @var \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\AuditRecordCreateAuthorObject
     */
    protected $author;

    /**
     * The IP address of the computer where the event was initiated from.
     * 
     * REQUIRED
     * 
     * @var string
     */
    protected $remoteAddress;

    /**
     * The creation date-time of the audit record, as a timestamp. This is converted 
     * to a date-time display in the Confluence UI. If the `creationDate` is not 
     * specified, then it will be set to the timestamp for the current date-time.
     * 
     * @var integer
     */
    protected $creationDate;

    /**
     * The summary of the event, which is displayed in the 'Change' column on 
     * the audit log in the Confluence UI.
     * 
     * @var string
     */
    protected $summary;

    /**
     * A long description of the event, which is displayed in the 'Description' 
     * field on the audit log in the Confluence UI.
     * 
     * @var string
     */
    protected $description;

    /**
     * The category of the event, which is displayed in the 'Event type' column 
     * on the audit log in the Confluence UI.
     * 
     * @var string
     */
    protected $category;

    /**
     * Indicates whether the event was actioned by a system administrator.
     * 
     * @var boolean
     */
    protected $sysAdmin;

    /**
     * @var \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\AffectedObject
     */
    protected $affectedObject;

    /**
     * The values that were changed in the event.
     * 
     * @var \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\AuditRecordCreateChangedValuesArray
     */
    protected $changedValues;

    /**
     * Objects that were associated with the event. For example, if the event 
     * was a space permission change then the associated object would be the 
     * space.
     * 
     * @var \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\AuditRecordCreateAssociatedObjectsArray
     */
    protected $associatedObjects;

    /**
     * @return \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\AuditRecordCreateAuthorObject
     */
    public function getAuthor()
    {
        return $this->author;
    }

    /**
     * @param \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\AuditRecordCreateAuthorObject $author
     *
     * @return self
     */
    public function setAuthor($author): self
    {
        $this->author = $author;

        return $this;
    }

    /**
     * @return string
     */
    public function getRemoteAddress()
    {
        return $this->remoteAddress;
    }

    /**
     * @param string $remoteAddress
     *
     * @return self
     */
    public function setRemoteAddress($remoteAddress): self
    {
        $this->remoteAddress = $remoteAddress;

        return $this;
    }

    /**
     * @return integer
     */
    public function getCreationDate()
    {
        return $this->creationDate;
    }

    /**
     * @param integer $creationDate
     *
     * @return self
     */
    public function setCreationDate($creationDate): self
    {
        $this->creationDate = $creationDate;

        return $this;
    }

    /**
     * @return string
     */
    public function getSummary()
    {
        return $this->summary;
    }

    /**
     * @param string $summary
     *
     * @return self
     */
    public function setSummary($summary): self
    {
        $this->summary = $summary;

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
     * @return string
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * @param string $category
     *
     * @return self
     */
    public function setCategory($category): self
    {
        $this->category = $category;

        return $this;
    }

    /**
     * @return boolean
     */
    public function getSysAdmin()
    {
        return $this->sysAdmin;
    }

    /**
     * @param boolean $sysAdmin
     *
     * @return self
     */
    public function setSysAdmin($sysAdmin): self
    {
        $this->sysAdmin = $sysAdmin;

        return $this;
    }

    /**
     * @return \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\AffectedObject
     */
    public function getAffectedObject()
    {
        return $this->affectedObject;
    }

    /**
     * @param \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\AffectedObject $affectedObject
     *
     * @return self
     */
    public function setAffectedObject($affectedObject): self
    {
        $this->affectedObject = $affectedObject;

        return $this;
    }

    /**
     * @return \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\AuditRecordCreateChangedValuesArray
     */
    public function getChangedValues()
    {
        return $this->changedValues;
    }

    /**
     * @param \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\AuditRecordCreateChangedValuesArray $changedValues
     *
     * @return self
     */
    public function setChangedValues($changedValues): self
    {
        $this->changedValues = $changedValues;

        return $this;
    }

    /**
     * @return \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\AuditRecordCreateAssociatedObjectsArray
     */
    public function getAssociatedObjects()
    {
        return $this->associatedObjects;
    }

    /**
     * @param \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\AuditRecordCreateAssociatedObjectsArray $associatedObjects
     *
     * @return self
     */
    public function setAssociatedObjects($associatedObjects): self
    {
        $this->associatedObjects = $associatedObjects;

        return $this;
    }
}
