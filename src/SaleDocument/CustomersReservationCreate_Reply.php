<?php

namespace Y2\SaleDocument;

class CustomersReservationCreate_Reply
{
    protected ?SaleDocumentKey $Key = null;

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

}
