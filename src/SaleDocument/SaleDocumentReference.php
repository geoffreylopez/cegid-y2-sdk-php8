<?php

namespace Y2\SaleDocument;

class SaleDocumentReference
{
    protected ?string $CustomerId = null;

    protected ?string $InternalReference = null;

    protected ?string $Type = null;

    public function __construct()
    {
    
    }

    public function getCustomerId(): ?string
    {
      return $this->CustomerId;
    }

    public function setCustomerId(string $CustomerId): static
    {
      $this->CustomerId = $CustomerId;
      return $this;
    }

    public function getInternalReference(): ?string
    {
      return $this->InternalReference;
    }

    public function setInternalReference(string $InternalReference): static
    {
      $this->InternalReference = $InternalReference;
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
