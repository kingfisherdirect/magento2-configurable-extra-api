<?php

namespace KingfisherDirect\ConfigurableExtraApi\Api;

use KingfisherDirect\ConfigurableExtraApi\Api\Data\ConfigurableProductParentsInterface;

interface ConfigurableLinksInterface
{
    /**
     * Gets the parent identifiers by child.
     *
     * @return ConfigurableProductParentsInterface
     */
    public function getParentIdsByChild(int $childId): ConfigurableProductParentsInterface;
}
