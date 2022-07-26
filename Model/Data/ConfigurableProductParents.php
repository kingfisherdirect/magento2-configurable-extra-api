<?php

namespace KingfisherDirect\ConfigurableExtraApi\Model\Data;

use KingfisherDirect\ConfigurableExtraApi\Api\Data\ConfigurableProductParentsInterface;

class ConfigurableProductParents implements ConfigurableProductParentsInterface
{
    public array $parentIds = [];

    public function getParentIds(): array
    {
        return $this->parentIds;
    }
}
