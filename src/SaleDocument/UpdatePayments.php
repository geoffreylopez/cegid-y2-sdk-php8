<?php

namespace Y2\SaleDocument;

class UpdatePayments
{
    protected ?UpdatePayments_Request $updatePaymentsRequest = null;

    protected ?RetailContext $clientContext = null;

    public function __construct(UpdatePayments_Request $updatePaymentsRequest, RetailContext $clientContext)
    {
      $this->updatePaymentsRequest = $updatePaymentsRequest;
      $this->clientContext = $clientContext;
    }


    public function getUpdatePaymentsRequest(): ?UpdatePayments_Request
    {
      return $this->updatePaymentsRequest;
    }

    public function setUpdatePaymentsRequest(UpdatePayments_Request $updatePaymentsRequest): static
    {
      $this->updatePaymentsRequest = $updatePaymentsRequest;
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
