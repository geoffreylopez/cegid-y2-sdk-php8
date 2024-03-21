<?php

namespace Y2\SaleDocument;

class CreditCard
{
    protected ?string $AuthorizationNumber = null;

    protected ?string $TransactionNumber = null;
    
    public function __construct()
    {
    
    }

    public function getAuthorizationNumber(): ?string
    {
      return $this->AuthorizationNumber;
    }

    public function setAuthorizationNumber(string $AuthorizationNumber): static
    {
      $this->AuthorizationNumber = $AuthorizationNumber;
      return $this;
    }

    public function getTransactionNumber(): ?string
    {
      return $this->TransactionNumber;
    }

    public function setTransactionNumber(string $TransactionNumber): static
    {
      $this->TransactionNumber = $TransactionNumber;
      return $this;
    }

}
