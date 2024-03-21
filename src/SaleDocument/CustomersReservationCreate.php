<?php

namespace Y2\SaleDocument;

class CustomersReservationCreate
{
    protected ?CustomersReservationCreate_Request $customersReservationCreateRequest = null;

    protected ?RetailContext $clientContext = null;

    public function __construct(CustomersReservationCreate_Request $customersReservationCreateRequest, RetailContext $clientContext)
    {
      $this->customersReservationCreateRequest = $customersReservationCreateRequest;
      $this->clientContext = $clientContext;
    }

    public function getCustomersReservationCreateRequest(): ?CustomersReservationCreate_Request
    {
      return $this->customersReservationCreateRequest;
    }

    public function setCustomersReservationCreateRequest(CustomersReservationCreate_Request $customersReservationCreateRequest): static
    {
      $this->customersReservationCreateRequest = $customersReservationCreateRequest;
      return $this;
    }

    public function getClientContext(): ?RetailContext
    {
      return $this->clientContext;
    }

    public function setClientContext(RetailContext $clientContext): static
    {
      $this->clientContext = $clientContext;
      return $this;
    }

}
