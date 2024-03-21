<?php

namespace Y2\SaleDocument;

class SaleDocumentLineIdentifier
{
    protected ?SaleDocumentIdentifier $DocumentId = null;

    protected ?int $LineId = null;

    public function __construct()
    {
    
    }

    public function getDocumentId(): ?SaleDocumentIdentifier
    {
      return $this->DocumentId;
    }

    public function setDocumentId(SaleDocumentIdentifier $DocumentId): static
    {
      $this->DocumentId = $DocumentId;
      return $this;
    }

    public function getLineId(): ?int
    {
      return $this->LineId;
    }

    public function setLineId(int $LineId): static
    {
      $this->LineId = $LineId;
      return $this;
    }

}
