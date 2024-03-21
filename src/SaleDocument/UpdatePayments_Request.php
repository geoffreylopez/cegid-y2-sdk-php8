<?php

namespace Y2\SaleDocument;

class UpdatePayments_Request
{
    protected ?SaleDocumentIdentifier $Identifier = null;

    protected ?ArrayOfUpdate_Payment $Payments = null;
    
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

    public function getPayments(): ?ArrayOfUpdate_Payment
    {
      return $this->Payments;
    }

    public function setPayments(ArrayOfUpdate_Payment $Payments): static
    {
      $this->Payments = $Payments;
      return $this;
    }

}
