<?php

namespace Y2\SaleDocument;

class UpdateHeader
{
    protected ?UpdateHeader_Request $updateHeaderRequest = null;

    protected ?RetailContext $clientContext = null;

    public function __construct(UpdateHeader_Request $updateHeaderRequest, RetailContext $clientContext)
    {
      $this->updateHeaderRequest = $updateHeaderRequest;
      $this->clientContext = $clientContext;
    }

    public function getUpdateHeaderRequest(): ?UpdateHeader_Request
    {
      return $this->updateHeaderRequest;
    }

    public function setUpdateHeaderRequest(UpdateHeader_Request $updateHeaderRequest): static
    {
      $this->updateHeaderRequest = $updateHeaderRequest;
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
