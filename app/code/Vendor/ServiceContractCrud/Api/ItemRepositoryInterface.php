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
     * @return \Vendor\ServiceContractCrud\Api\Data\ItemInterface
     */
    public function save(ItemInterface $item): ItemInterface;

    /**
     * @throws NoSuchEntityException
     * @return \Vendor\ServiceContractCrud\Api\Data\ItemInterface
     */
    public function getById(int $itemId): ItemInterface;

    /**
    * @return \Vendor\ServiceContractCrud\Api\Data\ItemSearchResultsInterface
    */
    public function getList(SearchCriteriaInterface $searchCriteria): ItemSearchResultsInterface;

    /**
     * @throws CouldNotDeleteException
     * @return \Vendor\ServiceContractCrud\Api\Data\ItemInterface
     */
    public function delete(ItemInterface $item): bool;

    /**
     * @throws CouldNotDeleteException
     * @throws NoSuchEntityException
     * @return bool
     */
    public function deleteById(int $itemId): bool;
}
