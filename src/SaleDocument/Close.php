<?php

namespace Y2\SaleDocument;

class Close
{
    protected ?Close_Request $closeRequest = null;

    protected ?RetailContext $clientContext = null;

    public function __construct(Close_Request $closeRequest, RetailContext $clientContext)
    {
      $this->closeRequest = $closeRequest;
      $this->clientContext = $clientContext;
    }

    public function getCloseRequest(): ?Close_Request
    {
      return $this->closeRequest;
    }

    public function setCloseRequest(Close_Request $closeRequest): static
    {
      $this->closeRequest = $closeRequest;
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
