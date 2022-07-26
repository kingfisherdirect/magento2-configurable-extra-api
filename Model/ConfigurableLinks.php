<?php

namespace KingfisherDirect\ConfigurableExtraApi\Model;

use KingfisherDirect\ConfigurableExtraApi\Api\ConfigurableLinksInterface;
use KingfisherDirect\ConfigurableExtraApi\Api\Data\ConfigurableProductParentsInterface;
use KingfisherDirect\ConfigurableExtraApi\Model\Data\ConfigurableProductParents;
use Magento\ConfigurableProduct\Model\Product\Type\Configurable;

class ConfigurableLinks implements ConfigurableLinksInterface
{
    private Configurable $configurable;

    public function __construct(Configurable $configurable)
    {
        $this->configurable = $configurable;
    }

    public function getParentIdsByChild(int $childId): ConfigurableProductParentsInterface
    {
        $parentIds = $this->configurable->getParentIdsByChild($childId);

        $data = new ConfigurableProductParents();
        $data->parentIds = $parentIds;

        return $data;
    }
}
