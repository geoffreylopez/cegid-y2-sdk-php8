<?php

namespace Y2\SaleDocument;

class CustomersReservationCreateResponse
{

    protected ?CustomersReservationCreate_Reply $CustomersReservationCreateResult = null;

    public function __construct(CustomersReservationCreate_Reply $CustomersReservationCreateResult)
    {
      $this->CustomersReservationCreateResult = $CustomersReservationCreateResult;
    }

    public function getCustomersReservationCreateResult(): ?CustomersReservationCreate_Reply
    {
      return $this->CustomersReservationCreateResult;
    }

    public function setCustomersReservationCreateResult(CustomersReservationCreate_Reply $CustomersReservationCreateResult): static
    {
      $this->CustomersReservationCreateResult = $CustomersReservationCreateResult;
      return $this;
    }

}
