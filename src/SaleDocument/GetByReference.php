<?php

namespace Y2\SaleDocument;

class GetByReference
{
    protected ?GetByReference_Request $searchRequest = null;

    protected ?RetailContext $clientContext = null;

    public function __construct(GetByReference_Request $searchRequest, RetailContext $clientContext)
    {
      $this->searchRequest = $searchRequest;
      $this->clientContext = $clientContext;
    }

    public function getSearchRequest(): ?GetByReference_Request
    {
      return $this->searchRequest;
    }

    public function setSearchRequest(GetByReference_Request $searchRequest): static
    {
      $this->searchRequest = $searchRequest;
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
