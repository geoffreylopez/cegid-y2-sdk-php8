<?php

namespace Y2\SaleDocument;

class OmniChannelLine
{
    protected ?string $WarehouseId = null;

    public function __construct()
    {
    
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
