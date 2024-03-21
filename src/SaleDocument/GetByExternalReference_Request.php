<?php

namespace Y2\SaleDocument;

class GetByExternalReference_Request
{
    protected ?string $ExternalReference = null;

    protected ?string $Type = null;

    public function __construct()
    {
    
    }

    public function getExternalReference(): ?string
    {
      return $this->ExternalReference;
    }

    public function setExternalReference(string $ExternalReference): static
    {
      $this->ExternalReference = $ExternalReference;
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
