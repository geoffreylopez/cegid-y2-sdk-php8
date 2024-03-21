<?php

namespace Y2\SaleDocument;

class Unlock_Request
{
    protected ?SaleDocumentIdentifier $Identifier = null;

    public function __construct()
    {
    
    }

    public function getIdentifier(): ?SaleDocumentIdentifier
    {
      return $this->Identifier;
    }

    public function setIdentifier(SaleDocumentIdentifier $Identifier): static
    {
      $this->Identifier = $Identifier;
      return $this;
    }

}
