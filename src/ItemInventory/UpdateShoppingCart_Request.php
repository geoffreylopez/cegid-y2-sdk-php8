<?php

namespace Y2\ItemInventory;

class UpdateShoppingCart_Request
{
    protected ?ItemIdentifier $ItemIdentifier = null;

    protected ?float $Quantity = null;

    protected ?string $WarehouseId = null;

    public function __construct(float $Quantity)
    {
        $this->Quantity = $Quantity;
    }

    public function getItemIdentifier(): ?ItemIdentifier
    {
        return $this->ItemIdentifier;
    }

    public function setItemIdentifier(ItemIdentifier $ItemIdentifier): static
    {
        $this->ItemIdentifier = $ItemIdentifier;
        return $this;
    }

    public function getQuantity(): ?float
    {
        return $this->Quantity;
    }

    public function setQuantity(float $Quantity): static
    {
        $this->Quantity = $Quantity;
        return $this;
    }

    public function getWarehouseId(): ?string
    {
        return $this->WarehouseId;
    }

    public function setWarehouseId(string $WarehouseId): static
    {
        $this->WarehouseId = $WarehouseId;
        return $this;
    }

}
