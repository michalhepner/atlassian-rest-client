<?php

declare(strict_types = 1);

namespace MichalHepner\AtlassianRestClient\ConfluenceCloud\Factory;

use MichalHepner\AtlassianRestClient\Factory\AbstractCollectionFactory;
use MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\OperationCheckResult;
use MichalHepner\AtlassianRestClient\ConfluenceCloud\Model\ContentCommentExtensionsObjectResolutionObjectLastModifierAbstractObjectOperationsArray;

class ContentCommentExtensionsObjectResolutionObjectLastModifierObjectOperationsArrayFactory extends AbstractCollectionFactory
{
    protected function getCreatedClass(): string
    {
        return ContentCommentExtensionsObjectResolutionObjectLastModifierAbstractObjectOperationsArray::class;
    }

    protected function getItemClass(): string
    {
        return OperationCheckResult::class;
    }
}
