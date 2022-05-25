<?php

declare(strict_types = 1);

namespace MichalHepner\AtlassianRestClient\Jira\Model;

use MichalHepner\AtlassianRestClient\Jira\Collection\LinkGroupBeanCollectionAbstract;

class OpsbarBean
{
    /**
     * @var LinkGroupBeanCollectionAbstract
     */
    protected $linkGroups;

    /**
     * @return LinkGroupBeanCollectionAbstract
     */
    public function getLinkGroups(): LinkGroupBeanCollectionAbstract
    {
        return $this->linkGroups;
    }

    /**
     * @param LinkGroupBeanCollectionAbstract $linkGroups
     *
     * @return OpsbarBean
     */
    public function setLinkGroups(LinkGroupBeanCollectionAbstract $linkGroups): OpsbarBean
    {
        $this->linkGroups = $linkGroups;

        return $this;
    }
}
