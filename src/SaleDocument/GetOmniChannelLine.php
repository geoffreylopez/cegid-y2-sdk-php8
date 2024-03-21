<?php

namespace Y2\SaleDocument;

class GetOmniChannelLine
{
    protected ?string $FollowUpStatus = null;

    protected ?string $WarehouseId = null;

    public function __construct()
    {
    
    }

    public function getFollowUpStatus(): ?string
    {
      return $this->FollowUpStatus;
    }

    public function setFollowUpStatus(string $FollowUpStatus): static
    {
      $this->FollowUpStatus = $FollowUpStatus;
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
