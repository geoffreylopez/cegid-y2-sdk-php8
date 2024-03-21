<?php

namespace Y2\SaleDocument;

class CustomersReservationCreate_Request
{
    protected ?CustomersReservationCreate_Header $Header = null;

    protected ?ArrayOfCustomersReservationCreate_Line $Lines = null;

    protected ?ArrayOfCreate_Payment $Payments = null;

    public function __construct()
    {
    
    }

    public function getHeader(): ?CustomersReservationCreate_Header
    {
      return $this->Header;
    }

    public function setHeader(CustomersReservationCreate_Header $Header): static
    {
      $this->Header = $Header;
      return $this;
    }

    public function getLines(): ?ArrayOfCustomersReservationCreate_Line
    {
      return $this->Lines;
    }

    public function setLines(ArrayOfCustomersReservationCreate_Line $Lines): static
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

}
