<?php

declare(strict_types=1);

namespace Vendor\ServiceContractCrud\Model;

use Magento\Framework\Model\AbstractExtensibleModel;
use Vendor\ServiceContractCrud\Api\Data\ItemInterface;

class Item extends AbstractExtensibleModel implements ItemInterface
{
    protected function _construct(): void
    {
        $this->_init(ResourceModel\Item::class);
    }

    public function getItemId(): ?int
    {
        $itemId = $this->_getData(self::ITEM_ID);

        return $itemId !== null ? (int)$itemId : null;
    }

    public function setItemId(int $itemId): ItemInterface
    {
        return $this->setData(self::ITEM_ID, $itemId);
    }

    public function getSku(): string
    {
        return (string)$this->_getData(self::SKU);
    }

    public function setSku(string $sku): ItemInterface
    {
        return $this->setData(self::SKU, $sku);
    }

    public function getName(): string
    {
        return (string)$this->_getData(self::NAME);
    }

    public function setName(string $name): ItemInterface
    {
        return $this->setData(self::NAME, $name);
    }

    public function getDescription(): ?string
    {
        $description = $this->_getData(self::DESCRIPTION);

        return $description !== null ? (string)$description : null;
    }

    public function setDescription(?string $description): ItemInterface
    {
        return $this->setData(self::DESCRIPTION, $description);
    }

    public function getIsActive(): bool
    {
        return (bool)$this->_getData(self::IS_ACTIVE);
    }

    public function setIsActive(bool $isActive): ItemInterface
    {
        return $this->setData(self::IS_ACTIVE, $isActive);
    }

    public function getCreatedAt(): ?string
    {
        $createdAt = $this->_getData(self::CREATED_AT);

        return $createdAt !== null ? (string)$createdAt : null;
    }

    public function setCreatedAt(?string $createdAt): ItemInterface
    {
        return $this->setData(self::CREATED_AT, $createdAt);
    }

    public function getUpdatedAt(): ?string
    {
        $updatedAt = $this->_getData(self::UPDATED_AT);

        return $updatedAt !== null ? (string)$updatedAt : null;
    }

    public function setUpdatedAt(?string $updatedAt): ItemInterface
    {
        return $this->setData(self::UPDATED_AT, $updatedAt);
    }
}
