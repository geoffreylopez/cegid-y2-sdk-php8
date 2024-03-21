<?php

namespace Y2\SaleDocument;

class Unlock
{
    protected ?Unlock_Request $unlockRequest = null;

    protected ?RetailContext $clientContext = null;

    public function __construct(Unlock_Request $unlockRequest, RetailContext $clientContext)
    {
      $this->unlockRequest = $unlockRequest;
      $this->clientContext = $clientContext;
    }

    public function getUnlockRequest(): ?Unlock_Request
    {
      return $this->unlockRequest;
    }

    public function setUnlockRequest(Unlock_Request $unlockRequest): static
    {
      $this->unlockRequest = $unlockRequest;
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
