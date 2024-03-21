<?php

namespace Y2\ItemInventory;

class AvailableQtyReturn
{
    protected ?float $AvailableQty = null;

    protected ?string $QueryStatus = null;

    public function __construct()
    {

    }

    public function getAvailableQty(): ?float
    {
        return $this->AvailableQty;
    }

    public function setAvailableQty(?float $AvailableQty): static
    {
        $this->AvailableQty = $AvailableQty;
        return $this;
    }

    public function getQueryStatus(): ?string
    {
        return $this->QueryStatus;
    }

    public function setQueryStatus(?string $QueryStatus): static
    {
        $this->QueryStatus = $QueryStatus;
        return $this;
    }

}
