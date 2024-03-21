<?php

namespace Y2\ItemInventory;

class GetAvailableCumulativeQtyAllStoresResponse
{
    protected ?AvailableQtyReturn $GetAvailableCumulativeQtyAllStoresResult = null;

    public function __construct(AvailableQtyReturn $GetAvailableCumulativeQtyAllStoresResult)
    {
        $this->GetAvailableCumulativeQtyAllStoresResult = $GetAvailableCumulativeQtyAllStoresResult;
    }

    public function getGetAvailableCumulativeQtyAllStoresResult(): ?AvailableQtyReturn
    {
        return $this->GetAvailableCumulativeQtyAllStoresResult;
    }

    public function setGetAvailableCumulativeQtyAllStoresResult(AvailableQtyReturn $GetAvailableCumulativeQtyAllStoresResult): static
    {
        $this->GetAvailableCumulativeQtyAllStoresResult = $GetAvailableCumulativeQtyAllStoresResult;
        return $this;
    }

}
