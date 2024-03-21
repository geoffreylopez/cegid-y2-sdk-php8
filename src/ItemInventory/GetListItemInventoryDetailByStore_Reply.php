<?php

namespace Y2\ItemInventory;

class GetListItemInventoryDetailByStore_Reply
{
    protected ?ArrayOfAvailableQtyByItemByStore $InventoryDetailsByStore = null;

    public function __construct()
    {

    }

    public function getInventoryDetailsByStore(): ?ArrayOfAvailableQtyByItemByStore
    {
        return $this->InventoryDetailsByStore;
    }

    public function setInventoryDetailsByStore(ArrayOfAvailableQtyByItemByStore $InventoryDetailsByStore): static
    {
        $this->InventoryDetailsByStore = $InventoryDetailsByStore;
        return $this;
    }

}
