<?php

namespace Y2\SaleDocument;

class GetByKey
{
    protected ?GetByKey_Request $searchRequest = null;

    protected ?RetailContext $clientContext = null;

    public function __construct(GetByKey_Request $searchRequest, RetailContext $clientContext)
    {
      $this->searchRequest = $searchRequest;
      $this->clientContext = $clientContext;
    }

    public function getSearchRequest(): ?GetByKey_Request
    {
      return $this->searchRequest;
    }

    public function setSearchRequest(GetByKey_Request $searchRequest): static
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
