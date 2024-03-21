<?php

namespace Y2\ItemInventory;

class ResetShoppingCart_Request
{
    protected ?ItemIdentifier $ItemIdentifier = null;

    protected ?string $WarehouseId = null;

    public function __construct()
    {

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
