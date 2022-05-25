<?php

declare(strict_types = 1);

namespace MichalHepner\AtlassianRestClient\ConfluenceCloud\Model;

class AuditRecord
{
    /**
     * REQUIRED
     * 
     * @var \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\AuditRecordAuthorObject
     */
    protected $author;

    /**
     * REQUIRED
     * 
     * @var string
     */
    protected $remoteAddress;

    /**
     * The creation date-time of the audit record, as a timestamp.
     * 
     * REQUIRED
     * 
     * @var integer
     */
    protected $creationDate;

    /**
     * REQUIRED
     * 
     * @var string
     */
    protected $summary;

    /**
     * REQUIRED
     * 
     * @var string
     */
    protected $description;

    /**
     * REQUIRED
     * 
     * @var string
     */
    protected $category;

    /**
     * REQUIRED
     * 
     * @var boolean
     */
    protected $sysAdmin;

    /**
     * REQUIRED
     * 
     * @var \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\AffectedObject
     */
    protected $affectedObject;

    /**
     * REQUIRED
     * 
     * @var \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\AuditRecordChangedValuesArray
     */
    protected $changedValues;

    /**
     * REQUIRED
     * 
     * @var \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\AuditRecordAssociatedObjectsArray
     */
    protected $associatedObjects;

    /**
     * @return \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\AuditRecordAuthorObject
     */
    public function getAuthor()
    {
        return $this->author;
    }

    /**
     * @param \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\AuditRecordAuthorObject $author
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
     * @return \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\AuditRecordChangedValuesArray
     */
    public function getChangedValues()
    {
        return $this->changedValues;
    }

    /**
     * @param \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\AuditRecordChangedValuesArray $changedValues
     *
     * @return self
     */
    public function setChangedValues($changedValues): self
    {
        $this->changedValues = $changedValues;

        return $this;
    }

    /**
     * @return \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\AuditRecordAssociatedObjectsArray
     */
    public function getAssociatedObjects()
    {
        return $this->associatedObjects;
    }

    /**
     * @param \MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\AuditRecordAssociatedObjectsArray $associatedObjects
     *
     * @return self
     */
    public function setAssociatedObjects($associatedObjects): self
    {
        $this->associatedObjects = $associatedObjects;

        return $this;
    }
}
