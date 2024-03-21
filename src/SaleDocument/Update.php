<?php

namespace Y2\SaleDocument;

class Update
{
    protected ?Update_Request $updateRequest = null;
    protected ?RetailContext $clientContext = null;

    public function __construct(Update_Request $updateRequest, RetailContext $clientContext)
    {
      $this->updateRequest = $updateRequest;
      $this->clientContext = $clientContext;
    }

    public function getUpdateRequest(): ?Update_Request
    {
      return $this->updateRequest;
    }

    public function setUpdateRequest(Update_Request $updateRequest): static
    {
      $this->updateRequest = $updateRequest;
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
