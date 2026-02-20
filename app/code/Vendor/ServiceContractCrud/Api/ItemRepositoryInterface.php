<?php

declare(strict_types=1);

namespace Vendor\ServiceContractCrud\Api;

use Magento\Framework\Api\SearchCriteriaInterface;
use Magento\Framework\Exception\CouldNotDeleteException;
use Magento\Framework\Exception\CouldNotSaveException;
use Magento\Framework\Exception\NoSuchEntityException;
use Vendor\ServiceContractCrud\Api\Data\ItemInterface;
use Vendor\ServiceContractCrud\Api\Data\ItemSearchResultsInterface;

interface ItemRepositoryInterface
{
    /**
     * @throws CouldNotSaveException
     */
    public function save(ItemInterface $item): ItemInterface;

    /**
     * @throws NoSuchEntityException
     */
    public function getById(int $itemId): ItemInterface;

    public function getList(SearchCriteriaInterface $searchCriteria): ItemSearchResultsInterface;

    /**
     * @throws CouldNotDeleteException
     */
    public function delete(ItemInterface $item): bool;

    /**
     * @throws CouldNotDeleteException
     * @throws NoSuchEntityException
     */
    public function deleteById(int $itemId): bool;
}
