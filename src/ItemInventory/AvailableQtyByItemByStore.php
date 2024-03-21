<?php

namespace Y2\ItemInventory;

class AvailableQtyByItemByStore
{
    protected ?string $ItemCode = null;

    protected ?ArrayOfStoreAvailableQty $StoresAvailableQty = null;

    public function __construct()
    {

    }

    public function getItemCode(): ?string
    {
        return $this->ItemCode;
    }

    public function setItemCode(string $ItemCode): static
    {
        $this->ItemCode = $ItemCode;
        return $this;
    }

    public function getStoresAvailableQty(): ?ArrayOfStoreAvailableQty
    {
        return $this->StoresAvailableQty;
    }

    public function setStoresAvailableQty(ArrayOfStoreAvailableQty $StoresAvailableQty): static
    {
        $this->StoresAvailableQty = $StoresAvailableQty;
        return $this;
    }

}
