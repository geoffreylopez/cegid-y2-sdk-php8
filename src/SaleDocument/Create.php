<?php

namespace Y2\SaleDocument;

class Create
{
    protected ?Create_Request $createRequest = null;

    protected ?RetailContext $clientContext = null;

    public function __construct(Create_Request $createRequest, RetailContext $clientContext)
    {
      $this->createRequest = $createRequest;
      $this->clientContext = $clientContext;
    }

    public function getCreateRequest(): ?Create_Request
    {
      return $this->createRequest;
    }

    public function setCreateRequest(Create_Request $createRequest): static
    {
      $this->createRequest = $createRequest;
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
