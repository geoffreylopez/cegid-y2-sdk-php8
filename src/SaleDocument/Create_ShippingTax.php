<?php

namespace Y2\SaleDocument;

class Create_ShippingTax
{
    protected ?float $Amount = null;

    protected ?string $Id = null;
    
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

    public function getId(): ?string
    {
      return $this->Id;
    }

    public function setId(string $Id): static
    {
      $this->Id = $Id;
      return $this;
    }

}
