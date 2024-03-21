<?php

namespace Y2\ItemInventory;

class GetAvailableQty
{
    protected ?string $itemId = null;

    protected ?ItemIdentifier $itemIdentifier = null;

    protected ?string $storeId = null;

    protected ?string $warehouseId = null;

    protected ?RetailContext $clientContext = null;

    public function __construct(ItemIdentifier $itemIdentifier, string $itemId = null, string $storeId = null,
                                string         $warehouseId = null, RetailContext $clientContext = null)
    {
        $this->itemIdentifier = $itemIdentifier;
        $this->itemId         = $itemId;
        $this->storeId        = $storeId;
        $this->warehouseId    = $warehouseId;
        $this->clientContext  = $clientContext;
    }

    public function getItemId(): ?string
    {
        return $this->itemId;
    }

    public function setItemId(string $itemId): static
    {
        $this->itemId = $itemId;
        return $this;
    }

    public function getItemIdentifier(): ?ItemIdentifier
    {
        return $this->itemIdentifier;
    }

    public function setItemIdentifier(ItemIdentifier $itemIdentifier): static
    {
        $this->itemIdentifier = $itemIdentifier;
        return $this;
    }

    public function getStoreId(): ?string
    {
        return $this->storeId;
    }

    public function setStoreId(string $storeId): static
    {
        $this->storeId = $storeId;
        return $this;
    }

    public function getWarehouseId(): ?string
    {
        return $this->warehouseId;
    }

    public function setWarehouseId(string $warehouseId): static
    {
        $this->warehouseId = $warehouseId;
        return $this;
    }

    public function getClientContext(): ?RetailContext
    {
        return $this->clientContext;
    }

    public function setClientContext(RetailContext $clientContext): static
    {
        $this->clientContext = $clientContext;
        return $this;
    }

}
