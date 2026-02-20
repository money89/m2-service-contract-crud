<?php

declare(strict_types=1);

namespace Vendor\ServiceContractCrud\Model;

use Magento\Framework\Api\SearchResults;
use Vendor\ServiceContractCrud\Api\Data\ItemSearchResultsInterface;

class ItemSearchResults extends SearchResults implements ItemSearchResultsInterface
{
}
