<?php

namespace Y2\SaleDocument;

class Cancel_Request
{
    protected ?SaleDocumentIdentifier $Identifier = null;

    protected ?string $ReasonId = null;

    
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

    public function getReasonId(): ?string
    {
      return $this->ReasonId;
    }

    public function setReasonId(string $ReasonId): static
    {
      $this->ReasonId = $ReasonId;
      return $this;
    }

}
