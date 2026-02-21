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

    /**
     * Get item ID
     *
     * @return int|null
     */
    public function getItemId(): ?int;

    /**
     * Set item ID
     *
     * @param int $itemId
     * @return ItemInterface
     */
    public function setItemId(int $itemId): ItemInterface;

    /**
     * Get SKU
     *
     * @return string
     */
    public function getSku(): string;

    /**
     * Set SKU
     *
     * @param string $sku
     * @return ItemInterface
     */
    public function setSku(string $sku): ItemInterface;

    /**
     * Get name
     *
     * @return string
     */
    public function getName(): string;

    /**
     * Set name
     *
     * @param string $name
     * @return ItemInterface
     */
    public function setName(string $name): ItemInterface;

    /**
     * Get description
     *
     * @return string|null
     */
    public function getDescription(): ?string;

    /**
     * Set description
     *
     * @param string|null $description
     * @return ItemInterface
     */
    public function setDescription(?string $description): ItemInterface;

    /**
     * Get is active flag
     *
     * @return bool
     */
    public function getIsActive(): bool;

    /**
     * Set is active flag
     *
     * @param bool $isActive
     * @return ItemInterface
     */
    public function setIsActive(bool $isActive): ItemInterface;

    /**
     * Get created at timestamp
     *
     * @return string|null
     */
    public function getCreatedAt(): ?string;

    /**
     * Set created at timestamp
     *
     * @param string|null $createdAt
     * @return ItemInterface
     */
    public function setCreatedAt(?string $createdAt): ItemInterface;

    /**
     * Get updated at timestamp
     *
     * @return string|null
     */
    public function getUpdatedAt(): ?string;

    /**
     * Set updated at timestamp
     *
     * @param string|null $updatedAt
     * @return ItemInterface
     */
    public function setUpdatedAt(?string $updatedAt): ItemInterface;
}
