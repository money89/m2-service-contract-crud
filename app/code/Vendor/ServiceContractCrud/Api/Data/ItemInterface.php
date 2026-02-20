<?php

declare(strict_types=1);

namespace Vendor\ServiceContractCrud\Api\Data;

use Magento\Framework\Api\CustomAttributesDataInterface;

interface ItemInterface extends CustomAttributesDataInterface
{
    public const ITEM_ID = 'item_id';
    public const SKU = 'sku';
    public const NAME = 'name';
    public const DESCRIPTION = 'description';
    public const IS_ACTIVE = 'is_active';
    public const CREATED_AT = 'created_at';
    public const UPDATED_AT = 'updated_at';

    public function getItemId(): ?int;

    public function setItemId(int $itemId): ItemInterface;

    public function getSku(): string;

    public function setSku(string $sku): ItemInterface;

    public function getName(): string;

    public function setName(string $name): ItemInterface;

    public function getDescription(): ?string;

    public function setDescription(?string $description): ItemInterface;

    public function getIsActive(): bool;

    public function setIsActive(bool $isActive): ItemInterface;

    public function getCreatedAt(): ?string;

    public function setCreatedAt(?string $createdAt): ItemInterface;

    public function getUpdatedAt(): ?string;

    public function setUpdatedAt(?string $updatedAt): ItemInterface;
}
