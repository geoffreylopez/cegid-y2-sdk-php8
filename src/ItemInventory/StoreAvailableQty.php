<?php

namespace Y2\ItemInventory;

class StoreAvailableQty
{
    protected ?float $AvailableQuantity = null;

    protected ?ArrayOfAvailableSkuQty $AvailableSkusQty = null;

    protected ?string $StoreId = null;

    protected ?string $StoreName = null;

    public function __construct()
    {

    }

    public function getAvailableQuantity(): ?float
    {
        return $this->AvailableQuantity;
    }

    public function setAvailableQuantity(float $AvailableQuantity): static
    {
        $this->AvailableQuantity = $AvailableQuantity;
        return $this;
    }

    public function getAvailableSkusQty(): ?ArrayOfAvailableSkuQty
    {
        return $this->AvailableSkusQty;
    }

    public function setAvailableSkusQty(ArrayOfAvailableSkuQty $AvailableSkusQty): static
    {
        $this->AvailableSkusQty = $AvailableSkusQty;
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

    public function getStoreName(): ?string
    {
        return $this->StoreName;
    }

    public function setStoreName(string $StoreName): static
    {
        $this->StoreName = $StoreName;
        return $this;
    }

}
