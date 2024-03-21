<?php

namespace Y2\ItemInventory;

class GetInventoryDetailByStoreResponse
{
    protected ?ArrayOfAvailableQtyByStore $GetInventoryDetailByStoreResult = null;

    public function __construct(ArrayOfAvailableQtyByStore $GetInventoryDetailByStoreResult)
    {
        $this->GetInventoryDetailByStoreResult = $GetInventoryDetailByStoreResult;
    }

    public function getGetInventoryDetailByStoreResult(): ?ArrayOfAvailableQtyByStore
    {
        return $this->GetInventoryDetailByStoreResult;
    }

    public function setGetInventoryDetailByStoreResult(ArrayOfAvailableQtyByStore $GetInventoryDetailByStoreResult): static
    {
        $this->GetInventoryDetailByStoreResult = $GetInventoryDetailByStoreResult;
        return $this;
    }

}
