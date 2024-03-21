<?php

namespace Y2\SaleDocument;

class Get_Reply
{
    protected ?Address $DeliveryAddress = null;

    protected ?Get_Header $Header = null;

    protected ?Address $InvoicingAddress = null;

    protected ?ArrayOfGet_Line $Lines = null;

    protected ?ArrayOfGet_Payment $Payments = null;

    protected ?ArrayOfGet_ShippingTax $ShippingTaxes = null;

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

    public function getHeader(): ?Get_Header
    {
      return $this->Header;
    }

    public function setHeader(Get_Header $Header): static
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

    public function getLines(): ?ArrayOfGet_Line
    {
      return $this->Lines;
    }

    public function setLines(ArrayOfGet_Line $Lines): static
    {
      $this->Lines = $Lines;
      return $this;
    }

    public function getPayments(): ?ArrayOfGet_Payment
    {
      return $this->Payments;
    }

    public function setPayments(ArrayOfGet_Payment $Payments): static
    {
      $this->Payments = $Payments;
      return $this;
    }

    public function getShippingTaxes(): ?ArrayOfGet_ShippingTax
    {
      return $this->ShippingTaxes;
    }

    public function setShippingTaxes(ArrayOfGet_ShippingTax $ShippingTaxes): static
    {
      $this->ShippingTaxes = $ShippingTaxes;
      return $this;
    }

}
