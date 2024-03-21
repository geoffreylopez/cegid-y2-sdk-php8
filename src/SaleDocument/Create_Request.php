<?php

namespace Y2\SaleDocument;

class Create_Request
{
    protected ?Address $DeliveryAddress = null;

    protected ?Create_Header $Header = null;

    protected ?Address $InvoicingAddress = null;

    protected ?ArrayOfCreate_Line $Lines = null;

    protected ?ArrayOfCreate_Payment $Payments = null;

    protected ?ArrayOfCreate_ShippingTax $ShippingTaxes = null;

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

    public function getHeader(): ?Create_Header
    {
      return $this->Header;
    }

    public function setHeader(Create_Header $Header): static
    {
      $this->Header = $Header;
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

    public function getLines(): ?ArrayOfCreate_Line
    {
      return $this->Lines;
    }

    public function setLines(ArrayOfCreate_Line $Lines): static
    {
      $this->Lines = $Lines;
      return $this;
    }

    public function getPayments(): ?ArrayOfCreate_Payment
    {
      return $this->Payments;
    }

    public function setPayments(ArrayOfCreate_Payment $Payments): static
    {
      $this->Payments = $Payments;
      return $this;
    }

    public function getShippingTaxes(): ?ArrayOfCreate_ShippingTax
    {
      return $this->ShippingTaxes;
    }

    public function setShippingTaxes(ArrayOfCreate_ShippingTax $ShippingTaxes): static
    {
      $this->ShippingTaxes = $ShippingTaxes;
      return $this;
    }

}
