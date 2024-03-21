<?php

namespace Y2\SaleDocument;

class GetByReference_Request
{
    protected ?SaleDocumentReference $Reference = null;

    public function __construct()
    {
    
    }

    public function getReference(): ?SaleDocumentReference
    {
      return $this->Reference;
    }

    public function setReference(SaleDocumentReference $Reference): static
    {
      $this->Reference = $Reference;
      return $this;
    }

}
