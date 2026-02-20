<?php

declare(strict_types=1);

namespace Vendor\ServiceContractCrud\Model\ResourceModel\Item;

use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;
use Vendor\ServiceContractCrud\Model\Item;
use Vendor\ServiceContractCrud\Model\ResourceModel\Item as ItemResource;

class Collection extends AbstractCollection
{
    protected function _construct(): void
    {
        $this->_init(Item::class, ItemResource::class);
    }
}
