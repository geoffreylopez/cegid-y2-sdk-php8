<?php

namespace Y2\SaleDocument;

class SaleDocumentKey
{
    protected ?int $Number = null;
    protected ?string $Stump = null;
    protected ?string $Type = null;
    
    public function __construct()
    {
    
    }

    public function getNumber(): ?int
    {
      return $this->Number;
    }

    public function setNumber(int $Number): static
    {
      $this->Number = $Number;
      return $this;
    }

    public function getStump(): ?string
    {
      return $this->Stump;
    }

    public function setStump(string $Stump): static
    {
      $this->Stump = $Stump;
      return $this;
    }

    public function getType(): ?string
    {
      return $this->Type;
    }

    public function setType(string $Type): static
    {
      $this->Type = $Type;
      return $this;
    }

}
