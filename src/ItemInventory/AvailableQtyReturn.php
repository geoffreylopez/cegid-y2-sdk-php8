<?php

namespace Y2\ItemInventory;

class AvailableQtyReturn
{
    protected ?float $AvailableQty = null;

    protected ?QueryExecutionStatus $QueryStatus = null;

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

    public function getQueryStatus(): ?QueryExecutionStatus
    {
        return $this->QueryStatus;
    }

    public function setQueryStatus(QueryExecutionStatus $QueryStatus): static
    {
        $this->QueryStatus = $QueryStatus;
        return $this;
    }

}
