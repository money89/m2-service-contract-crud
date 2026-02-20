<?php

declare(strict_types=1);

namespace Vendor\ServiceContractCrud\Model\ResourceModel;

use Magento\Framework\Model\ResourceModel\Db\AbstractDb;

class Item extends AbstractDb
{
    protected function _construct(): void
    {
        $this->_init('vendor_servicecontractcrud_item', 'item_id');
    }
}
