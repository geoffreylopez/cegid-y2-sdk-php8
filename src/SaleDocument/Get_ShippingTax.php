<?php

namespace Y2\SaleDocument;

class Get_ShippingTax
{
    protected ?string $ShippingTaxCode = null;

    protected ?float $TaxExcludedAmount = null;

    protected ?float $TaxIncludedAmount = null;

    public function __construct()
    {
    
    }

    public function getShippingTaxCode(): ?string
    {
      return $this->ShippingTaxCode;
    }

    public function setShippingTaxCode(string $ShippingTaxCode): static
    {
      $this->ShippingTaxCode = $ShippingTaxCode;
      return $this;
    }

    public function getTaxExcludedAmount(): ?float
    {
      return $this->TaxExcludedAmount;
    }

    public function setTaxExcludedAmount(float $TaxExcludedAmount): static
    {
      $this->TaxExcludedAmount = $TaxExcludedAmount;
      return $this;
    }

    public function getTaxIncludedAmount(): ?float
    {
      return $this->TaxIncludedAmount;
    }

    public function setTaxIncludedAmount(float $TaxIncludedAmount): static
    {
      $this->TaxIncludedAmount = $TaxIncludedAmount;
      return $this;
    }

}
