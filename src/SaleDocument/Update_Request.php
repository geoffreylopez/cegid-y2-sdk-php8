<?php

namespace Y2\SaleDocument;

class Update_Request
{
    protected ?Address $DeliveryAddress = null;

    protected ?Update_Header $Header = null;

    protected ?SaleDocumentIdentifier $Identifier = null;

    protected ?Address $InvoicingAddress = null;

    protected ?ArrayOfUpdate_Line $Lines = null;

    protected ?ArrayOfUpdate_Payment $Payments = null;

    protected ?ArrayOfUpdate_ShippingTax $ShippingTaxes = null;

    public function __construct()
    {
    
    }

    public function getDeliveryAddress(): ?Address
    {
      return $this->DeliveryAddress;
    }

    public function setDeliveryAddress(Address $DeliveryAddress): static
    {
      $this->DeliveryAddress = $DeliveryAddress;
      return $this;
    }

    public function getHeader(): ?Update_Header
    {
      return $this->Header;
    }

    public function setHeader(Update_Header $Header): static
    {
      $this->Header = $Header;
      return $this;
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

    public function getInvoicingAddress(): ?Address
    {
      return $this->InvoicingAddress;
    }

    public function setInvoicingAddress(Address $InvoicingAddress): static
    {
      $this->InvoicingAddress = $InvoicingAddress;
      return $this;
    }

    public function getLines(): ?ArrayOfUpdate_Line
    {
      return $this->Lines;
    }

    public function setLines(ArrayOfUpdate_Line $Lines): static
    {
      $this->Lines = $Lines;
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

    public function getShippingTaxes(): ?ArrayOfUpdate_ShippingTax
    {
      return $this->ShippingTaxes;
    }

    public function setShippingTaxes(ArrayOfUpdate_ShippingTax $ShippingTaxes): static
    {
      $this->ShippingTaxes = $ShippingTaxes;
      return $this;
    }

}
