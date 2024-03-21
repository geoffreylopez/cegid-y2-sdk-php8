<?php

namespace Y2\SaleDocument;

class Cancel
{
    protected ?Cancel_Request $cancelRequest = null;

    protected ?RetailContext $clientContext = null;

    /**
     * @param Cancel_Request $cancelRequest
     * @param RetailContext $clientContext
     */
    public function __construct(Cancel_Request $cancelRequest, RetailContext $clientContext)
    {
      $this->cancelRequest = $cancelRequest;
      $this->clientContext = $clientContext;
    }

    public function getCancelRequest(): ?Cancel_Request
    {
      return $this->cancelRequest;
    }

    public function setCancelRequest(Cancel_Request $cancelRequest): static
    {
      $this->cancelRequest = $cancelRequest;
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
