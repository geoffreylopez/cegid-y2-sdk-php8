<?php

namespace Y2\SaleDocument;

class Update_Tax
{
    protected ?float $Amount = null;

    protected ?string $FamilyId = null;

    public function __construct()
    {
    
    }

    public function getAmount(): ?float
    {
      return $this->Amount;
    }

    public function setAmount(float $Amount): static
    {
      $this->Amount = $Amount;
      return $this;
    }

    public function getFamilyId(): ?string
    {
      return $this->FamilyId;
    }

    public function setFamilyId(string $FamilyId): static
    {
      $this->FamilyId = $FamilyId;
      return $this;
    }

}
