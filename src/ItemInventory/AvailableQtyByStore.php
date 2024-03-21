<?php

namespace Y2\ItemInventory;

class AvailableQtyByStore
{
    protected ?float $AvailableQty = null;

    protected ?string $StoreDescription = null;

    protected ?string $StoreId = null;
    
    public function __construct()
    {

    }

    public function getAvailableQty(): ?float
    {
        return $this->AvailableQty;
    }

    public function setAvailableQty(float $AvailableQty): static
    {
        $this->AvailableQty = $AvailableQty;
        return $this;
    }

    public function getStoreDescription(): ?string
    {
        return $this->StoreDescription;
    }

    public function setStoreDescription(string $StoreDescription): static
    {
        $this->StoreDescription = $StoreDescription;
        return $this;
    }

    public function getStoreId(): ?string
    {
        return $this->StoreId;
    }

    public function setStoreId(string $StoreId): static
    {
        $this->StoreId = $StoreId;
        return $this;
    }

}
