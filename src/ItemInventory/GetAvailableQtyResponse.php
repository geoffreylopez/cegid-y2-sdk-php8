<?php

namespace Y2\ItemInventory;

class GetAvailableQtyResponse
{
    protected ?AvailableQtyReturn $GetAvailableQtyResult = null;

    public function __construct(AvailableQtyReturn $GetAvailableQtyResult)
    {
        $this->GetAvailableQtyResult = $GetAvailableQtyResult;
    }

    public function getGetAvailableQtyResult(): ?AvailableQtyReturn
    {
        return $this->GetAvailableQtyResult;
    }

    public function setGetAvailableQtyResult(AvailableQtyReturn $GetAvailableQtyResult): static
    {
        $this->GetAvailableQtyResult = $GetAvailableQtyResult;
        return $this;
    }

}
