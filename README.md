# Magento 2 Service Contract CRUD Example

This repository contains a complete Magento 2 example module implementing CRUD operations through a service contract and REST API.

## Module

`Vendor_ServiceContractCrud`

Path in this repository:

```text
app/code/Vendor/ServiceContractCrud
```

## What this module includes

- Declarative schema table `vendor_servicecontractcrud_item`
- API data interfaces (`ItemInterface`, search results interface)
- Repository service contract (`ItemRepositoryInterface`)
- Repository implementation with save/get/list/delete methods
- Resource model + collection
- DI preferences
- ACL + Web API endpoints

## Installation

Copy the module into your Magento installation under `app/code/Vendor/ServiceContractCrud`, then run:

```bash
bin/magento module:enable Vendor_ServiceContractCrud
bin/magento setup:upgrade
bin/magento cache:flush
```

## REST endpoints

All routes require an authenticated admin token with ACL permission `Vendor_ServiceContractCrud::service_contract_crud`.

### Create (POST)

`POST /rest/V1/service-contract-crud/item`

Body:

```json
{
  "item": {
    "sku": "demo-001",
    "name": "Demo Item",
    "description": "Created by API",
    "is_active": true
  }
}
```

### Read by ID (GET)

`GET /rest/V1/service-contract-crud/item/{itemId}`

### List (GET)

`GET /rest/V1/service-contract-crud/items?searchCriteria[currentPage]=1&searchCriteria[pageSize]=20`

### Update (POST)

Use the same create endpoint and include `item_id`:

`POST /rest/V1/service-contract-crud/item`

```json
{
  "item": {
    "item_id": 1,
    "sku": "demo-001",
    "name": "Updated Item",
    "description": "Updated by API",
    "is_active": false
  }
}
```

### Delete (DELETE)

`DELETE /rest/V1/service-contract-crud/item/{itemId}`

## Notes

- `sku` is unique.
- `created_at` and `updated_at` are managed by DB timestamps.
- This is intentionally minimal and focused on service-contract-driven CRUD.
