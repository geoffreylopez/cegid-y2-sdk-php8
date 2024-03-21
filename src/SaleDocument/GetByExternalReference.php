<?php

namespace Y2\SaleDocument;

class GetByExternalReference
{
    protected ?GetByExternalReference_Request $searchRequest = null;

    protected ?RetailContext $clientContext = null;

    public function __construct(GetByExternalReference_Request $searchRequest, RetailContext $clientContext)
    {
      $this->searchRequest = $searchRequest;
      $this->clientContext = $clientContext;
    }

    public function getSearchRequest(): ?GetByExternalReference_Request
    {
      return $this->searchRequest;
    }

    public function setSearchRequest(GetByExternalReference_Request $searchRequest): static
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
