<?php

declare(strict_types=1);

namespace Vendor\ServiceContractCrud\Api\Data;

use Magento\Framework\Api\SearchResultsInterface;

interface ItemSearchResultsInterface extends SearchResultsInterface
{
    /**
     * @return \Vendor\ServiceContractCrud\Api\Data\ItemInterface[]
     */
    public function getItems(): array;

    /**
     * @param \Vendor\ServiceContractCrud\Api\Data\ItemInterface[] $items
     */
    public function setItems(array $items): ItemSearchResultsInterface;
}
