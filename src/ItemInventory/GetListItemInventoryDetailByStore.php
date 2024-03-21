<?php

namespace Y2\ItemInventory;

class GetListItemInventoryDetailByStore
{
    protected ?GetListItemInventoryDetailByStore_Request $inventoryStoreItemDetailRequest = null;

    protected ?RetailContext $clientContext = null;

    public function __construct(GetListItemInventoryDetailByStore_Request $inventoryStoreItemDetailRequest, RetailContext $clientContext)
    {
        $this->inventoryStoreItemDetailRequest = $inventoryStoreItemDetailRequest;
        $this->clientContext                   = $clientContext;
    }

    public function getInventoryStoreItemDetailRequest(): ?GetListItemInventoryDetailByStore_Request
    {
        return $this->inventoryStoreItemDetailRequest;
    }

    public function setInventoryStoreItemDetailRequest(GetListItemInventoryDetailByStore_Request $inventoryStoreItemDetailRequest): static
    {
        $this->inventoryStoreItemDetailRequest = $inventoryStoreItemDetailRequest;
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
