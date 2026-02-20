<?php

declare(strict_types=1);

namespace Vendor\ServiceContractCrud\Model;

use Magento\Framework\Api\SearchCriteria\CollectionProcessorInterface;
use Magento\Framework\Api\SearchCriteriaInterface;
use Magento\Framework\Exception\CouldNotDeleteException;
use Magento\Framework\Exception\CouldNotSaveException;
use Magento\Framework\Exception\NoSuchEntityException;
use Vendor\ServiceContractCrud\Api\Data\ItemInterface;
use Vendor\ServiceContractCrud\Api\Data\ItemSearchResultsInterface;
use Vendor\ServiceContractCrud\Api\Data\ItemSearchResultsInterfaceFactory;
use Vendor\ServiceContractCrud\Api\ItemRepositoryInterface;
use Vendor\ServiceContractCrud\Model\ResourceModel\Item as ItemResource;
use Vendor\ServiceContractCrud\Model\ResourceModel\Item\CollectionFactory;

class ItemRepository implements ItemRepositoryInterface
{
    public function __construct(
        private readonly ItemResource $itemResource,
        private readonly ItemFactory $itemFactory,
        private readonly CollectionFactory $collectionFactory,
        private readonly ItemSearchResultsInterfaceFactory $searchResultsFactory,
        private readonly CollectionProcessorInterface $collectionProcessor
    ) {
    }

    public function save(ItemInterface $item): ItemInterface
    {
        try {
            $this->itemResource->save($item);
        } catch (\Exception $exception) {
            throw new CouldNotSaveException(
                __('Unable to save item: %1', $exception->getMessage()),
                $exception
            );
        }

        return $item;
    }

    public function getById(int $itemId): ItemInterface
    {
        $item = $this->itemFactory->create();
        $this->itemResource->load($item, $itemId);

        if (!$item->getItemId()) {
            throw new NoSuchEntityException(__('Item with ID "%1" does not exist.', $itemId));
        }

        return $item;
    }

    public function getList(SearchCriteriaInterface $searchCriteria): ItemSearchResultsInterface
    {
        $collection = $this->collectionFactory->create();
        $this->collectionProcessor->process($searchCriteria, $collection);

        $searchResults = $this->searchResultsFactory->create();
        $searchResults->setSearchCriteria($searchCriteria);
        $searchResults->setItems($collection->getItems());
        $searchResults->setTotalCount((int)$collection->getSize());

        return $searchResults;
    }

    public function delete(ItemInterface $item): bool
    {
        try {
            $this->itemResource->delete($item);
        } catch (\Exception $exception) {
            throw new CouldNotDeleteException(
                __('Unable to delete item: %1', $exception->getMessage()),
                $exception
            );
        }

        return true;
    }

    public function deleteById(int $itemId): bool
    {
        return $this->delete($this->getById($itemId));
    }
}
