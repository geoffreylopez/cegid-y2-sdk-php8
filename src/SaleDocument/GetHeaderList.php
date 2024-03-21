<?php

namespace Y2\SaleDocument;

class GetHeaderList
{
    protected ?GetHeaderList_Request $searchRequest = null;

    protected ?RetailContext $clientContext = null;

    public function __construct(GetHeaderList_Request $searchRequest, RetailContext $clientContext)
    {
      $this->searchRequest = $searchRequest;
      $this->clientContext = $clientContext;
    }

    public function getSearchRequest(): ?GetHeaderList_Request
    {
      return $this->searchRequest;
    }

    public function setSearchRequest(GetHeaderList_Request $searchRequest): static
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
