<?php

namespace Y2\SaleDocument;

class SaleDocumentIdentifier
{
    protected ?SaleDocumentKey $Key = null;

    protected ?SaleDocumentReference $Reference = null;
    
    public function __construct()
    {
    
    }

    public function getKey(): ?SaleDocumentKey
    {
      return $this->Key;
    }

    public function setKey(SaleDocumentKey $Key): static
    {
      $this->Key = $Key;
      return $this;
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
